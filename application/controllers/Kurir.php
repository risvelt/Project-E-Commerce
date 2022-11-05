<?php

class Kurir extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mkurir');
    }

    public function index(){
        $data['kurir']=$this->Mkurir->get_all_data('tbl_kurir')->result();
        $this->template->load('layout_admin','admin/kurir/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin' , 'admin/kurir/form_add');
    }

    public function save()
    {
        $namaKurir = $this->input->post('namaKurir');
        $dataInsert = array('namaKurir' =>$namaKurir);
        $this->Mkurir->insert('tbl_kurir', $dataInsert);
        redirect('kurir');
    }

    public function getid($id)
    {
        $dataWhere = array('idKurir' =>$id);
        $data['kurir'] = $this->Mkurir->get_by_id('tbl_kurir', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kurir/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKurir = $this->input->post('namaKurir');
        $dataUpdate = array('namaKurir'=>$namaKurir);
        $this->Mkurir->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
        redirect('kurir');  
    }

    public function hapus($idKurir)
    {
    $this->Mkurir->delete($idKurir);
     if($this->db->affected_rows() == 1){
         redirect('kurir');
     }else{
         echo "Data Gagal Dihapus";
     }
    }
}