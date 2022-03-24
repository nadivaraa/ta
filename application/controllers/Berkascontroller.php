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
		$uploadFile = $this->upload_file('uploads/'.$_POST['dir'].'/', 'file');
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
		$this->session->set_flashdata('succ_msg', 'Berhasil mengupload berkas!');
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
		$this->load->view('kemba');
	}

	public function slik()
	{
		$this->load->view('slik');
	}

	public function jaminan()
	{

		$this->load->view('jaminan');
	}

	public function proses_jaminan()
	{
		$linkJamSert = '';
		if($_FILES['jaminan_sertifikat'] != null){
			$uploadJamSert = $this->upload_file('uploads/jam_sertifikat/', 'jaminan_sertifikat');
			if($uploadJamSert['status'] == true){
				$linkJamSert = $uploadJamSert['link'];
			}
		}

		$linkJamimb = '';
		if($_FILES['jaminan_imb'] != null){
			$uploadJamimb = $this->upload_file('uploads/jam_imb/', 'jaminan_imb');
			if($uploadJamimb['status'] == true){
				$linkJamimb = $uploadJamimb['link'];
			}
		}

		$linkJampbb = '';
		if($_FILES['jaminan_pbb'] != null){
			$uploadJampbb = $this->upload_file('uploads/jam_pbb/', 'jaminan_pbb');
			if($uploadJamSert['status'] == true){
				$linkJampbb = $uploadJampbb['link'];
			}
		}

		$linkJamakta = '';
		if($_FILES['jaminan_akta'] != null){
			$uploadJamakta = $this->upload_file('uploads/jam_akta/', 'jaminan_akta');
			if($uploadJamakta['status'] == true){
				$linkJamakta = $uploadJamakta['link'];
			}
		}

		$verifStore = array(
			'EMAIL_NAS' => $this->session->userdata('email'),
			'HARGAR_DJ' => $_POST['jaminan_harga'],
			'JALAN_DJ' => $_POST['jaminan_jalan'],
			'TOWER_DJ' => $_POST['jaminan_tower'],
			'SUNGAI_DJ' => $_POST['jaminan_sungai'],
			'SATE_DJ' => $_POST['jaminan_sate'],
			'MAKAM_DJ' => $_POST['jaminan_makam'],
			'LISTRIKAIR_DJ' => $_POST['jaminan_lisair']
		);

		$dokumenStore = array(
			'SERHHS_DJ' => $linkJamSert,
			'IMB_DJ' => $linkJamimb,
			'PBB_DJ' => $linkJampbb,
			'AJB_DJ' => $linkJamakta,
		);
		// $this->Mjaminan->insert($data);
		// redirect('jaminan');
	}

	public function upload_file($path,$file){
		$conf = array(
			'upload_path' => $path,
			'allowed_types' => 'jpg|jpeg|png|pdf',
			'max_size' => 1024	
		);
		$this->load->library('upload', $conf);
		
		if($this->upload->do_upload($file)){
			$data = array(
				'link' => site_url($path.$this->upload->data('file_name')),
				'status' => true
			);
		}else{
			$data = array(
				'msg' => $this->upload->display_errors(),
				'status' => false
			);
		}
		return $data;
	} 

	}
