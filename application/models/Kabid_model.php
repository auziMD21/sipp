<?php


class Kabid_model extends Ci_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function getKabid()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('db_kabid', array('username' => $username, 'pass' => $password));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
                $dataSession = [
                    'username' => $data['username'],
                    'loginAdmin' => TRUE,
                    'id_kabid' => $data['id_kabid'],
                    'status' => $data['status'],
                    'nama_kabid'=>$data['nama_kabid']
                ];

                $this->session->set_userdata($dataSession);
       redirect(base_url() . 'Kabid/home');
        }
            else{
                echo "<script>alert('Username/password salah!!!');";
                echo "history.back();</script>";
            }

        }
    public function us($id)
    {
        $data = ['status_nilai' => 1];
        $this->db->where('id_seminar', $id);
        $this->db->update('seminar', $data);
    }
    public function dataseminar($status)
    {
        //$id_kabid=$_SESSION['status'];
        $this->db->select('*, seminar.jam as jam_ajah, seminar.tanggal as tanggal_ajah');
        $this->db->from('seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->order_by('id_seminar','desc');
        $this->db->where('kabid',$status);
        $query = $this->db->get();
        return $query;
    }

}