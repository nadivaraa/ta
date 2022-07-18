<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilecontroller extends CI_Controller {

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
	}
	public function Profile()
	{
		if (!$this->session->is_login){
			redirect();
		}

		if ($this->session->role == '1'){
			redirect('admin/beranda');
		}
		$data['user'] = $this->Mnasabah->getById($this->session->userdata('email'));
		$this->load->view('profile', $data);
	}
	public function edit(){
		$user 	= $this->Mnasabah->getById($this->session->userdata('email'));
		$email 	= $this->session->userdata('email');
		$formData['NAMA_NAS'] 		= $_POST['nama'];
		$formData['NOTLP_NAS'] 		= $_POST['noTelp'];
		$formData['PEKERJAAN_NAS'] 	= $_POST['pekerjaan'];

		if($user->PEKERJAAN_NAS != $_POST['pekerjaan']){
			// reset keldok
			$dokumen = $this->db->get_where('verif_dokumen', ['EMAIL_NAS' => $email])->row();

			$resetDokumen['ID_KD'] 			= NULL;
			$resetDokumen['JENIS_VD'] 		= $_POST['pekerjaan'];
			$resetDokumen['STATUS_VD'] 		= 0;
			$resetDokumen['STATUSVERIF_VD']	= 0;
			$resetDokumen['KOMENTAR_VD']	= NULL;
			$this->db->where('ID_VD', $dokumen->ID_VD)->update('verif_dokumen', $resetDokumen);


			$this->db->delete('dokumen_profesional', ['ID_VD' => $dokumen->ID_VD]);
			$this->db->delete('dokumen_karyawan', ['ID_VD' => $dokumen->ID_VD]);
			$this->db->delete('dokumen_wiraswasta', ['ID_VD' => $dokumen->ID_VD]);

			if($_POST['pekerjaan'] == '1'){
				$this->db->insert('dokumen_profesional', ['ID_VD' => $dokumen->ID_VD]);
			}else if($_POST['pekerjaan'] == '2'){
				$this->db->insert('dokumen_karyawan', ['ID_VD' => $dokumen->ID_VD]);
			}else{
				$this->db->insert('dokumen_wiraswasta', ['ID_VD' => $dokumen->ID_VD]);
			}

			// reset jaminan
			$jaminan = $this->db->get_where('verif_jaminan', ['EMAIL_NAS' => $email])->row();
			$resetJaminan['ID_KJ'] 			= NULL;
			$resetJaminan['KESDOK_VJ'] 		= NULL;
			$resetJaminan['HARGRUM_VJ'] 	= NULL;
			$resetJaminan['JALAN_VJ'] 		= NULL;
			$resetJaminan['TOWER_VJ'] 		= NULL;
			$resetJaminan['SUNGAI_VJ'] 		= NULL;
			$resetJaminan['TUSUK_VJ'] 		= NULL;
			$resetJaminan['MAKAM_VJ'] 		= NULL;
			$resetJaminan['LISTRIKAIR_VJ'] 	= NULL;
			$resetJaminan['STATUS_VJ'] 		= 0;
			$resetJaminan['KOMENTAR_VJ'] 	= NULL;
			$this->db->where('ID_VJ', $jaminan->ID_VJ)->update('verif_jaminan', $resetJaminan);

			$this->db->delete('dokumen_jaminan', ['ID_VJ' => $jaminan->ID_VJ]);
			$this->db->insert('dokumen_jaminan', ['ID_VJ' => $jaminan->ID_VJ]);

			// reset kemba
			$kemba = $this->db->get_where('verif_kemampuan_bayar', ['EMAIL_NAS' => $email])->row();
			$resetKemba['ID_KMB']			= NULL;
			$resetKemba['GAJI_VKB'] 		= NULL;
			$resetKemba['HARRUM_VKB'] 		= NULL;
			$resetKemba['DURCIL_VKB']		= NULL;
			$resetKemba['KEBRUMTA_VKB']		= NULL;
			$resetKemba['CICILLAIN_VKB']	= NULL;
			$resetKemba['DP_VKB'] 			= NULL;
			$resetKemba['HARRUMBANK_VKB']	= NULL;
			$resetKemba['ANGBUL_VKB'] 		= NULL;
			$resetKemba['STATUS_VKB'] 		= 0;
			$resetKemba['KOMENTAR_VKB'] 	= NULL;
			$this->db->where('ID_VKB', $kemba->ID_VKB)->update('verif_kemampuan_bayar', $resetKemba);

			// reset slik
			$slik = $this->db->get_where('verif_pengecekan_slik', ['EMAIL_NAS' => $email])->row();
			$resetSlik['ID_KPS']			= NULL;
			$resetSlik['STATUS_VPS'] 		= 0;
			$resetSlik['KOMENTAR_VPS']		= NULL;
			$this->db->where('ID_VPS', $slik->ID_VPS)->update('verif_pengecekan_slik', $resetSlik);
		}

		$this->db->where('EMAIL_NAS', $email)->update('nasabah', $formData);
		$this->session->set_userdata('pekerjaan', $_POST['pekerjaan']);
		redirect('profile');
	}
}
