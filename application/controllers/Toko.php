<?php

class Toko extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mtoko');
    }

    public function index(){
        $data['toko']=$this->Mtoko->get_all_data('tbl_toko')->result();
        $this->template->load('layout_admin','admin/toko/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin' , 'admin/toko/form_add');
    }

    public function save()
    {
        $idToko = $this->input->post('idToko');
        $idKonsumen = $this->input->post('idKonsumen');
        $namaToko = $this->input->post('namaToko');
        $logo = $this->input->post('logo');
        $deskripsi = $this->input->post('deskripsi');
        $statusAktif = $this->input->post('statusAktif');
        $dataInsert = array(
            'idToko' => $idToko,
            'idKonsumen' => $idKonsumen,
            'namaToko' => $namaToko,
            'logo' => $logo,
            'deskripsi' => $deskripsi,
            'statusAktif' => $statusAktif

        );
        $this->Mtoko->insert('tbl_toko', $dataInsert);
        redirect('toko');
    }

     public function getid($id)
    {
        $dataWhere = array('idToko' =>$id);
        $data['toko'] = $this->Mtoko->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/toko/form_edit', $data);
    }

    public function edit()
    {
        $idToko = $this->input->post('idToko');
        $idKonsumen = $this->input->post('idKonsumen');
        $namaToko = $this->input->post('namaToko');
        $logo = $this->input->post('logo');
        $deskripsi = $this->input->post('deskripsi');
        $statusAktif = $this->input->post('statusAktif');
        $dataUpdate = array(
            'idToko' => $idToko,
            'idKonsumen' => $idKonsumen,
            'namaToko' => $namaToko,
            'logo' => $logo,
            'deskripsi' => $deskripsi,
            'statusAktif' => $statusAktif

        );
         $this->Mtoko->update('tbl_toko', $dataUpdate, 'idToko', $idToko);
        redirect('ongkir');  
    }

    public function hapus($idToko)
    {
    $this->Mtoko->delete($idToko);
     if($this->db->affected_rows() == 1){
         redirect('toko');
     }else{
         echo "Data Gagal Dihapus";
     }
    }

    public function aktif($id){
        $dataupdate = array('statusAktif'=>'Y');
        $this->Mtoko->update('tbl_toko', $dataupdate, 'idkonsumen', $id);
        redirect('toko');
    }

    public function non_aktif($id){
        $dataupdate = array('statusAktif'=>'N');
        $this->Mtoko->update('tbl_toko', $dataupdate, 'idkonsumen', $id);
    redirect('toko');
    }


        public function addtoko()
    {
        $data['kategori']=$this->Mtoko->get_all_kategori()->result();
        $this->template->load('layout_frontend' , 'frontend/member/form_tambah_toko', $data);
    }

        public function tambahtoko(){
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if(! $this-> upload->do_upload('logo'))
        {
            echo "Gagal Tambah";
        }else 
        {
            $logo = $this->upload->data();
            $logo = $logo['file_name'];
            $idKonsumen = $this->input->post('idKonsumen', TRUE);
            $namaToko = $this->input->post('namaToko', TRUE);
            $deskripsi = $this->input->post('deskripsi', TRUE);
            $statusAktif = $this->input->post('statusAktif', TRUE);
            
            $data = array (
                'idKonsumen' => $idKonsumen,
                'namaToko' => $namaToko,
                'deskripsi' => $deskripsi,
                'logo' => $logo,
                'statusAktif' => $statusAktif
            );
            $this->db->insert('tbl_toko', $data);
            redirect('dashboard/toko');
        }
    }




}