<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 13.14
 */
class Admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function getAdmin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('login', array('username' => $username, 'password' => $password));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
            redirect(base_url() . 'admin/home');
        } else {
            echo "<script>alert('Username/password salah'); window.location.href='.'</script>";

        }
    }

    public function deletepemohon($id)
    {
        $query = $this->db->query("delete from pemohon where id_pemohon=$id");
        return $query;
    }

    public function tampilpemohon1()
    {
        $query = $this->db->query("SELECT * FROM pemohon where status!=0 ");
        return $query;
    }

    public function tampilpemohon()
    {
        $this->db->select('*');
        $this->db->from('pemohon');
        $this->db->order_by('id_pemohon','desc');
        $query = $this->db->get();
        return $query;
    }
    public function tampilproposal()
    {
        $this->db->select('*');
        $this->db->from('pemohon');
        $this->db->join('proposal', 'pemohon.id_pemohon = proposal.id_pemohon');
        $this->db->order_by('pemohon.id_pemohon','desc');
        $query = $this->db->get();
        return $query;
    }
    public function tambahjadwal(){
        $data = array(
            'id_proposal' => $this->input->post('id_proposal'),
            'jam' => $this->input->post('jam'),
            'tanggal' => $this->input->post('tgl'),
            'ruangan' => $this->input->post('ruangan'),
        );

        return $this->db->insert('seminar', $data);
    }
    public function tambahnilai(){
        $data = array(
            'id_seminar' => $this->input->post('id_seminar'),
            'total_hasil' => ($this->input->post('in1')+$this->input->post('in2')+$this->input->post('in3'))/3,
        );

        return $this->db->insert('penilaian', $data);
    }

    public function lihatpemohon($id)
    {
        $query = $this->db->query("SELECT * FROM pemohon where id_pemohon=$id")->row_array();
        return $query;
    }
    public function hapus($id)
    {
        $query = $this->db->query("delete FROM seminar where id_seminar=$id");
        return $query;
    }
    public function dataseminar()
    {
        $this->db->select('*');
        $this->db->from('seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->order_by('id_seminar','desc');
        $query = $this->db->get();
        return $query;
    }
    public function datahistori()
    {
        $this->db->select('*');
        $this->db->from('penilaian');
        $this->db->join('seminar','penilaian.id_seminar=seminar.id_seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->order_by('id_penilaian','desc');
        $query = $this->db->get();
        return $query;
    }


    public function updatestatus($id, $jenis)
    {
        $data = ['status' => $jenis];
        $this->db->where('id_pemohon', $id);
        $this->db->update('pemohon', $data);
    }
    public function us($id, $jenis)
    {
        $data = ['kabid' => $jenis];
        $this->db->where('id_seminar', $id);
        $this->db->update('seminar', $data);
    }

    public function updatestatusPro($id, $jenis)
    {
        $data = ['status_proposal' => $jenis];
        $this->db->where('id_proposal', $id);
        $this->db->update('proposal', $data);
    }
    public function usjadwal($id, $jenis)
    {
        $data = ['status_jadwal' => $jenis];
        $this->db->where('id_proposal', $id);
        $this->db->update('proposal', $data);
    }

}