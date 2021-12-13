\<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06/06/2018
 * Time: 22.40
 */
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_model');

    }
    public function index(){
        $this->load->view('admin/login');
    }
    public function adminLogin(){
        $this->Admin_model->getAdmin();
    }
    public function home(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/index');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }
    public function lihat($id){
        $data['tampil']=$this->Admin_model->lihatpemohon($id);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/lihat_pemohon',$data);
        $this->load->view('admin/footer');
    }
    public function hapus($id){
        $this->Admin_model->deletepemohon($id);
        redirect('admin/pemohon');
    }
    public function updateStatus($id,$jenis){
        $this->Admin_model->updatestatus($id,$jenis);
        redirect('admin/validasipemohon');
    }
    public function updateStatuspro($id,$jenis){
        $this->Admin_model->updatestatusPro($id,$jenis);
        redirect('admin/validasiproposal');
    }
    public function US($id,$jenis){
            $this->Admin_model->us($id,$jenis);
            redirect('admin/seminar');
    }
    public function insertpemohon(){
        $this->Admin_model->tambahpemohonbaru();
        redirect('admin/validasipemohon');
    }
    public function inputjadwal($id){

        if($this->Admin_model->tambahjadwal()) {
            $this->Admin_model->usjadwal($id,1);
            redirect('admin/validasiproposal');
        }
    }

    public function hapusjadwal($id){
        $this->Admin_model->hapus($id);
        redirect('admin/seminar');
    }

    public function jadwalseminar($id){
        $id_proposal['tampil']=$id;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/jadwal',$id_proposal);
        $this->load->view('admin/footer');
    }
    public function pemohon(){
        $tampil = $this->Admin_model->tampilpemohon1()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pemohon',$data);
        $this->load->view('admin/footer');
    }
    public function seminar(){
        $tampil = $this->Admin_model->dataseminar()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/seminar',$data);
        $this->load->view('admin/footer');
    }
    public function history(){
        $tampil = $this->Admin_model->datahistori()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/histori',$data);
        $this->load->view('admin/footer');
    }
    public function penilaian($id){
        $tampil = $id;
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/penilaian',$data);
        $this->load->view('admin/footer');
    }
    public function validasipemohon(){
        $tampil = $this->Admin_model->tampilpemohon()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/validasipemohon',$data);
        $this->load->view('admin/footer');
    }
    public function validasiproposal(){
        $tampil = $this->Admin_model->tampilproposal()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/validasiproposal',$data);
        $this->load->view('admin/footer');
    }


}