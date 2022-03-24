<?php

class Mberkaskary extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('dokumen_karyawan')->result();
    }
    public function get($param){
        return $this->db->get_where('dokumen_karyawan', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_DP', $id)->get('dokumen_karyawan')->row();
    }
    public function insert($param){
        $this->db->insert('dokumen_karyawan', $param);
    }
    public function update($param){
        $this->db->where('ID_DP', $param['ID_DP'])->update('dokumen_karyawan', $param);
    }
    public function delete($param){
        $this->db->delete('dokumen_karyawan', $param);
    }
}