<?php

class Kota extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mkota');
    }

    public function index(){
        $data['kota']=$this->Mkota->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin','admin/kota/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin' , 'admin/kota/form_add');
    }

    public function save()
    {
        $namaKota = $this->input->post('namaKota');
        $dataInsert = array('namaKota' =>$namaKota);
        $this->Mkota->insert('tbl_kota', $dataInsert);
        redirect('kota');
    }

    public function getid($id)
    {
        $dataWhere = array('idKota' =>$id);
        $data['kota'] = $this->Mkota->get_by_id('tbl_kota', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kota/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKota = $this->input->post('namaKota');
        $dataUpdate = array('namaKota'=>$namaKota);
        $this->Mkota->update('tbl_kota', $dataUpdate, 'idKota', $id);
        redirect('kota');  
    }

    public function hapus($idKota)
    {
    $this->Mkota->delete($idKota);
     if($this->db->affected_rows() == 1){
         redirect('kota');
     }else{
         echo "Data Gagal Dihapus";
     }
    }
}