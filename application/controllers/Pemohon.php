<?php


class Pemohon extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation','upload'));
        $this->load->model('Pemohon_model');
        $this->load->helper(array('url','form'));

    }
    public function index(){
        $this->load->view('pemohon/login');
        $this->load->view('pemohon/footer');
    }
    public function home(){
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/index');
        $this->load->view('pemohon/footer');
    }
    public function permohonan(){
        $data['tampil']=$this->Pemohon_model->dataproposal1()->result();
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/permohonan',$data);
        $this->load->view('pemohon/footer');
    }
    public function seminar(){
        $data['tampil']=$this->Pemohon_model->dataseminar()->result();
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/seminar',$data);
        $this->load->view('pemohon/footer');
    }
    public function histori(){
        $tampil = $this->Pemohon_model->datahistori()->result();
        $data['tampil'] = $tampil;
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/histori',$data);
        $this->load->view('pemohon/footer');
    }
    public function profil(){
        $data['proposal']=$this->Pemohon_model->proposal()->result();
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/profil',$data);
        $this->load->view('pemohon/footer');
    }
    public function edit_profil(){
        $data['profil']=$this->Pemohon_model->personal()->row_array();
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/Edit_profil',$data);
        $this->load->view('pemohon/footer');
    }
    public function documen_seminar($id){
        $data['tampil']=$this->Pemohon_model->documenpemohon($id);
        $this->load->view('pemohon/documenseminar',$data);
        $this->load->view('pemohon/footer');
    }
    public function proposal_baru(){
        $this->load->view('pemohon/header_pemohon');
        $this->load->view('pemohon/form_proposal');
        $this->load->view('pemohon/footer');
    }
    public function registpemohon(){
        $this->load->view('pemohon/daftar');
        $this->load->view('pemohon/footer');
    }
    public function loginPemohon(){
        $this->Pemohon_model->getAdmin();
    }
    public function insertpemohon(){
        $this->Pemohon_model->tambahpemohonbaru();
        redirect('pemohon/index');
    }
    public function robahpemohon(){
        $id=$_SESSION['id_pemohon'];
        $this->Pemohon_model->editpemohon($id);
        redirect('pemohon/profil');
    }
    public function tambahproposal()
    {

        if ($this->Pemohon_model->tambahproposalbaru1()) {
            redirect('pemohon/permohonan');
        } else {
       echo 'eror';
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('pemohon');
    }

//    public function datapribadi($id)
//    {
//        $data['tampil']=$this->Pemohon_model->datapribadi($id);
//        $this->load->view('pemohon/header_pemohon');
//        $this->load->view('pemohon/datapribadi');
//        $this->load->view('pemohon/footer');
//
//
//
//    }
}