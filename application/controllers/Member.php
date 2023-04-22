<?php

class Member extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
    }

    public function index(){
        $data['member']=$this->Mmember->jointable()->result();
        $this->template->load('layout_admin','admin/member/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin' , 'admin/member/form_add');
    }

    public function save()
    {
        $idKonsumen = $this->input->post('idKonsumen');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $namaKota = $this->input->post('namaKota');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('statusAktif');
        $data = array(
            'idKonsumen' => $idKonsumen,
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $namaKonsumen,
            'alamat' => $alamat,
            'namaKota' => $namaKota,
            'email' => $email,
            'telepon' => $telepon,
            'statusAktif' => $status,
         );
         $this->Mmember->insert('tbl_member', $data);
        redirect('member');
    }



    public function getid($id)
    {
        $dataWhere = array('idKonsumen' =>$id);
        $data['member'] = $this->Mmember->get_by_id('tbl_member', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/member/form_edit', $data);
    }

    public function edit()
    {
        $idKonsumen = $this->input->post('idKonsumen');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $namaKota = $this->input->post('namaKota');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('statusAktif');
        $dataUpdate = array(
            'idKonsumen' => $idKonsumen,
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $namaKonsumen,
            'alamat' => $alamat,
            'namaKota' => $namaKota,
            'email' => $email,
            'telepon' => $telepon,
            'statusAktif' => $status,
         );
        $this->Mmember->update('tbl_member', $dataUpdate, 'idKonsumen', $idKonsumen);
        redirect('member');  
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

    public function aktif($id){
        $dataupdate = array('statusAktif'=>'Y');
        $this->Mmember->update('tbl_member', $dataupdate, 'idkonsumen', $id);
        redirect('member');
    }

    public function non_aktif($id){
        $dataupdate = array('statusAktif'=>'N');
        $this->Mmember->update('tbl_member', $dataupdate, 'idkonsumen', $id);
    redirect('member');
    }

    public function act_login(){
        $this->load->model('Mmember');
        $u= $this->input->post('username');
        $p= $this->input->post('password');

        $cek = $this->Mmember->cek_login($u, $p)->num_rows();
        $result = $this->Mmember->cek_login($u, $p)->result();
        if($cek==1){
            $data_session = array(
                'username' => $u,
                'id' => $result[0]->idKonsumen,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('home/index');
        }else {
            $this->session->set_flashdata('pesan', 'Username / Password Tidak Sesuai');
            redirect('member/indexmember');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('member/indexmember');
    }

     public function indexmember()
    {
         $data['kategori']=$this->Mmember->get_all_kategori()->result();
        $data['member']=$this->Mmember->get_all_data('tbl_member')->result();
        $this->template->load('layout_frontend', 'frontend/member/loginMember', $data);
    }

      public function cart_tambah($idproduk){
       $status= $this->session->userdata('status');
       if(empty($status)){
              redirect('home/login');
         } else {
             $jml_keranjang = count($this->cart->contents());
            if(empty($jml_keranjang)){
                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                $insert_cart = array(
                    'id' => $idproduk,
                    'id_toko' => $data_produk->idToko,
                    'name' => $data_produk->namaProduk,
                    'price' => $data_produk->harga,
                    'gambar' => $data_produk->foto,
                    'qty' => 1,
                );
                $this->cart->insert($insert_cart);
                redirect('member/keranjang');
            } else {
                $idToko = '';
                if($cart = $this->cart->contents()){
                    foreach($cart as $item){
                        $idToko = $item['id_toko'];
                    }
                }
                
                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                if($idToko==$data_produk->idToko){
                    $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                    $insert_cart = array(
                        'id' => $idproduk,
                        'id_toko' => $data_produk->idToko,
                        'name' => $data_produk->namaProduk,
                        'price' => $data_produk->harga,
                        'gambar' => $data_produk->foto,
                        'qty' => 1,
                    );
                    $this->cart->insert($insert_cart);
                    redirect('member/keranjang');
                } else {
                    echo "barang harus dari toko yang sama";
                }
            }
       }
   }

    public function hapus_cart($rowid)
    {
        $data_hapus = array('rowid'=>$rowid, 'qty' =>0);
        $this->cart->update($data_hapus);
        redirect('member/keranjang');
    }

    public function keranjang()
    {
        $data['kategori']=$this->Mmember->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/keranjang', $data);
    }

    public function selesai_belanja()
    {
        $idToko = '';
        if($cart = $this->cart->contents()){
            foreach($cart as $item){
                $idToko = $item['idToko'];
            }
        }
        $data_pembeli = array('idKonsumen' => $this->session->userdata('id'),
                                'tglOrder' => date('Y-m-d'),
                                'idToko' => $idToko,
                                'statusOrder' => 'Belum Bayar'
    );
    $idTerakhir = $this->Mmember->insert_order($data_pembeli);
    if($cart = $this->cart->contents()){
        foreach($cart as $item){
            $data_detail = array('idOrder' => $idTerakhir,
                                'idProduk' => $item['id'],
                                'jumlah' => $item['qty'],
                                'harga' => $item['price']);
                                $this->Mmember->insert_detail_order($data_detail);
        }
    }
    $this->cart->destroy();
    redirect('member/transaksi');
    }
}