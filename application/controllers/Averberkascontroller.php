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

	public function akemba()
	{
		$this->load->view('akemba');
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
