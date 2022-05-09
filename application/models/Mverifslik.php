<?php

class Mverifslik extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
    return $this->db->get('verif_pengecekkan_slik')->result();
    }
    public function get($param){
        return $this->db->get_where('verif_pengecekkan_slik', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_VPS', $id)->get('verif_pengecekkan_slik')->row();
    }
    public function getVDUser(){
        return $this->db->query("
            SElECT
                vs.*,
                vd.STATUS_VD ,
                n.NAMA_NAS
            FROM verif_pengecekkan_slik vs, verif_dokumen vd, nasabah n
            WHERE 
                vs.EMAIL_NAS = n.EMAIL_NAS
                AND vd.EMAIL_NAS  = n.EMAIL_NAS 
            ORDER BY vs.STATUS_VPS ASC
        ")->result(); 
    }
    public function insert($param){
        $this->db->insert('verif_pengecekkan_slik', $param);
    }
    public function update($param){
        $this->db->where('ID_VPS', $param['ID_VPS'])->update('verif_pengecekkan_slik', $param);
    }
    public function delete($param){
        $this->db->delete('verif_kemba', $param);
    }
}