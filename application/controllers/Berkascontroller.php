<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkascontroller extends CI_Controller {

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
		$this->load->model('Mberkasprof');
		$this->load->model('Mberkaskary');
		$this->load->model('Mberkaswira');
		$this->load->model('Mjaminan');
		$this->load->model('Mverifdokumen');
		$this->load->model('Mverifjaminan');
		$this->load->model('Mverifkemba');
		$this->load->model('Mnasabah');
		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '1'){
			redirect('admin/beranda');
		}
		
	}
	
	 public function keldok()
	{
		$data['verifDokumen'] = $this->Mverifdokumen->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['dokProf'] 	  = $this->db->get_where('dokumen_profesional', ['ID_VD' => $data['verifDokumen'][0]->ID_VD])->row();
		$data['dokKary'] 	  = $this->db->get_where('dokumen_karyawan', ['ID_VD' => $data['verifDokumen'][0]->ID_VD])->row();
		$data['dokWira'] 	  = $this->db->get_where('dokumen_wiraswasta', ['ID_VD' => $data['verifDokumen'][0]->ID_VD])->row();
		
		$this->load->view('keldok', $data);
	}

	public function proses_keldok(){
		$uploadFile = $this->upload_file($_POST['dir'], 'file');
		if($uploadFile['status'] == false){
			$this->session->set_flashdata('err_msg', $uploadFile['msg']);
			redirect('keldok');
		}

		// set table berdasarkan jenis pekerjaan
		if($_POST['pekerjaan'] == '1'){
			$table = 'dokumen_profesional';
		}else if($_POST['pekerjaan'] == '2'){
			$table = 'dokumen_karyawan';
		}else{
			$table = 'dokumen_wiraswasta';
		}

		// cek di dalam tabel pekerjaan tersebut sudah ada apa belum. Kalo belum ada atau null maka insert kalo sudah maka update
		$verifDokumen 	= $this->Mverifdokumen->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$dokumen 		= $this->db->get_where($table, ['ID_VD' => $verifDokumen[0]->ID_VD])->result();
		if($dokumen == null){
			$this->db->insert($table, ['ID_VD' => $verifDokumen[0]->ID_VD, $_POST['col'] => $uploadFile['link']]);
		}else{
			$this->db->where('ID_VD', $verifDokumen[0]->ID_VD)->update($table, [$_POST['col'] => $uploadFile['link']]);
		}
		
		$this->Mverifdokumen->update(['ID_VD' => $verifDokumen[0]->ID_VD, 'STATUS_VD' => '1', 'JENIS_VD' => $_POST['pekerjaan']]);
		$this->session->set_flashdata('succ_msg', 'Berhasil mengupload berkas!'.$this->upload->data('file_name'));
		redirect('keldok');
	}

	public function kirim_keldok(){
		$verifDokumen = $this->Mverifdokumen->getById($_POST['idVD']);

		//cek jika di dalam tabel berkas dokumen ada salah satu yang kosong maka akan dikembalikan
		if($verifDokumen->JENIS_VD == "1"){
			$dataDokumen = $this->db->get_where('dokumen_profesional', ['ID_VD' => $verifDokumen->ID_VD])->row();
		}else if($verifDokumen->JENIS_VD == "2"){
			$dataDokumen = $this->db->get_where('dokumen_karyawan', ['ID_VD' => $verifDokumen->ID_VD])->row();
		}else if($verifDokumen->JENIS_VD == "3"){
			$dataDokumen = $this->db->get_where('dokumen_wiraswasta', ['ID_VD' => $verifDokumen->ID_VD])->row();
		}else if($verifDokumen->JENIS_VD == "0"){
			$this->session->set_flashdata('err_msg', 'Lengkapi dokumen terlebih dahulu!');
			redirect('keldok');
		}

		foreach ($dataDokumen as $key) {
			if($key == null || $key == ''){
				$this->session->set_flashdata('err_msg', 'Lengkapi dokumen terlebih dahulu!');
				redirect('keldok');
			}
		}
		
		$this->session->set_flashdata('succ_msg', 'Dokumen berhasil diunggah, silahkan tunggu verifikasi!');
		$this->Mverifdokumen->update(['ID_VD' => $verifDokumen->ID_VD, 'STATUS_VD' => '2']);
		redirect('keldok');
	}

	public function kemba()
	{
		$data['kemba'] = $this->Mverifkemba->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['nasabah'] = $this->Mnasabah->getById($this->session->userdata('email'));
		$data['keldok'] = $this->Mverifdokumen->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['verifKemba'] = $this->Mverifkemba->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		
		$this->load->view('kemba', $data);
	}

	public function proses_kemba()
	{
		$data['ID_VKB']			= $_POST['idVKB'];
		$data['GAJI_VKB']		= str_replace(',', '', $_POST['gaji']);
		$data['KEBRUMTA_VKB']	= str_replace(',', '', $_POST['krt']);
		$data['CICILLAIN_VKB']	= str_replace(',', '', $_POST['cicilan']);
		$data['DURCIL_VKB']		= $_POST['angsuran'];
		$data['STATUS_VKB']		= ($_POST['status'] == 'Simpan' ? 1 : 2);
		$this->Mverifkemba->update($data);
		redirect('kemba');
	}

	public function slik()
	{
		$this->load->view('slik');
	}

	public function jaminan()
	{
		$data['verifJaminan'] 	= $this->Mverifjaminan->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['dokJaminan']		= $this->db->get_where('dokumen_jaminan', ['ID_VJ' => $data['verifJaminan'][0]->ID_VJ])->row();
		$this->load->view('jaminan', $data);
	}

	public function proses_jaminan()
	{
		$uploadFile = $this->upload_file($_POST['dir'], 'file');
		if($uploadFile['status'] == false){
			$this->session->set_flashdata('err_msg', $uploadFile['msg']);
			redirect('jaminan');
		}

		$verifJaminan 	= $this->Mverifjaminan->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$jaminan 		= $this->db->get_where('dokumen_jaminan', ['ID_VJ' => $verifJaminan[0]->ID_VJ])->result();
		if($jaminan == null){
			$this->db->insert('dokumen_jaminan', ['ID_VJ' => $verifJaminan[0]->ID_VJ, $_POST['col'] => $uploadFile['link']]);
		}else{
			$this->db->where('ID_VJ', $verifJaminan[0]->ID_VJ)->update('dokumen_jaminan', [$_POST['col'] => $uploadFile['link']]);
		}
		
		$this->Mverifjaminan->update(['ID_VJ' => $verifJaminan[0]->ID_VJ, 'STATUS_VJ' => '1']);
		$this->session->set_flashdata('succ_msg', 'Berhasil mengupload berkas!');
		redirect('jaminan');
	}
	

	public function kirim_jaminan(){
		$verifJaminan = $this->Mverifjaminan->getById($_POST['idVJ']);

		//cek jika di dalam tabel berkas dokumen ada salah satu yang kosong maka akan dikembalikan
		$dataJaminan = $this->db->get_where('dokumen_jaminan', ['ID_VJ' => $verifJaminan->ID_VJ])->row();
		foreach ($dataJaminan as $key) {
			if($key == null || $key == ''){
				$this->session->set_flashdata('err_msg', 'Lengkapi dokumen terlebih dahulu!');
				redirect('jaminan');
			}
		}
		
		$this->session->set_flashdata('succ_msg', 'Dokumen berhasil diunggah, silahkan tunggu verifikasi!');
		$this->Mverifjaminan->update(['ID_VJ' => $verifJaminan->ID_VJ, 'STATUS_VJ' => '2']);
		redirect('jaminan');
	}
		
	public function upload_file($path,$file){
		$conf = array(
			'upload_path' => 'uploads/'.$path.'/',
			'allowed_types' => 'jpg|jpeg|png|pdf',
			'max_size' => 1024,
			'overwrite' => true,
			'file_name' => $path . '_'. $this->session->nama	
		);
		
		$this->load->library('upload', $conf);
		
		if($this->upload->do_upload($file)){
			$data = array(
				'link' => site_url('uploads/'.$path.'/'.$this->upload->data('file_name')),
				'status' => true
			);
		}else{
			$data = array(
				'msg' => $this->upload->display_errors().$conf['upoad_path'],
				'status' => false
			);
		}
		return $data;
	} 
}


