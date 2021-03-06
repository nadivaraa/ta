<?php

class Mverifjaminan extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
    return $this->db->get('verif_jaminan')->result();
    }
    public function get($param){
        return $this->db->get_where('verif_jaminan', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_VJ', $id)->get('verif_jaminan')->row();
    }
    public function getVDUser(){
        return $this->db->query("
            SElECT
                vj.*,
                n.NAMA_NAS
            FROM verif_jaminan vj, nasabah n
            WHERE vj.EMAIL_NAS = n.EMAIL_NAS
            ORDER BY FIELD(STATUS_VJ, 2, 1, 4, 0, 3)
        ")->result(); 
    }
    public function insert($param){
        $this->db->insert('verif_jaminan', $param);
    }
    public function update($param){
        $this->db->where('ID_VJ', $param['ID_VJ'])->update('verif_jaminan', $param);
    }
    public function delete($param){
        $this->db->delete('verif_jaminan', $param);
    }
}