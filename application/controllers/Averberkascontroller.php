<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Averberkascontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('Mverifdokumen');
		$this->load->model('Mverifkemba');
		$this->load->model('Mverifjaminan');
		$this->load->model('Mverifslik');
		$this->load->model('Mnasabah');
		$this->load->model('Mkriteriajaminan');
		$this->load->model('Mkriteriakeldok');
		$this->load->model('Mkriteriakemba');
		$this->load->model('Mkriteriaslik');
		$this->load->model('Mnotifikasi');
	}
	public function akeldok()
	{
		$data['keldoks'] = $this->Mverifdokumen->getVDUser();
		$this->load->view('akeldok', $data);
	}

	public function averifkeldok($idVD){
		$data['verifDokumen'] = $this->Mverifdokumen->get(['ID_VD' => $idVD]);
		$data['dokProf'] 	  = $this->db->get_where('dokumen_profesional', ['ID_VD' => $idVD])->row();
		$data['dokKary'] 	  = $this->db->get_where('dokumen_karyawan', ['ID_VD' => $idVD])->row();
		$data['dokWira'] 	  = $this->db->get_where('dokumen_wiraswasta', ['ID_VD' => $idVD])->row();
		$data['kriteria'] 	  = $this->Mkriteriakeldok->getAll();
		$this->load->view('averifkeldok', $data);
	}

	public function proses_verifkeldok(){
		$emailNas = $this->Mverifdokumen->getById($_POST['idVD'])->EMAIL_NAS;
		$dataUpdate = array(
			'ID_VD' => $_POST['idVD'],
			'STATUS_VD' => $_POST['status'],
			'KOMENTAR_VD' => $_POST['komentar'],
			'EMAIL_NAS' => $emailNas
		);
		if($_POST['status'] == '3'){
			$dataUpdate['ID_KD'] = $_POST['kriteria'];
		}
		$this->Mverifdokumen->update($dataUpdate);

		$idVKB = $this->Mverifkemba->get(['EMAIL_NAS' => $emailNas])[0]->ID_VKB;
		$harrum = str_replace(',','', $_POST['harrum']);
		$dataUpdateVerifKemba = array(
			'ID_VKB' => $idVKB,
			'HARRUM_VKB' => $harrum,
			'DP_VKB' => ((int)$harrum * 10) / 100,
			'HARRUMBANK_VKB' => ((int)$harrum * 90) / 100
		);
		$this->Mverifkemba->update($dataUpdateVerifKemba);

		if($_POST['status'] == '3'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '3',
				'ADMIN_NOTIF'	=> '0'
			]);
		}else if($_POST['status'] == '4'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Pengajuan kelengkapan dokumen anda telah ditolak!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '4',
				'ADMIN_NOTIF'	=> '0'
			]);
		}

		redirect('admin/keldok');
	}

	public function akemba()
	{
		$data['kembas'] 	= $this->Mverifkemba->getVDUser();
		$this->load->view('akemba', $data);
	}
	public function averifkemba($idVKB){
		$data['verifKemba'] = $this->Mverifkemba->get(['ID_VKB' => $idVKB]);
		$data['nasabah'] 	= $this->Mnasabah->getById($data['verifKemba'][0]->EMAIL_NAS);
		$data['kriteria']	= $this->Mkriteriakemba->getAll();

		$data['statusVerif'] 	= true;
		$data['statusVerifMsg'] = array();

		// CEK USIA
		$durcil = (int)$data['verifKemba'][0]->DURCIL_VKB;
		$usia = (int)$data['verifKemba'][0]->USIA_VKB;
		$pekerjaan = $data['nasabah']->PEKERJAAN_NAS;
		
		if($pekerjaan == '1'){
			$maxUsia = 55;
		}else{
			$maxUsia = 65;
		}

		if(($durcil + $usia) > $maxUsia){
			$data['statusVerif'] = false;
			array_push($data['statusVerifMsg'], '<li>Usia nasabah melebihi batas yang telah ditentukan</li>');
		}

		// CEK GAJI
		$gaji = (int)$data['verifKemba'][0]->GAJI_VKB;
		$gaji -= (int)$data['verifKemba'][0]->KEBRUMTA_VKB;
		$gaji -= (int)$data['verifKemba'][0]->CICILLAIN_VKB;

		$hargaRumbank   = $data['verifKemba'][0]->HARRUMBANK_VKB;
		$durCil         = $data['verifKemba'][0]->DURCIL_VKB;
		$angsuran       = $hargaRumbank / ($durCil * 12);

		if($gaji < $angsuran){
			$data['statusVerif'] = false;
			array_push($data['statusVerifMsg'], '<li>Gaji belum mampu untuk membayar angsuran perbulan!</li>');
		}

		// CEK LAMA ANGSURAN
		if($data['verifKemba'][0]->DURCIL_VKB > 20){
			$data['statusVerif'] = false;
			array_push($data['statusVerifMsg'], '<li>Durasi angsuran melebihi batas yang telah ditentukan</li>');
		}

		$this->load->view('averifkemba', $data);
	}

	public function proses_verifkemba(){
		$emailNas = $this->Mverifkemba->getById($_POST['idVKB'])->EMAIL_NAS;
		$dataUpdate = array(
			'ID_VKB' => $_POST['idVKB'],
			'STATUS_VKB' => $_POST['status'],
			'ANGBUL_VKB' => $_POST['angsuran'],
			'KOMENTAR_VKB' => $_POST['komentar']
		);
		if($_POST['status'] == '3'){
			$dataUpdate['ID_KMB'] = $_POST['kriteria'];
		}

		if($_POST['status'] == '3'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '3',
				'ADMIN_NOTIF'	=> '0'
			]);
		}else if($_POST['status'] == '4'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Pengajuan kemampuan bayar anda telah ditolak!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '4',
				'ADMIN_NOTIF'	=> '0'
			]);
		}

		$this->Mverifkemba->update($dataUpdate);
		redirect('admin/kemba');
	}

	public function aslik()
	{
		$data['sliks'] = $this->Mverifslik->getVDUser();
		$this->load->view('aslik', $data);
	}

	public function averifslik($idSlik){
		$data['verifSlik'] 		= $this->Mverifslik->get(['ID_VPS' => $idSlik]);
		$data['kriteria']		= $this->Mkriteriaslik->getAll();

		$verifDokumen = $this->Mverifdokumen->get(['EMAIL_NAS' => $data['verifSlik'][0]->EMAIL_NAS]);

		if($verifDokumen[0]->JENIS_VD == '1'){
			$data['keldok']	= $this->db->select('KTP_DP as ktp, NPWP_DP as npwp')->get_where('dokumen_profesional', ['ID_VD' => $verifDokumen[0]->ID_VD])->row();
		}else if($verifDokumen[0]->JENIS_VD == '2'){
			$data['keldok']	= $this->db->select('KTP_DK as ktp, NPWP_DK as npwp')->get_where('dokumen_karyawan', ['ID_VD' => $verifDokumen[0]->ID_VD])->row();
		}else {
			$data['keldok']	= $this->db->select('KTP_DW as ktp, NPWP_DW as npwp')->get_where('dokumen_wiraswasta', ['ID_VD' => $verifDokumen[0]->ID_VD])->row();
		}

		$this->load->view('averifslik', $data);
	}

	public function ajaminan()
	{
		$data['jaminans'] = $this->Mverifjaminan->getVDUser();
		$this->load->view('ajaminan', $data);
	}
	
	public function averifjaminan($idVJ){
		$data['verifJaminan'] 	= $this->Mverifjaminan->get(['ID_VJ' => $idVJ]);
		$data['dokJaminan']		= $this->db->get_where('dokumen_jaminan', ['ID_VJ' => $idVJ])->row();
		$data['kriteria']		= $this->Mkriteriajaminan->getAll();
		$this->load->view('averifjaminan', $data);
	}
	public function proses_verifslik(){
		$emailNas = $this->Mverifslik->getById($_POST['idVPS'])->EMAIL_NAS;
		$dataUpdate = array(
			'ID_VPS' => $_POST['idVPS'],
			'STATUS_VPS' => $_POST['status'],
			'KOMENTAR_VPS' => $_POST['komentar']
		);

		if($_POST['status'] == '3'){
			$dataUpdate['ID_KPS'] = $_POST['kriteria'];
		}

		if($_POST['status'] == '3'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Selamat, Kelengkapan SLIK anda telah diverifikasi!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '3',
				'ADMIN_NOTIF'	=> '0'
			]);
		}else if($_POST['status'] == '4'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Pengajuan kemampuan SLIK anda telah ditolak!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '4',
				'ADMIN_NOTIF'	=> '0'
			]);
		}

		$this->Mverifslik->update($dataUpdate);
		redirect('admin/slik');
	}
	public function proses_penjaminan()
	{
		$data['ID_VJ']			= $_POST['idVJ'];
		$data['KESDOK_VJ']		= $_POST['kondisi'];
		$data['HARGRUM_VJ']		= $_POST['harrum'];
		$data['JALAN_VJ']		= $_POST['depan'];
		$data['TOWER_VJ']		= $_POST['tower'];
		$data['SUNGAI_VJ']		= $_POST['sungai'];
		$data['TUSUK_VJ']		= $_POST['sate'];
		$data['MAKAM_VJ']		= $_POST['makam'];
		$data['LISTRIKAIR_VJ']	= $_POST['listrik'];
		
		$this->Mverifjaminan->update($data);
		$this->session->set_flashdata('succ_msg', 'Berhasil menyimpan dokumen penunjang jaminan!');

		
		redirect('admin/averifjaminan/'.$_POST['idVJ']);
	}
	public function proses_verifjaminan(){
		$emailNas = $this->Mverifjaminan->getById($_POST['idVJ'])->EMAIL_NAS;
		$dataUpdate = array(
			'ID_VJ' => $_POST['idVJ'],
			'STATUS_VJ' => $_POST['status'],
			'KOMENTAR_VJ' => $_POST['komentar']
		);

		if($_POST['status'] == '3'){
			$dataUpdate['ID_KJ'] = $_POST['kriteria'];
		}

		if($_POST['status'] == '3'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Selamat, Dokumen jaminan anda telah diverifikasi!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '3',
				'ADMIN_NOTIF'	=> '0'
			]);
		}else if($_POST['status'] == '4'){
			$this->Mnotifikasi->insert([
				'EMAIL_NAS' 	=> $emailNas,
				'PESAN_NOTIF' 	=> 'Dokumen jaminan anda telah ditolak!',
				'TGL_NOTIF' 	=> date('Y-m-d H:i:s'),
				'STATUS_NOTIF'	=> '4',
				'ADMIN_NOTIF'	=> '0'
			]);
		}

		// if($_POST['status'] == '4'){
		// 	$dataUpdate['KESDOK_VJ']		= NULL;
		// 	$dataUpdate['HARGRUM_VJ']		= NULL;
		// 	$dataUpdate['JALAN_VJ']			= NULL;
		// 	$dataUpdate['TOWER_VJ']			= NULL;
		// 	$dataUpdate['SUNGAI_VJ']		= NULL;
		// 	$dataUpdate['TUSUK_VJ']			= NULL;
		// 	$dataUpdate['MAKAM_VJ']			= NULL;
		// 	$dataUpdate['LISTRIKAIR_VJ']	= NULL;
		// }

		$this->Mverifjaminan->update($dataUpdate);
		redirect('admin/jaminan');
	}
}
