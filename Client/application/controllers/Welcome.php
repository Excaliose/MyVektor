<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('content', 'ct');
		
	}
	
	public function index()
	{
		$data['list'] = $this->ct->get_data();
		$data['page'] = "layout/content";
		$this->load->view('layout/base', $data);
	}

	public function detail($id)
	{
		$data['list'] = $this->ct->get_data_id($id);
		$data['page'] = "layout/detail";
		$this->load->view('layout/base', $data);
	}

	public function download($id)
	{
		$this->load->helper('download');
		force_download('assets/gambar/'.$id, NULL);
	}
}
