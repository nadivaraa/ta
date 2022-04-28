<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aauthcontroller extends CI_Controller {

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
		$this->load->model('Madmin');
	}

    public function alogin()
	{
		if ($this->session->is_login){
			redirect('admin/beranda');
		}
		$this->load->view('alogin');
	}

	public function aproseslogin()
	{
		$data = array(
			'EMAIL_ADM' => $_POST['login_email'],
			'PASS_ADM' => $_POST['login_password']
		);
		$admin = $this->Madmin->get($data);
		if ($admin == null) {
			redirect('admin/login');
		}else {
			$dataSession = array(
				'email' => $admin[0]->EMAIL_ADM,
				'nama' => $admin[0]->NAMA_ADM,
				'is_login' => true,
				'role' => '1'
			);
			$this->session->set_userdata($dataSession);
			redirect('admin/beranda');
		}
	}
}
