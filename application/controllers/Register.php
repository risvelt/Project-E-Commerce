<?php

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->Library('form_validation');
        $this->load->model(['Mmember','Mkota']);
    }

    
    public function index()
    {
        $data['kategori']=$this->Mmember->get_all_kategori()->result();
        $data['member']=$this->Mmember->get_all_data('tbl_member')->result();
        $data['kota']=$this->Mkota->get_all_data('tbl_kota')->result();
        $this->template->load('layout_frontend' ,'frontend/member/register', $data);
    }

    public function registration()
    {
        $this->form_validation->set_rules('namaKonsumen','namaKonsumen','required|trim');
        $this->form_validation->set_rules('email','email','required|trim');
        $this->form_validation->set_rules('password','password','required|trim|matches[password2]');
        $this->form_validation->set_rules('password2','password2','required|trim|matches[password]');
        $this->form_validation->set_rules('alamat','alamat','required|trim');
        $this->form_validation->set_rules('idKota','idKota','required|trim');
        $this->form_validation->set_rules('telepon','telepon','required|trim');

        if($this->form_validation->run() == false) {
            redirect('register');
        } else{
        $idKonsumen = $this->input->post('idKonsumen');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $idKota = $this->input->post('idKota');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('statusAktif');
            $dataUpdate = array(
            'idKonsumen' => $idKonsumen,
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $namaKonsumen,
            'alamat' => $alamat,
            'idKota' => $idKota,
            'email' => $email,
            'telepon' => $telepon,
            'statusAktif' => $status,
         );
            
            $this->db->insert('tbl_member', $dataUpdate, 'idKonsumen', $idKonsumen);
            redirect('Member/indexmember');
        }
    }



}