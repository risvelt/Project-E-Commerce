<?php

class dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Mfrontend','Mtoko']);
    }


    public function index()
    {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
       $this->template->load('layout_frontend', 'frontend/member/dashboard_member', $data); 
    }

    public function index2()
    {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
       $this->template->load('layout_frontend', 'frontend/member/dashboard_member', $data); 
    }

    public function toko()
    {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['toko']=$this->Mtoko->get_all_data('tbl_toko')->result();
        $this->template->load('layout_frontend', 'frontend/member/list_toko', $data);
    }

}