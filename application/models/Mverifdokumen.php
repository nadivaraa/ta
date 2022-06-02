<?php

class Mverifdokumen extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
    return $this->db->get('verif_dokumen')->result();
    }
    public function get($param){
        return $this->db->order_by('FIELD(STATUS_VD, 2, 1, 4, 0, 3)')->get_where('verif_dokumen', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_VD', $id)->get('verif_dokumen')->row();
    }
    public function getVDUser(){
        return $this->db->query("
            SElECT
                vd.*,
                n.NAMA_NAS
            FROM verif_dokumen vd, nasabah n
            WHERE vd.EMAIL_NAS = n.EMAIL_NAS
            ORDER BY FIELD(STATUS_VD, 2, 1, 4, 0, 3)
        ")->result(); 
    }
    public function insert($param){
        $this->db->insert('verif_dokumen', $param);
    }
    public function update($param){
        $this->db->where('ID_VD', $param['ID_VD'])->update('verif_dokumen', $param);
        $param_slik['STATUS_VPS'] = $param['STATUS_VD'] == '3' ? '2' : '0'; 
        $this->db->where('EMAIl_NAS', $param['EMAIL_NAS'])->update('verif_pengecekan_slik', $param_slik);
    }
    public function delete($param){
        $this->db->delete('verif_dokumen', $param);
    }
}