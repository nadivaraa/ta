<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandacontroller extends CI_Controller {

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
		$this->load->model('Mnotifikasi');
		if($this->session->userdata('is_login') == false){
			if($this->session->userdata('role') != "2"){
				redirect('/');
			}
		}

		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '1'){
			redirect('admin/beranda');
		}

		$this->load->model('Mverifdokumen');
		$this->load->model('Mverifjaminan');
		$this->load->model('Mverifkemba');
		$this->load->model('Mverifslik');
	}
	public function beranda()
	{
		$data['notifikasi'] = $this->Mnotifikasi->get(['EMAIL_NAS' => $this->session->userdata('email'), 'ADMIN_NOTIF' => '0', 'orderBy' => 'TGL_NOTIF DESC']);
		$data['keldok']		= $this->Mverifdokumen->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['jaminan']	= $this->Mverifjaminan->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['kemba']		= $this->Mverifkemba->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$data['slik']		= $this->Mverifslik->get(['EMAIL_NAS' => $this->session->userdata('email')]);
		$this->load->view('beranda', $data);
	}
}
