<?php

class Mverifkemba extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
    return $this->db->get('verif_kemampuan_bayar')->result();
    }
    public function get($param){
        return $this->db->get_where('verif_kemampuan_bayar', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_VKB', $id)->get('verif_kemampuan_bayar')->row();
    }
    public function getVDUser(){
        return $this->db->query("
            SElECT
                vkb.*,
                n.NAMA_NAS
            FROM verif_kemampuan_bayar vkb, nasabah n
            WHERE vkb.EMAIL_NAS = n.EMAIL_NAS
            ORDER BY FIELD(STATUS_VKB, 2, 1, 4, 0, 3)
        ")->result(); 
    }
    public function insert($param){
        $this->db->insert('verif_kemampuan_bayar', $param);
    }
    public function update($param){
        $this->db->where('ID_VKB', $param['ID_VKB'])->update('verif_kemampuan_bayar', $param);
    }
    public function delete($param){
        $this->db->delete('verif_kemba', $param);
    }
}