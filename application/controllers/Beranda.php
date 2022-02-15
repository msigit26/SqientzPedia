<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();  //untuk parent
        $this->load->model(array('Komentar_model', 'Datailmuwan_model'));
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        if (!(($this->session->userdata('authenticated')) && ($username != "admin"))) redirect('account/login', 'refresh');
        $this->load->view('beranda');
    }

    public function alllist()
    {
        $this->load->view('ilmuwanalllist');
    }

    public function Favorit()
    {
        $data['tampildata'] = $this->Datailmuwan_model->Get_Data_Favorit()->result();
        $this->load->view('favoritlist', $data);
    }

    public function hasilsearch()
    {
        $this->load->view('hasilsearch');
    }

    public function biodata($id)
    {
        $this->db->select('*');
        $this->db->from('datailmuwan');
        $this->db->where('id', $id);

        $query['tampildata'] = $this->db->get()->result();
        $this->load->view('biodata', $query);

        //return 0;
        // return $query->result();
    }

    public function komentar()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $tanggal = $_POST["tanggal"];
        $komentar = $_POST["komentar"];

        $berhasil = $this->form_validation;
        $berhasil->set_rules($this->Komentar_model->validasi());

        if ($berhasil->run()) {
            $this->Komentar_model->komentar();
            echo "<script>alert('Terima Kasih atas Pesan, Kritik dan Sarannya!!')</script>";
            $this->load->view('beranda');
        } else {
            $this->load->view('index');
        }
    }

    public function tampil_komentar()
    {
        $data['tampilkomen'] = $this->Komentar_model->Get_Komen()->result();
        $this->load->view('lihatkomentar', $data);
    }

    public function all_list()
    {
        $data['tampildata'] = $this->Datailmuwan_model->Get_Data()->result();
        $this->load->view('ilmuwanalllist', $data);
    }

    public function cari()
    {
        $data2['keywords'] = $this->Datailmuwan_model->cariilmuwan();
        $this->load->view('hasilsearch', $data2);
    }
}
