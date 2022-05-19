<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apenilaiancontroller extends CI_Controller {

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
	public function apenilaian()
	{
		$data['datasets'] = $this->vGetDataset();
		$data['penilaianReadys'] = $this->vGetPenilaianReady();
		$this->load->view('apenilaian', $data);
	}
	public function setready(){
		$formData['EMAIL_NAS'] 				= $_POST['email'];
		$formData['PERHITUNGAN_KELDOK'] 	= pow($_POST['bobot_keldok'], 0.25);
		$formData['PERHITUNGAN_KEMBA'] 		= pow($_POST['bobot_kemba'], 0.25);
		$formData['PERHITUNGAN_JAMINAN'] 	= pow($_POST['bobot_jaminan'], 0.25);
		$formData['PERHITUNGAN_SLIK'] 		= pow($_POST['bobot_slik'], 0.25);

		$data = $this->db->get_where('penilaian_ready', ['EMAIL_NAS' => $_POST['email']])->result();
		if($data == null){
			$this->db->insert('penilaian_ready', $formData);
		}else{
			$this->db->where('EMAIL_NAS', $_POST['email'])->update('penilaian_ready', $formData);
		}
		redirect('admin/apenilaian');
	}
	public function vGetDataset(){
		return $this->db->query("
			select 
				n.EMAIL_NAS as email ,
				n.NAMA_NAS as nama ,
				kd.BOBOT_KD as bobot_keldok ,
				kd.NAMA_KD as label_keldok ,
				kj.BOBOT_KJ as bobot_jaminan ,
				kj.NAMA_KJ as label_jaminan ,
				kkb.BOBOT_KMB as bobot_kemba ,
				kkb.NAMA_KMB as label_kemba ,
				kps.BOBOT_KPS as bobot_slik ,
				kps.NAMA_KPS as label_slik 
			from 
				nasabah n , 
				verif_dokumen vd ,
				verif_jaminan vj ,
				verif_kemampuan_bayar vkb ,
				verif_pengecekan_slik vps ,
				kriteria_dokumen kd ,
				kriteria_jaminan kj ,
				kriteria_kemampuan_bayar kkb ,
				kriteria_pengecekkan_slik kps 
			where 
				n.EMAIL_NAS = vd.EMAIL_NAS 
				and vd.ID_KD = kd.ID_KD 
				and n.EMAIL_NAS = vj.EMAIL_NAS 
				and vj.ID_KJ = kj.ID_KJ  
				and n.EMAIL_NAS = vkb.EMAIL_NAS 
				and vkb.ID_KMB  = kkb.ID_KMB 
				and n.EMAIL_NAS = vps.EMAIL_NAS 
				and vps.ID_KPS = kps.ID_KPS 
		")->result();
	}
	public function vGetPenilaianReady(){
		return $this->db->query("
			select 
				n.NAMA_NAS ,
				pr.*
			from 
				nasabah n ,
				penilaian_ready pr 
			where 
				n.EMAIL_NAS = pr.EMAIL_NAS 
		")->result();
	}
}
