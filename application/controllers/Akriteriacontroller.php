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
	public function akrikeldok()
	{
		$this->load->view('akrikeldok');
	}

	public function atambahkrikeldok()
	{
		$this->load->view('atambahkrikeldok');
	}

	public function akrikemba()
	{
		$this->load->view('akrikemba');
	}

	public function atambahkrikemba()
	{
		$this->load->view('atambahkrikemba');
	}

	public function akrislik()
	{
		$this->load->view('akrislik');
	}

	public function atambahkrislik()
	{
		$this->load->view('atambahkrislik');
	}

	public function akrijaminan()
	{
		$this->load->view('akrijaminan');
	}

	public function atambahkrijaminan()
	{
		$this->load->view('atambahkrijaminan');
	}
}
