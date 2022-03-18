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
	public function __construct(){
		parent::__construct();
		$this->load->model('mberkasprof');
		$this->load->model('mjaminan');
	}
	
	 public function keldok()
	{
		$this->load->view('keldok');
	}

	public function proses_keldok_prof()
	{
		// $linkprofktp = '';
		// if($_FILES['prof_ktp'] != null){
		// 	$uploadprofktp = $this->upload_file('uploads/dok_ktp/', 'prof_ktp');
		// 	if($uploadprofktp['status'] == true){
		// 		$linkprofktp = $uploadprofktp['link'];
		// 	}
		// }

		// $linkprofktppas = '';
		// if($_FILES['prof_ktppas'] != null){
		// 	$uploadprofktppas = $this->upload_file('uploads/dok_ktppas/', 'prof_ktppas');
		// 	if($uploadprofktppas['status'] == true){
		// 		$linkprofktppas = $uploadprofktppas['link'];
		// 	}
		// }

		$linkprofaktanik = '';
		if($_FILES['prof_aktanik'] != null){
			$uploadprofaktanik = $this->upload_file('uploads/dok_aktanik/', 'prof_aktanik');
			if($uploadprofaktanik['status'] == true){
				$linkprofaktanik = $uploadprofaktanik['link'];
			}
		}

		$linkprofaktapis = '';
		if($_FILES['prof_aktapis'] != null){
			$uploadprofaktapis = $this->upload_file('uploads/dok_aktapis/', 'prof_aktapis');
			if($uploadprofaktapis['status'] == true){
				$linkprofaktapis = $uploadprofaktapis['link'];
			}
		}

		$linkprofkk = '';
		if($_FILES['prof_kk'] != null){
			$uploadprofkk = $this->upload_file('uploads/dok_kk/', 'prof_kk');
			if($uploadprofkk['status'] == true){
				$linkprofkk = $uploadprofkk['link'];
			}
		}

		$linkprofnpwp = '';
		if($_FILES['prof_npwp'] != null){
			$uploadprofnpwp = $this->upload_file('uploads/dok_npwp/', 'prof_npwp');
			if($uploadprofnpwp['status'] == true){
				$linkprofnpwp = $uploadprofnpwp['link'];
			}
		}

		$linkprofnpwpush = '';
		if($_FILES['prof_npwpush'] != null){
			$uploadprofnpwpush = $this->upload_file('uploads/dok_npwpush/', 'prof_npwpush');
			if($uploadprofnpwpush['status'] == true){
				$linkprofnpwpush = $uploadprofnpwpush['link'];
			}
		}

		$linkprofizinprak = '';
		if($_FILES['prof_izinprak'] != null){
			$uploadprofizinprak = $this->upload_file('uploads/dok_izinprak/', 'prof_izinprak');
			if($uploadprofizinprak['status'] == true){
				$linkprofizinprak = $uploadprofizinprak['link'];
			}
		}

		$linkprofspkredit = '';
		if($_FILES['prof_spkredit'] != null){
			$uploadprofspkredit = $this->upload_file('uploads/dok_spkredit/', 'prof_spkredit');
			if($uploadprofspkredit['status'] == true){
				$linkprofspkredit = $uploadprofspkredit['link'];
			}
		}

		$linkprofrekkor = '';
		if($_FILES['prof_rekkor'] != null){
			$uploadprofrekkor = $this->upload_file('uploads/dok_rekkor/', 'prof_rekkor');
			if($uploadprofrekkor['status'] == true){
				$linkprofrekkor = $uploadprofrekkor['link'];
			}
		}

		$linkprofsprumah = '';
		if($_FILES['prof_sprumah'] != null){
			$uploadprofsprumah = $this->upload_file('uploads/dok_sprumah/', 'prof_sprumah');
			if($uploadprofsprumah['status'] == true){
				$linkprofsprumah = $uploadprofsprumah['link'];
			}
		}

		$linkprofbukti = '';
		if($_FILES['prof_bukti'] != null){
			$uploadprofbukti = $this->upload_file('uploads/dok_bukti/', 'prof_bukti');
			if($uploadprofbukti['status'] == true){
				$linkprofbukti = $uploadprofbukti['link'];
			}
		}

		// $data = array(
		// 	'KTP_DP' => $_POST['prof_ktp'],
		// 	'KTPPAS_DP' => $_POST['prof_ktppas'],
		// 	'AKTANIK_DP' => $_POST['prof_aktanik'],
		// 	'AKTAPIS_DP' => $_POST['prof_aktapis'],
		// 	'KK_DP' => $_POST['prof_kk'],
		// 	'NPWP_DP' => $_POST['prof_npwp'],
		// 	'NPWPUSH_DP' => $_POST['prof_npwpush'],
		// 	'IZINPRAK_DP' => $_POST['prof_izinprak'],
		// 	'SPERNYATAAN_DP' => $_POST['prof_spkredit'],
		// 	'REKKOR_DP' => $_POST['prof_rekening'],
		// 	'SPEMESANAN_DP' => $_POST['prof_sprumah'],
		// 	'BPEMBAYARAN_DP' => $_POST['prof_bukti']
		// );

		$data = array(
			// 'KTP_DP' => $linkprofktp,
			// 'KTPPAS_DP' => $linkprofktppas,
			'AKTANIK_DP' => $linkprofaktanik,
			'AKTAPIS_DP' => $linkprofaktapis,
			'KK_DP' => $linkprofkk,
			'NPWP_DP' => $linkprofnpwp,
			'NPWPUSH_DP' => $linkprofnpwpush,
			'IZINPRAK_DP' => $linkprofizinprak,
			'SPERNYATAAN_DP' => $linkprofspkredit,
			'REKKOR_DP' => $linkprofrekkor,
			'SPEMESANAN_DP' => $linkprofsprumah,
			'BPEMBAYARAN_DP' => $linkprofbukti,
		);

		print_r($data);
		// $this->mberkasprof->insert($data);
		// redirect('keldok');
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

	public function proses_jaminan()
	{
		$linkJamSert = '';
		if($_FILES['jaminan_sertifikat'] != null){
			$uploadJamSert = $this->upload_file('uploads/jam_sertifikat/', 'jaminan_sertifikat');
			if($uploadJamSert['status'] == true){
				$linkJamSert = $uploadJamSert['link'];
			}
		}

		$linkJamimb = '';
		if($_FILES['jaminan_imb'] != null){
			$uploadJamimb = $this->upload_file('uploads/jam_imb/', 'jaminan_imb');
			if($uploadJamimb['status'] == true){
				$linkJamimb = $uploadJamimb['link'];
			}
		}

		$linkJampbb = '';
		if($_FILES['jaminan_pbb'] != null){
			$uploadJampbb = $this->upload_file('uploads/jam_pbb/', 'jaminan_pbb');
			if($uploadJamSert['status'] == true){
				$linkJampbb = $uploadJampbb['link'];
			}
		}

		$linkJamakta = '';
		if($_FILES['jaminan_akta'] != null){
			$uploadJamakta = $this->upload_file('uploads/jam_akta/', 'jaminan_akta');
			if($uploadJamakta['status'] == true){
				$linkJamakta = $uploadJamakta['link'];
			}
		}

		$verifStore = array(
			'EMAIL_NAS' => $this->session->userdata('email'),
			'HARGAR_DJ' => $_POST['jaminan_harga'],
			'JALAN_DJ' => $_POST['jaminan_jalan'],
			'TOWER_DJ' => $_POST['jaminan_tower'],
			'SUNGAI_DJ' => $_POST['jaminan_sungai'],
			'SATE_DJ' => $_POST['jaminan_sate'],
			'MAKAM_DJ' => $_POST['jaminan_makam'],
			'LISTRIKAIR_DJ' => $_POST['jaminan_lisair']
		);

		$dokumenStore = array(
			'SERHHS_DJ' => $linkJamSert,
			'IMB_DJ' => $linkJamimb,
			'PBB_DJ' => $linkJampbb,
			'AJB_DJ' => $linkJamakta,
		);
		$this->mjaminan->insert($data);
		redirect('jaminan');
	}

	public function upload_file($path,$file){
		$conf = array(
			'upload_path' => $path,
			'allowed_types' => 'jpg|jpeg|png|pdf',
			'max_size' => 1024	
		);
		$this->load->library('upload', $conf);
		
		if($this->upload->do_upload($file)){
			$data = array(
				'link' => site_url($path.$this->upload->data('file_name')),
				'status' => true
			);
		}else{
			$data = array(
				'msg' => $this->upload->display_errors(),
				'status' => false
			);
		}
		return $data;
	} 

	}
