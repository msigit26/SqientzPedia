<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berandaadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();  //untuk parent
        $this->load->model(array('Komentar_model', 'Datailmuwan_model'));
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        if (!(($this->session->userdata('authenticated')) && ($username == "admin"))) redirect('account/login', 'refresh');
        $this->load->view('berandaadmin');
    }

    public function tambahdata()
    {
        $this->load->view('tambahdata');
    }

    public function proses_tambahdata()
    {
        $namailmuwan = $_POST["namailmuwan"];
        $desksingkat = $_POST["desksingkat"];
        $biodata = $_POST["biodata"];
        $biografi = $_POST["biografi"];
        $karya = $_POST["karya"];
        $penghargaan = $_POST["penghargaan"];
        $link = $_POST["link"];
        $foto = $_POST["foto"];
        $favorit = $_POST["favorit"];

        //$berhasil = $this->form_validation;
        //$berhasil->set_rules($this->Datailmuwan_model->validasi());

        $this->Datailmuwan_model->tambahdata();
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        $this->load->view('tambahdata');
    }

    public function tampil_data()
    {
        $data['tampildata'] = $this->Datailmuwan_model->Get_Data()->result();
        $this->load->view('ilmuwanalllist', $data);
    }

    public function tampil_komentar()
    {
        $data['tampilkomen'] = $this->Komentar_model->Get_Komen()->result();
        $this->load->view('lihatkomentar', $data);
    }
}
