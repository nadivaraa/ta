<?php

class Madmin extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('admin')->result();
    }
    public function get($param){
        return $this->db->get_where('admin', $param)->result();
    }
    public function getById($id){
        return $this->db->where('EMAIL_ADM', $id)->get('admin')->row();
    }
    public function insert($param){
        $this->db->insert('admin', $param);
    }
    public function update($param){
        $this->db->where('EMAIL_ADM', $param['EMAIL_ADM'])->update('admin', $param);
    }
    public function delete($param){
        $this->db->delete('admin', $param);
    }
}