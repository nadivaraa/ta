<?php

class Mkriteriakemba extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('kriteria_kemampuan_bayar')->result();
    }
    public function get($param){
        return $this->db->get_where('kriteria_kemampuan_bayar', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_KMB', $id)->get('kriteria_kemampuan_bayar')->row();
    }
    public function insert($param){
        $this->db->insert('kriteria_kemampuan_bayar', $param);
    }
    public function update($param){
        $this->db->where('ID_KMB', $param['ID_KMB'])->update('kriteria_kemampuan_bayar', $param);
    }
    public function delete($param){
        $this->db->delete('kriteria_kemampuan_bayar', $param);
    }
}