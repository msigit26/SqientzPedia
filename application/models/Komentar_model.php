<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komentar_model extends CI_Model
{

    public function Get_Komen()
    {
        $data = $this->db->query("SELECT * FROM komentar");
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
    function komentar()
    {
        $post = $this->input->post();

        $insert['username'] = $post['username'];
        $insert['email'] = $post['email'];
        $insert['tanggal'] = $post['tanggal'];
        $insert['komentar'] = $post['komentar'];
        $this->db->insert('komentar', $insert);
    }
}

/* End of file Controllername.php */