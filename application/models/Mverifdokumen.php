<?php

class Mverifdokumen extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
    return $this->db->get('verif_dokumen')->result();
    }
    public function get($param){
        return $this->db->get_where('verif_dokumen', $param)->result();
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
            ORDER BY vd.STATUSVERIF_VD ASC
        ")->result(); 
    }
    public function insert($param){
        $this->db->insert('verif_dokumen', $param);
    }
    public function update($param){
        $this->db->where('ID_VD', $param['ID_VD'])->update('verif_dokumen', $param);
    }
    public function delete($param){
        $this->db->delete('verif_dokumen', $param);
    }
}