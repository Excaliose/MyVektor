<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('gambar');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('idgambar', $id);
        $q = $this->db->get('gambar');
        return $q->row_array();
    }
    public function get_data_nama($id)
    {
        $this->db->where('namagambar', $id);
        $q = $this->db->get('gambar');
        return $q->result_array();
    }
    public function get_data_kategori($id)
    {
        $this->db->where('idkategori', $id);
        $q = $this->db->get('gambar');
        return $q->result_array();
    }
}
