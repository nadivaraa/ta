<?php

class Mkriteriajaminan extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('kriteria_jaminan')->result();
    }
    public function get($param){
        return $this->db->get_where('kriteria_jaminan', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_KJ', $id)->get('kriteria_jaminan')->row();
    }
    public function insert($param){
        $this->db->insert('kriteria_jaminan', $param);
    }
    public function update($param){
        $this->db->where('ID_KJ', $param['ID_KJ'])->update('kriteria_jaminan', $param);
    }
    public function delete($param){
        $this->db->delete('kriteria_jaminan', $param);
    }
}