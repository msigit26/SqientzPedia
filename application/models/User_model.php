<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function Get_User()
    {
        $data = $this->db->query("SELECT * FROM akun");
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
                'field' => 'nama',  //manggil yg di input kelas register
                'label' => 'Nama',  //semacam variabel
                'rules' => 'required|max_length[20]', //harus ada isinya | maksimal 20 karakter
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} maksimal 20 karakter'
                ]
            ],

            [
                'field' => 'username',  //manggil yg di input kelas register
                'label' => 'Username',  //semacam variabel
                'rules' => 'required|is_unique[akun.username]',  //harus ada isinya |is_unique: tidak boleh sama
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ]
            ],

            [
                'field' => 'password',  //manggil yg di input kelas register
                'label' => 'Password',  //semacam variabel
                'rules' => 'required|min_length[5]',  //harus ada isinya[minimal 5 karakter]
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 5 karakter'
                ]
            ],

            [
                'field' => 'confirm_password',  //manggil yg di input kelas register
                'label' => 'confirm_Password',  //semacam variabel
                'rules' => 'required|min_length[5]',  //harus ada isinya[minimal 5 karakter]
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 5 karakter'
                ]
            ]
        ];
    }

    //untuk register
    function register()
    {
        $post = $this->input->post();

        $insert['nama'] = $post['nama'];
        $insert['username'] = $post['username'];
        $insert['password'] = md5($post['password']);
        $this->db->insert('akun', $insert);
    }
}

/* End of file Controllername.php */