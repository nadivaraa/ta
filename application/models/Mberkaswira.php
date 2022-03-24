<?php

class Mberkaswira extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAll(){
        return $this->db->get('dokumen_wiraswasta')->result();
    }
    public function get($param){
        return $this->db->get_where('dokumen_wiraswasta', $param)->result();
    }
    public function getById($id){
        return $this->db->where('ID_DW', $id)->get('dokumen_wiraswasta')->row();
    }
    public function insert($param){
        $this->db->insert('dokumen_wiraswasta', $param);
    }
    public function update($param){
        $this->db->where('ID_DW', $param['ID_DW'])->update('dokumen_wiraswasta', $param);
    }
    public function delete($param){
        $this->db->delete('dokumen_wiraswasta', $param);
    }
}