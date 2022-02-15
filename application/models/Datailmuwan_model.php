<?php

defined('BASEPATH') or exit('No direct script access allowed');

class datailmuwan_model extends CI_Model
{

    public function Get_Data()
    {
        $data = $this->db->query("SELECT * FROM datailmuwan ORDER BY namailmuwan");
        return $data;
    }

    public function Get_Data_Favorit()
    {
        $data = $this->db->query("SELECT * FROM datailmuwan WHERE favorit like 'iya' ");
        return $data;
    }

    //ambil data sesuai username
    public function get($username)
    {
        $this->db->where('username', $username);
        $pass = $this->db->get('akun')->row();

        return $pass;
    }

    //untuk validasi
    public function validasi()
    {
        return [
            [
                'field' => 'username',  //manggil yg di input kelas register
                'label' => 'username',  //semacam variabel
                'rules' => 'required|max_length[30]', //harus ada isinya | maksimal 20 karakter
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter'
                ]
            ],

            [
                'field' => 'email',  //manggil yg di input kelas register
                'label' => 'email',  //semacam variabel
                'rules' => 'required',  //harus ada isinya |is_unique: tidak boleh sama
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            [
                'field' => 'tanggal',  //manggil yg di input kelas register
                'label' => 'tanggal',  //semacam variabel
                'rules' => 'required',  //harus ada isinya[minimal 5 karakter]
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],

            [
                'field' => 'komentar',  //manggil yg di input kelas register
                'label' => 'komentar',  //semacam variabel
                'rules' => 'required',  //harus ada isinya[minimal 5 karakter]
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ]
        ];
    }

    //untuk input komentar
    function tambahdata()
    {
        $post = $this->input->post();

        $namailmuwan = $_POST["namailmuwan"];
        $desksingkat = $_POST["desksingkat"];
        $biodata = $_POST["biodata"];
        $biografi = $_POST["biografi"];
        $karya = $_POST["karya"];
        $penghargaan = $_POST["penghargaan"];
        $link = $_POST["link"];
        $foto = $_POST["foto"];
        $favorit = $_POST["favorit"];

        $insert['namailmuwan'] = $post['namailmuwan'];
        $insert['desksingkat'] = $post['desksingkat'];
        $insert['biodata'] = $post['biodata'];
        $insert['biografi'] = $post['biografi'];
        $insert['karya'] = $post['karya'];
        $insert['penghargaan'] = $post['penghargaan'];
        $insert['link'] = $post['link'];
        $insert['foto'] = $post['foto'];
        $insert['favorit'] = $post['favorit'];

        $this->db->insert('datailmuwan', $insert);
    }

    public function cariilmuwan()
    {
        $cari = $this->input->GET('keywords', TRUE);
        $data = $this->db->query("SELECT * from datailmuwan where namailmuwan like '%$cari%' OR desksingkat like '%$cari%' OR biodata like '%$cari%' OR biografi like '%$cari%' OR karya like '%$cari%' OR penghargaan like '%$cari%'");
        return $data->result();
    }
}

/* End of file Controllername.php */