<?php

class Mmember extends CI_Model{

    public function get_all_data($tabel){
        $q=$this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
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
        $this->db->where('idKonsumen' ,$id);
        $this->db->delete('tbl_member');
    }

     public function jointable()
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->join('tbl_kota', 'tbl_member.idKota=tbl_kota.idKota');
        $query = $this->db->get();
        return $query;
    }

    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p));
        return $q;
    }
    public function get_all_kategori(){
        return $this->db->get('tbl_kategori');
    }

    public function get_produk_by_id($id){
        return $this->db->get_where('tbl_produk',$id);
    }
    
}