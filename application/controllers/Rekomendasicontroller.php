<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasicontroller extends CI_Controller {

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
	public function rekomendasi()
	{
		$data['ranking'] 		 = $this->vGetRanking();
		$data['statusLayak']	 = $this->db->get_where('penilaian_ready', ['EMAIL_NAS' => $this->session->userdata('email'), 'PERHITUNGAN_STATUS' => '1'])->result(); 
		$data['sidebar'] = 'rekomendasi';
		$data['sidebar2'] = '';
		$this->load->view('rekomendasi', $data);
	}
	public function vGetRanking(){
		return $this->db->query("
			select 
				n.NAMA_NAS ,
				pr.*
			from 
				nasabah n ,
				penilaian_ready pr
			where 
				pr.PERHITUNGAN_V IS NOT NULL 
				AND n.EMAIL_NAS = pr.EMAIL_NAS 
			order by pr.PERHITUNGAN_V DESC
		")->result();
	}
}
