<?php


class kabid extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kabid_model');
        $this->load->model('Admin_model');


    }
    public function index(){
        $this->load->view('kabid/login');
    }
    public function kabidLogin(){
        $this->Kabid_model->getKabid();
    }
    public function home(){
        $this->load->view('kabid/header_admin');
        $this->load->view('kabid/index');
    }
    public function seminar(){
        $status=$_SESSION['status'];
        $tampil = $this->Kabid_model->dataseminar($status)->result();
        $data['tampil'] = $tampil;
        $this->load->view('kabid/header_admin');
        $this->load->view('kabid/seminar',$data);
        $this->load->view('admin/footer');
    }
    public function inputnilai(){
        $this->Admin_model->tambahnilai();
        redirect('kabid/seminar');;
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('kabid');
    }
    public function penilaian($id){

        $tampil = $id;
        $data['tampil'] = $tampil;
        $this->Kabid_model->us($id);
        $this->load->view('kabid/header_admin');
        $this->load->view('kabid/penilaian',$data);
        $this->load->view('admin/footer');
    }
}