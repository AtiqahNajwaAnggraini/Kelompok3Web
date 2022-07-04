<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function CheckingAuth()
	{
		$DataPostForm=[
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		];
		// $this->output->set_content_type('application/json')->set_output(json_encode($DataPostForm));

		$AuthCheckLogin= $this->Login->CheckLoginUser($DataPostForm);

		if($AuthCheckLogin->num_rows()>0){
			// echo "berhasil login";
			redirect('dashboard','refresh');
		}else{
			// echo "gagal login (username dan password tidak valid)";
			redirect('auth','refresh');
		}
	}

}

