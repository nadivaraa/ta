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
		$data['penilaianS'] = $this->vGetPenilaianReady();
		$data['penilaianV'] = $this->vGetPenilaianReady();
		$data['ranking'] = $this->vGetRanking();
		$data['sidebar'] = 'penilaian';
		$data['sidebar2'] = '';
		$this->load->view('apenilaian', $data);
	}
	public function setready(){
		$this->db->empty_table('penilaian_ready');

		$datasets 		= $this->vGetDataset();
		$totalNilaiS	= 0;
		$index			= 0;
		$formData		= array();	
		foreach ($datasets as $dataset) {
			$formData[$index]['EMAIL_NAS'] 				= $dataset->email;
			$formData[$index]['PERHITUNGAN_KELDOK'] 	= pow($dataset->bobot_keldok, 0.25);
			$formData[$index]['PERHITUNGAN_KEMBA'] 		= pow($dataset->bobot_kemba, 0.25);
			$formData[$index]['PERHITUNGAN_JAMINAN'] 	= pow($dataset->bobot_jaminan, 0.25);
			$formData[$index]['PERHITUNGAN_SLIK'] 		= pow($dataset->bobot_slik, 0.25);

			$formData[$index]['PERHITUNGAN_S']	= $formData[$index]['PERHITUNGAN_KELDOK'];
			$formData[$index]['PERHITUNGAN_S']	*= $formData[$index]['PERHITUNGAN_KEMBA'];
			$formData[$index]['PERHITUNGAN_S']	*= $formData[$index]['PERHITUNGAN_JAMINAN'];
			$formData[$index]['PERHITUNGAN_S']	*= $formData[$index]['PERHITUNGAN_SLIK'];
			$totalNilaiS += $formData[$index]['PERHITUNGAN_S'];
			$index++;
		}
		
		foreach ($formData as $item) {
			$item['PERHITUNGAN_V'] = $item['PERHITUNGAN_S'] / $totalNilaiS;
			$this->db->insert('penilaian_ready', $item);
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
	public function vGetRanking(){
		return $this->db->query("
			select 
				n.NAMA_NAS ,
				pr.*
			from 
				nasabah n ,
				penilaian_ready pr
			where 
				n.EMAIL_NAS = pr.EMAIL_NAS 
			order by pr.PERHITUNGAN_V DESC
		")->result();
	}
}
