<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aberandacontroller extends CI_Controller {

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
		$this->load->model('Mnotifikasi');
		$this->load->model('Mverifdokumen');
		$this->load->model('Mverifkemba');
		$this->load->model('Mverifjaminan');
		$this->load->model('Mverifslik');

		if($this->session->userdata('is_login') == false){
			if($this->session->userdata('role') != "1"){
				redirect('/');
			}
		}

		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '2'){
			redirect('beranda');
		}
	}
	
	public function aberanda(){
		$keldokBaru 	= count($this->Mverifdokumen->get(['STATUS_VD' => '0']));
		$kembaBaru 		= count($this->Mverifkemba->get(['STATUS_VKB' => '0']));
		$jaminanBaru 	= count($this->Mverifjaminan->get(['STATUS_VJ' => '0']));
		$slikBaru 		= count($this->Mverifslik->get(['STATUS_VPS' => '0']));
		$totalBaru		= $keldokBaru + $kembaBaru + $jaminanBaru + $slikBaru;

		$keldokVerif 	= count($this->Mverifdokumen->get(['STATUS_VD' => '3']));
		$kembaVerif 	= count($this->Mverifkemba->get(['STATUS_VKB' => '3']));
		$jaminanVerif 	= count($this->Mverifjaminan->get(['STATUS_VJ' => '3']));
		$slikVerif 		= count($this->Mverifslik->get(['STATUS_VPS' => '3']));
		$totalVerif		= $keldokVerif + $kembaVerif + $jaminanVerif + $slikVerif;

		$keldokGagal 	= count($this->Mverifdokumen->get(['STATUS_VD' => '4']));
		$kembaGagal 	= count($this->Mverifkemba->get(['STATUS_VKB' => '4']));
		$jaminanGagal 	= count($this->Mverifjaminan->get(['STATUS_VJ' => '4']));
		$slikGagal 		= count($this->Mverifslik->get(['STATUS_VPS' => '4']));
		$totalGagal		= $keldokGagal + $kembaGagal + $jaminanGagal + $slikGagal;

		$total = $totalBaru + $totalVerif + $totalGagal;

		$data['notifikasi'] = $this->Mnotifikasi->get(['ADMIN_NOTIF' => '1', 'orderBy' => 'TGL_NOTIF DESC']);
		$data['totalBaru'] 	= $totalBaru;
		$data['totalVerif'] = $totalVerif;
		$data['totalGagal'] = $totalGagal;
		$data['total'] 		= $total;
		$this->load->view('aberanda', $data);
	}


}
