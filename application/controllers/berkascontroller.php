<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berkascontroller extends CI_Controller {

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
	public function keldok()
	{
		$this->load->view('keldok');
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

	}
