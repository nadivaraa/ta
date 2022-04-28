<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akriteriacontroller extends CI_Controller {

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
		$this->load->model('Mkriteriakeldok');
		$this->load->model('Mkriteriakemba');
		$this->load->model('Mkriteriaslik');
		$this->load->model('Mkriteriajaminan');
		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '2'){
			redirect('beranda');
		}
	}

	public function akrikeldok()
	{
		$data['krikeldok'] = $this->Mkriteriakeldok->getAll();
		$this->load->view('akrikeldok', $data);
	}

	public function atambahkrikeldok()
	{
		$this->load->view('atambahkrikeldok');
	}

	public function aeditkrikeldok($id)
	{
		$data = array(
			'krikeldok' => $this->Mkriteriakeldok->getById($id)
		);

		$this->load->view('aeditkrikeldok', $data);
	}

	public function aprostambahkrikeldok()
	{
		$data = array(
			'NAMA_KD' => $_POST['krikeldok_jenis'],
			'BOBOT_KD' => $_POST['krikeldok_bobot'],
		);
		$this->Mkriteriakeldok->insert($data);
		redirect('admin/krikeldok');
	}

	public function aprosupdatekrikeldok()
	{
		$data = array(
			'ID_KD' => $_POST['id_kd'],
			'NAMA_KD' => $_POST['krikeldok_jenis'],
			'BOBOT_KD' => $_POST['krikeldok_bobot'],
		);
		$this->Mkriteriakeldok->update($data);
		redirect('admin/krikeldok');
	}

	public function aproshapuskrikeldok()
	{
		$data = array(
			'ID_KD' => $_POST['id_kd']
		);
		$this->Mkriteriakeldok->delete($data);
		redirect('admin/krikeldok');
	}

	public function akrikemba()
	{
		$data['krikemba'] = $this->Mkriteriakemba->getAll();
		$this->load->view('akrikemba', $data);
	}

	public function atambahkrikemba()
	{
		$this->load->view('atambahkrikemba');
	}

	public function aeditkrikemba($id)
	{
		$data = array(
			'krikemba' => $this->Mkriteriakemba->getById($id)
		);

		$this->load->view('aeditkrikemba', $data);
	}

	public function aprostambahkrikemba()
	{
		$data = array(
			'NAMA_KMB' => $_POST['krikemba_jenis'],
			'BOBOT_KMB' => $_POST['krikemba_bobot'],
		);
		$this->Mkriteriakemba->insert($data);
		redirect('admin/krikemba');
	}

	public function aprosupdatekrikemba()
	{
		$data = array(
			'ID_KMB' => $_POST['id_kmb'],
			'NAMA_KMB' => $_POST['krikemba_jenis'],
			'BOBOT_KMB' => $_POST['krikemba_bobot'],
		);
		$this->Mkriteriakemba->update($data);
		redirect('admin/krikemba');
	}

	public function aproshapuskrikemba()
	{
		$data = array(
			'ID_KMB' => $_POST['id_kmb']
		);
		$this->Mkriteriakemba->delete($data);
		redirect('admin/krikemba');
	}

	public function akrislik()
	{
		$data['krislik'] = $this->Mkriteriaslik->getAll();
		$this->load->view('akrislik', $data);
	}

	public function atambahkrislik()
	{
		$this->load->view('atambahkrislik');
	}

	public function aeditkrislik($id)
	{
		$data = array(
			'krislik' => $this->Mkriteriaslik->getById($id)
		);

		$this->load->view('aeditkrislik', $data);
	}

	public function aprostambahkrislik()
	{
		$data = array(
			'NAMA_KPS' => $_POST['krislik_jenis'],
			'BOBOT_KPS' => $_POST['krislik_bobot'],
		);
		$this->Mkriteriaslik->insert($data);
		redirect('admin/krislik');
	}

	public function aprosupdatekrislik()
	{
		$data = array(
			'ID_KPS' => $_POST['id_kps'],
			'NAMA_KPS' => $_POST['krislik_jenis'],
			'BOBOT_KPS' => $_POST['krislik_bobot'],
		);
		$this->Mkriteriaslik->update($data);
		redirect('admin/krislik');
	}

	public function aproshapuskrislik()
	{
		$data = array(
			'ID_KPS' => $_POST['id_kps']
		);
		$this->Mkriteriaslik->delete($data);
		redirect('admin/krislik');
	}

	public function akrijaminan()
	{
		$data['krijaminan'] = $this->Mkriteriajaminan->getAll();
		$this->load->view('akrijaminan',$data);
	}

	public function atambahkrijaminan()
	{
		$this->load->view('atambahkrijaminan');
	}

	public function aeditkrijaminan($id)
	{
		$data = array(
			'krijaminan' => $this->Mkriteriajaminan->getById($id)
		);

		$this->load->view('aeditkrijaminan', $data);
	}

	public function aprostambahkrijaminan()
	{
		$data = array(
			'NAMA_KJ' => $_POST['krijaminan_jenis'],
			'BOBOT_KJ' => $_POST['krijaminan_bobot'],
		);
		$this->Mkriteriajaminan->insert($data);
		redirect('admin/krijaminan');
	}

	public function aprosupdatekrijaminan()
	{
		$data = array(
			'ID_KJ' => $_POST['id_kj'],
			'NAMA_KJ' => $_POST['krijaminan_jenis'],
			'BOBOT_KJ' => $_POST['krijaminan_bobot'],
		);
		$this->Mkriteriajaminan->update($data);
		redirect('admin/krijaminan');
	}

	public function aproshapuskrijaminan()
	{
		$data = array(
			'ID_KJ' => $_POST['id_kj']
		);
		$this->Mkriteriajaminan->delete($data);
		redirect('admin/krijaminan');
	}
}
