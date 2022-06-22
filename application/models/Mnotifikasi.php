<?php

class MNotifikasi extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('notifikasi')->result();
    }
    public function get($param){
        if(!empty($param['orderBy'])){
            $this->db->order_by($param['orderBy']);
            unset($param['orderBy']);
        }
        return $this->db->get_where('notifikasi', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_NOTIF', $id)->get('notifikasi')->row();
    }
    public function insert($param){
        $this->db->insert('notifikasi', $param);
    }
    public function update($param){
        $this->db->where('ID_NOTIF', $param['ID_NOTIF'])->update('notifikasi', $param);
    }
    public function delete($param){
        $this->db->delete('notifikasi', $param);
    }
}