<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_user');
	}

	public function index()
	{
		$data['pengguna'] = $this->db->get('tb_pengguna')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_user()
	{
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('user/tambah_user',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('user/tambah_user',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username')),
				'password' => md5($this->input->post('password')),
				'level' => 2,
			];
			$this->db->insert('tb_pengguna',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Pengguna Anda Sudah Tersimpan!</div>');
			redirect('user');
		}
	}

	public function hapususer()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_pengguna', array('id_pengguna'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Telah Dihapus!</div>');
		redirect('user');
	}

	public function edit_user()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['edituser'] = $this->M_user->Getiduser($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('user/edit_user',$data);
		$this->load->view('template/footer');
	}

	public function edit_aksi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$id = $this->input->post('id');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('user/edit_user',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username')),
				'password' => md5($this->input->post('password')),
				'level' => 2,
			];
			$this->db->update('tb_pengguna',$data, array('id_pengguna' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Pengguna Anda Sudah Terupdate!</div>');
			redirect('user');
		}
	}
	
	public function role()
	{
		$data['role'] = $this->db->get('tb_role')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/role',$data);
		$this->load->view('template/footer');
	}

	public function tambah_role()
	{
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('user/tambah_role',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi_role()
	{
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('user/tambah_role',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama_role' => htmlspecialchars($this->input->post('role')),
			];
			$this->db->insert('tb_role',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Role Anda Sudah Tersimpan!</div>');
			redirect('user/role');
		}
	}

	public function edit_role()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['editrole'] = $this->M_user->Getidrole($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('user/edit_role',$data);
		$this->load->view('template/footer');
	}

	public function edit_aksi_role()
	{
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$id = $this->input->post('id');
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['editrole'] = $this->M_user->Getidrole($id);
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('user/edit_role',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama_role' => htmlspecialchars($this->input->post('role')),
			];
			$this->db->update('tb_role',$data, array('id_role' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Role Anda Sudah Terupdate!</div>');
			redirect('user/role');
		}
	}

	public function hapusrole()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_role', array('id_role'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Role Telah Dihapus!</div>');
		redirect('user/role');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */