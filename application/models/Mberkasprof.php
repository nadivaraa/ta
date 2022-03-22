<?php

class Mberkasprof extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('dokumen_profesional')->result();
    }
    public function get($param){
        return $this->db->get_where('dokumen_profesional', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_DP', $id)->get('dokumen_profesional')->row();
    }
    public function insert($param){
        $this->db->insert('dokumen_profesional', $param);
    }
    public function update($param){
        $this->db->where('ID_DP', $param['ID_DP'])->update('dokumen_profesional', $param);
    }
    public function delete($param){
        $this->db->delete('dokumen_profesional', $param);
    }
}