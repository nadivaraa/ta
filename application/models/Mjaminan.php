<?php

class Mjaminan extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('dokumen_jaminan')->result();
    }
    public function get($param){
        return $this->db->get_where('dokumen_jaminan', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_DJ', $id)->get('dokumen_jaminan')->row();
    }
    public function insert($param){
        $this->db->insert('dokumen_jaminan', $param);
    }
    public function update($param){
        $this->db->where('ID_DJ', $param['ID_DJ'])->update('dokumen_jaminan', $param);
    }
    public function delete($param){
        $this->db->delete('dokumen_jaminan', $param);
    }
}