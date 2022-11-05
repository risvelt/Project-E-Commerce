<?php

class Mongkir extends CI_Model{

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
        $this->db->where('idBiayaKirim' ,$id);
        $this->db->delete('tbl_biaya_kirim');
    }

    public function jointable()
    {
        $this->db->select('*');
        $this->db->from('tbl_biaya_kirim');
        $this->db->join('tbl_kurir', 'tbl_biaya_kirim.idKurir=tbl_kurir.idKurir');
        $this->db->join('tbl_kota', 'tbl_kota.idKota=tbl_biaya_kirim.idKotaAsal');
        $query = $this->db->get();
        return $query;
    }
    
}