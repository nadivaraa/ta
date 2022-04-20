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
		$dataUpdateVerifKemba = array(
			'ID_VKB' => $idVKB,
			'HARRUM_VKB' => $_POST['harrum'],
			'DP_VKB' => ((int)$_POST['harrum'] * 10) / 100,
			'HARRUMBANK_VKB' => ((int)$_POST['harrum'] * 90) / 100
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
		$data['verifBayar'] = $this->Mverifkemba->get(['ID_VKB' => $idVKB]);
		$this->load->view('averifkemba', $data);
	}

	public function proses_verifkemba(){
		$dataUpdate = array(
			'ID_VKB' => $_POST['idVKB'],
			'STATUS_VKB' => $_POST['status'],
			'KOMENTAR_VKB' => $_POST['komentar']
		);
		$this->Mverifkemba->update($dataUpdate);

		$emailNas = $this->Mverifkemba->getById($_POST['idVKB'])->EMAIL_NAS;
		$idVKB = $this->Mverifkemba->get(['EMAIL_NAS' => $emailNas])[0]->ID_VKB;
		$dataUpdateVerifKemba = array(
			'ID_VKB' => $idVKB,
			'HARRUM_VKB' => $_POST['harrum'],
			'DP_VKB' => ((int)$_POST['harrum'] * 10) / 100,
			'HARRUMBANK_VKB' => ((int)$_POST['harrum'] * 90) / 100
		);
		$this->Mverifkemba->update($dataUpdateVerifKemba);
		redirect('admin/kemba');
	}

	public function aslik()
	{
		$this->load->view('aslik');
	}

	public function ajaminan()
	{
		$this->load->view('ajaminan');
	}
}
