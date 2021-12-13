<?php


class Pemohon_model extends CI_Model
{public function __construct()
{
    $this->load->database();
    $this->load->library('session');
    $this->load->library('upload');
    $this->load->helper('url');
}
    public function getAdmin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('pemohon', array('username' => $username, 'pass' => $password));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
            $status = $data['status'];

            if($status == 1){

                $dataSession= array(

                    'username' => $data['username'],
                    'loginAdmin' => TRUE,
                    'id_pemohon' => $data['id_pemohon'],
                    'nama'=>$data['nama'],
                    'foto'=>$data['foto'],
                    'alamat'=>$data['alamat'],
                    'tgl'=>$data['tgl'],
                    'email'=>$data['email'],
                    'no_hp'=>$data['no_hp'],
                );


                $this->session->set_userdata($dataSession);
                redirect(base_url() . 'Pemohon/home');
            }
            else if($status == 0){
                echo "<script>alert('Akun belum di konfirmasi. Mohon tunggu!');";
                echo "history.back();</script>";
            }

        }
        else {
            echo "<script>alert('Username/password salah '); window.location.href='.'</script>";

        }
    }
    public function tambahpemohonbaru(){
        $this->load->helper('url');
        $config['upload_path'] = './upload/registrasi/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            exit();
        }else{
            $foto = $this->upload->data('file_name');

            $config['upload_path'] = './upload/ktp/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('fotoktp')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                exit();
            }
            else{
                $foto_ktp = $this->upload->data('file_name');
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'tgl' => $this->input->post('tgl'),
                    'email' => $this->input->post('email'),
                    'no_hp' => $this->input->post('hp'),
                    'foto' => $foto ,
                    'username' => $this->input->post('username'),
                    'pass' => $this->input->post('password'),
                    'foto_ktp' => $foto_ktp
                );

                return $this->db->insert('pemohon', $data);
            }

        }

    }
    public function editpemohon($id_pemohon){

        $this->load->helper('url');
        $config['upload_path'] = './upload/registrasi/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            exit();
        }else{
            $foto = $this->upload->data('file_name');

            $config['upload_path'] = './upload/ktp/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('fotoktp')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                exit();
            }
            else{
                $foto_ktp = $this->upload->data('file_name');
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'tgl' => $this->input->post('tgl'),
                    'email' => $this->input->post('email'),
                    'no_hp' => $this->input->post('hp'),
                    'foto' => $foto ,
                    'username' => $this->input->post('username'),
                    'pass' => $this->input->post('password'),
                    'foto_ktp' => $foto_ktp
                );

                return $this->db->update('pemohon', $data);
                return $this->db->update('id_pemohon', $id_pemohon);
            }

        }

    }
    public function datahistori(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->db->select('*');
        $this->db->from('penilaian');
        $this->db->join('seminar','penilaian.id_seminar=seminar.id_seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->where('pemohon.id_pemohon',$id_pemohon);
        $query = $this->db->get();
        return $query;

    }
    public function dataproposal(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->db->select('*, seminar.jam as jam_ajah, seminar.tanggal as tanggal_ajah');
        $this->db->from('penilaian');
        $this->db->join('seminar','penilaian.id_seminar=seminar.id_seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->where('pemohon.id_pemohon',$id_pemohon);
        $query = $this->db->get();
        return $query;

    }
    public function personal(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->db->select('*');
        $this->db->from('pemohon');
        $this->db->where('id_pemohon',$id_pemohon);
        $query = $this->db->get();
        return $query;

    }
    public function proposal(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->db->select('*');
        $this->db->from('penilaian');
        $this->db->join('seminar','penilaian.id_seminar=seminar.id_seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->where('pemohon.id_pemohon',$id_pemohon);
        $query = $this->db->get();
        return $query;

    }
    public function dataseminar(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->db->select('*, seminar.jam as jam_ajah, seminar.tanggal as tanggal_ajah');
        $this->db->from('seminar');
        $this->db->join('proposal', 'seminar.id_proposal = proposal.id_proposal');
        $this->db->join('pemohon', 'proposal.id_pemohon = pemohon.id_pemohon');
        $this->db->where('pemohon.id_pemohon',$id_pemohon);
        $query = $this->db->get();
        return $query;

    }
    public function dataproposal1(){
        $id_pemohon=$_SESSION['id_pemohon'];
//        $query = $this->db->query("SELECT * FROM proposal inner join pemohon on proposal.id_pemohon=pemohon.id_pemohon inner join seminar on proposal.id_proposal=seminar.id_proposal where proposal.id_pemohon=$id_pemohon");
        $query = $this->db->query("SELECT * FROM proposal join pemohon on proposal.id_pemohon=pemohon.id_pemohon where proposal.id_pemohon=$id_pemohon");


        return $query;

    }
    public function documenpemohon($id){
        $query = $this->db->query("SELECT * FROM seminar where id_proposal=$id")->row_array();
        return $query;
    }
    public function tambahproposalbaru(){
        $id_pemohon=$_SESSION['id_pemohon'];
        $this->load->helper('url');
        $config['upload_path'] = './upload/proposal/';
        $config['allowed_types'] = 'application/pdf';

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_proposal')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            exit();
        }
            else{
                $foto_ktp = $this->upload->data('file_name');
                $data = array(
                    'judul_proposal' => $this->input->post('judul'),
                    'file_proposal' => $foto_ktp,
                    'waktu'=>now(),
                    'id_pemohon'=>$id_pemohon


                );

                return $this->db->insert('proposal', $data);
            }

        }

        public function tambahproposalbaru1()
        {
           $id_pemohon=$_SESSION['id_pemohon'];

            date_default_timezone_set("Asia/jakarta");
            $this->form_validation->set_rules('judul_proposal','judul proposal','trim|required');


                if($this->form_validation->run()== FALSE)
                {

                    echo'gagal';
//                    redirect('c_pemohon/proposalbaru');
                }
                else{
                    $data= array(

                        'judul_proposal'=>$this->input->post('judul_proposal'),
                        'waktu'=>date("Y-m-h H:i:s"),
                        'id_pemohon'=>$id_pemohon,
                        'file_proposal'=>$_FILES['file_proposal']['name']

                    );

                    $targetfolder="upload/proposal/";
                    $targetfolder=$targetfolder . basename($_FILES['file_proposal']['name']);
                    $file_type=$_FILES['file_proposal']['type'];

                    if ($file_type=="application/pdf")
                    {
                        if(move_uploaded_file($_FILES['file_proposal']['tmp_name'], $targetfolder)){

                        }   else{
                            echo'dsd';
                        }
                    }

                    $this->db->insert('proposal',$data);
                    redirect('Pemohon/permohonan');
                }


       }

//       public function datapribadi($id){
//
//           $query = $this->db->query("SELECT * FROM pemohon where id_pemohon=$id")->row_array();
//           return $query;
//       }



}

