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
		// $data['page'] = "layout/content";
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

	public function login()
	{
		$this->load->view('layout/login');
	}

	public function proses_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$login = $this->ct->login($email, $password);
		if($login){
			$sess = array(
				'iduser'=>$login->iduser,
				'nama' => $login->username,
				'email' => $login->email,
				'level' => $login->level,
			);
			$this->session->set_userdata($sess);
			redirect('');
		}
		else{
			redirect('welcome/login');
		}
	}
	public function proses_register()
	{
		$post=$this->input->post();
		$this->ct->register($post);
		redirect('welcome/login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
