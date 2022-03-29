<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authcontroller extends CI_Controller {

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
		$this->load->model('Mnasabah');
		$this->load->model('Mverifdokumen');
	}
	 public function register()
	{
		$this->load->view('register');
	}

	public function proses_register()
	{
		$nasabah = $this->Mnasabah->get(['EMAIL_NAS' => $_POST['register_email']]);
		if($nasabah != null){
			$this->session->set_flashdata('msg','Email telah terdaftar!');
			redirect('register');
		}

		$data = array(
			'EMAIL_NAS' => $_POST['register_email'],
			'NAMA_NAS' => $_POST['register_nama'],
			'NOTLP_NAS' => $_POST['register_notlp'],
			'PASS_NAS' => md5($_POST['register_password']),
		);
		$this->Mnasabah->insert($data);

		$this->Mverifdokumen->insert(['EMAIL_NAS' => $_POST['register_email']]);
		redirect('/');
	}

	public function proses_login()
	{
		$data = array(
			'EMAIL_NAS' => $_POST['login_email'],
			'PASS_NAS' => md5($_POST['login_password'])
		);
		$nasabah = $this->Mnasabah->get($data);
		if ($nasabah == null) {
			$this->session->set_flashdata('msg','Email atau Password Salah');
			redirect('/');
			
		}else {
			$dataSession = array(
				'email' => $nasabah[0]->EMAIL_NAS,
				'nama' => $nasabah[0]->NAMA_NAS,
				'is_login' => true,
				'role' => '2'
			);
			$this->session->set_userdata($dataSession);
			redirect('beranda');
		}
	}
}