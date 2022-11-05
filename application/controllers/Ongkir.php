<?php

class Ongkir extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mongkir');
    }

    public function index(){
        $data['ongkir']=$this->Mongkir->jointable()->result();
        $this->template->load('layout_admin','admin/ongkir/index', $data);
    }

    public function add()
    {
        $this->template->load('layout_admin' , 'admin/ongkir/form_add');
    }

    public function save()
    {
        $idBiayaKirim = $this->input->post('idBiayaKirim');
        $idKurir = $this->input->post('idKurir');
        $idKotaAsal = $this->input->post('idKotaAsal');
        $idKotaTujuan = $this->input->post('idKotaTujuan');
        $biaya = $this->input->post('biaya');
        $dataInsert = array(
            'idBiayaKirim' =>$idBiayaKirim,
            'idKurir'=>$idKurir,
            'idKotaAsal' =>$idKotaAsal,
            'idKotaTujuan' =>$idKotaTujuan,
            'biaya' => $biaya
        );
        $this->Mongkir->insert('tbl_biaya_kirim', $dataInsert);
        redirect('ongkir');
    }

    public function getid($id)
    {
       $dataWhere = array('idBiayaKirim' =>$id);
        $data['ongkir'] = $this->Mongkir->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/ongkir/form_edit', $data);
    }

    public function edit()
    {
        $idBiayaKirim = $this->input->post('idBiayaKirim');
        $idKurir = $this->input->post('idKurir');
        $idKotaAsal = $this->input->post('idKotaAsal');
        $idKotaTujuan = $this->input->post('idKotaTujuan');
        $biaya = $this->input->post('biaya');
        $dataUpdate = array(
            'idBiayaKirim' =>$idBiayaKirim,
            'idKurir'=>$idKurir,
            'idKotaAsal' =>$idKotaAsal,
            'idKotaTujuan' =>$idKotaTujuan,
            'biaya' => $biaya
        );
        $this->Mongkir->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $idBiayaKirim);
        redirect('ongkir');  
    }

    public function hapus($idBiayaKirim)
    {
    $this->Mongkir->delete($idBiayaKirim);
     if($this->db->affected_rows() == 1){
         redirect('ongkir');
     }else{
         echo "Data Gagal Dihapus";
     }
    }
}