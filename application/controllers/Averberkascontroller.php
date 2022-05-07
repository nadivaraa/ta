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
		$this->load->model('Mnasabah');
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
		$this->load->view('averifkeldok', $data);
	}

	public function proses_verifkeldok(){
		$dataUpdate = array(
			'ID_VD' => $_POST['idVD'],
			'STATUS_VD' => $_POST['status'],
			'KOMENTAR_VD' => $_POST['komentar']
		);
		$this->Mverifdokumen->update($dataUpdate);

		$emailNas = $this->Mverifdokumen->getById($_POST['idVD'])->EMAIL_NAS;
		$idVKB = $this->Mverifkemba->get(['EMAIL_NAS' => $emailNas])[0]->ID_VKB;
		$harrum = str_replace(',','', $_POST['harrum']);
		$dataUpdateVerifKemba = array(
			'ID_VKB' => $idVKB,
			'HARRUM_VKB' => $harrum,
			'DP_VKB' => ((int)$harrum * 10) / 100,
			'HARRUMBANK_VKB' => ((int)$harrum * 90) / 100
		);
		$this->Mverifkemba->update($dataUpdateVerifKemba);
		redirect('admin/keldok');
	}

	public function akemba()
	{
		$data['kembas'] = $this->Mverifkemba->getVDUser();
		$this->load->view('akemba', $data);
	}
	public function averifkemba($idVKB){
		$data['verifKemba'] = $this->Mverifkemba->get(['ID_VKB' => $idVKB]);
		$data['nasabah'] 	= $this->Mnasabah->getById($data['verifKemba'][0]->EMAIL_NAS);

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
		$dataUpdate = array(
			'ID_VKB' => $_POST['idVKB'],
			'STATUS_VKB' => $_POST['status'],
			'ANGBUL_VKB' => $_POST['angsuran'],
			'KOMENTAR_VKB' => $_POST['komentar']
		);
		$this->Mverifkemba->update($dataUpdate);
		redirect('admin/kemba');
	}

	public function aslik()
	{
		$this->load->view('aslik');
	}

	public function ajaminan()
	{
		$data['jaminans'] = $this->Mverifjaminan->getVDUser();
		$this->load->view('ajaminan', $data);
	}
	public function averifjaminan($idVJ){
		$data['verifJaminan'] 	= $this->Mverifjaminan->get(['ID_VJ' => $idVJ]);
		$data['dokJaminan']		= $this->db->get_where('dokumen_jaminan', ['ID_VJ' => $idVJ])->row();
		$this->load->view('averifjaminan', $data);
	}
}
