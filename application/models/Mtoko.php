<?php

class Mtoko extends CI_Model{

    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($data)
    {
        $this->db->insert('tbl_produk', $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel,$id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($id)
    {
        $this->db->where('idToko' ,$id);
        $this->db->delete('tbl_toko');
    }
     public function get_all_kategori(){
        return $this->db->get('tbl_kategori');
    }
    

    
}