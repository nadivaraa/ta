<?php

class Mkriteriakeldok extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('kriteria_dokumen')->result();
    }
    public function get($param){
        return $this->db->get_where('kriteria_dokumen', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_KD', $id)->get('kriteria_dokumen')->row();
    }
    public function insert($param){
        $this->db->insert('kriteria_dokumen', $param);
    }
    public function update($param){
        $this->db->where('ID_KD', $param['ID_KD'])->update('kriteria_dokumen', $param);
    }
    public function delete($param){
        $this->db->delete('kriteria_dokumen', $param);
    }
}