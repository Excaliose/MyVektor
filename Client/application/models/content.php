<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('tb_gambar');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('idgambar', $id);
        $q = $this->db->get('tb_gambar');
        return $q->row_array();
    }
    public function get_data_nama($id)
    {
        $this->db->where('nama_gambar', $id);
        $q = $this->db->get('tb_gambar');
        return $q->result_array();
    }
    public function get_data_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        $q = $this->db->get('tb_gambar');
        return $q->result_array();
    }

	public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('tb_user');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {    
            return false;
        }
    }
	public function register($post)
    {
		$input = array(
            'username' => $post['username'],
            'password' => $post['password'],
            'email' => $post['email'],
            'level' => '0'
        );
		$this->db->insert('tb_user', $input);
		return TRUE;
    }
	
}
