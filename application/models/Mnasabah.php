<?php

class Mnasabah extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('nasabah')->result();
    }
    public function get($param){
        return $this->db->get_where('nasabah', $param)->result();
    }
    public function getById($id){
        return $this->db->where('EMAIL_NAS', $id)->get('nasabah')->row();
    }
    public function insert($param){
        $this->db->insert('nasabah', $param);
    }
    public function update($param){
        $this->db->where('EMAIL_NAS', $param['EMAIL_NAS'])->update('nasabah', $param);
    }
    public function delete($param){
        $this->db->delete('nasabah', $param);
    }
}