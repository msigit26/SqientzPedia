<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();  //untuk parent
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function berandaadmin()
    {
        $this->load->view('berandaadmin');
    }

    public function daftar()
    {
        $this->load->view('daftar');
    }

    public function tampil_data()
    {
        $data['tampil'] = $this->User_model->Get_User()->result();
        $this->load->view('tampil', $data);
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->User_model->get($username);

        if (empty($user)) {
            $this->session->set_flashdata('message1', 'Username tidak ada');
            redirect('account/login', 'refresh');
        } else {
            if ($password == $user->password) {
                $data = array(
                    'authenticated' => true,
                    'username' => $user->username,
                    'nama' => $user->nama
                );
                $this->session->set_userdata($data);
                if ($username == "admin") {
                    redirect('berandaadmin', 'refresh');
                } else {
                    redirect('beranda', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message2', 'Password salah<br>');
                redirect('account/login', 'refresh');
            }
        }
    }

    public function tampil_1($id)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('id', $id);

        $query['tampil1'] = $this->db->get()->result();
        $this->load->view('tampil1', $query);

        //return 0;
        // return $query->result();
    }

    public function proses_regis()
    {
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        if ($confirm_password == $password) {
            $validasi = $this->form_validation;
            $validasi->set_rules($this->User_model->validasi());

            if ($validasi->run()) {
                $this->User_model->register();
                $this->session->set_flashdata('success', 'Sign Up Berhasil');
                $this->load->view('login');
            } else {
                $this->load->view('daftar');
            }
        } else {
            $this->session->set_flashdata('pesan_pass', 'Password tidak sama<br>');
            $this->load->view('daftar');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('account/login', 'refresh');
    }
}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */