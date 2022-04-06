<?php

class Mkriteriaslik extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('kriteria_pengecekkan_slik')->result();
    }
    public function get($param){
        return $this->db->get_where('kriteria_pengecekkan_slik', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_KPS', $id)->get('kriteria_pengecekkan_slik')->row();
    }
    public function insert($param){
        $this->db->insert('kriteria_pengecekkan_slik', $param);
    }
    public function update($param){
        $this->db->where('ID_KPS', $param['ID_KPS'])->update('kriteria_pengecekkan_slik', $param);
    }
    public function delete($param){
        $this->db->delete('kriteria_pengecekkan_slik', $param);
    }
}