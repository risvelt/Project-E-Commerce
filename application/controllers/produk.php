<?php

class Produk extends CI_Controller{



    function __construct(){
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mtoko');
    }

    public function main($idToko){
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['Toko'] = $this->Mtoko->get_by_id('tbl_toko' , array('idToko' => $idToko))->row_object();
        $this->template->load('layout_frontend', 'frontend/toko_home', $data);
    }

    public function produk($idToko){
         $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['Toko'] = $this->Mtoko->get_by_id('tbl_toko' , array('idToko' => $idToko))->row_object();
        $data['produk'] = $this->Mtoko->get_by_id('tbl_produk' , array('idToko' => $idToko))->result();
        $this->template->load('layout_frontend', 'frontend/toko_produk', $data);
    }
    
    public function create_produk($idToko){
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['Toko'] = $this->Mtoko->get_by_id('tbl_toko' , array('idToko' => $idToko))->row_object();
        $data['idToko'] = $idToko;
        $this->template->load('layout_frontend', 'frontend/member/form_create_produk', $data);
    }


    public function tambahproduk(){
        $idToko = $this->input->post('idToko');
        $idKat = $this->input->post('kategori');
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsi = $this->input->post('deskripsi');
        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpeg|jpg|png|JPG|JPEG';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('gambar_produk')){
            $data_file = $this->upload->data();

            $data_insert = array(
                'idKat' => $idKat,
                'idToko' => $idToko,
                'namaProduk' => $namaProduk,
                'foto' => $data_file['file_name'],
                'harga' => $harga,
                'stok' => $stok,
                'berat' => $berat,
                'deskripsiProduk' => $deskripsi
            );

            $this->Mtoko->insert($data_insert);
            redirect('produk/produk/'.$idToko);    
        } else {
            redirect('produk/tambahproduk/'.$idToko);    
        }

}

}