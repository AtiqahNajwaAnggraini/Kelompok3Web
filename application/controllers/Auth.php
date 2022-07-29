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
			'password' =>md5($this->input->post('password'))
		];

		$AuthCheckLogin= $this->Login->CheckLoginUser($DataPostForm);

		if ($AuthCheckLogin->num_rows()>0) {
			$user = $AuthCheckLogin->row();
			$data = [
						'username' =>$user->username,
						'level' =>$user->level,
						'status' => 'login'
					];
					$this->session->set_userdata($data);
			if ($user->level == 1) {
			redirect('dashboard','refresh');
			}else{
				redirect('kasir','refresh');
			}
		}else{
			redirect('auth','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Anda Sudah Logout</div>');
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */