<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasabahcontroller extends CI_Controller {

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
		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '2'){
			redirect('beranda');
		}
	}

		public function anasabah()
	{
		$data = array(
			'nasabah' => $this->Mnasabah->getAll()
		);

		$data['sidebar'] = 'nasabah';
		$data['sidebar2'] = '';

		$this->load->view('anasabah', $data);

	}

}
