<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

		public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_kategori');
	}

	public function index()
	{
		$data['kategori'] = $this->db->get('tb_kategori')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('data_kategori/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_data_kategori()
	{
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('data_kategori/tambah_data_kategori',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data_kategori/tambah_data_kategori',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'Kategori' => htmlspecialchars($this->input->post('kategori')),
			];
			$this->db->insert('tb_kategori',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Kategori Anda Sudah Tersimpan!</div>');
			redirect('kategori');
		}
	}

	public function edit_kategori()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['edit_kategori'] = $this->M_kategori->Getidkategori($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('data_kategori/edit_kategori',$data);
		$this->load->view('template/footer');
	}

	public function edit_aksi()
	{
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$id = $this->input->post('id');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data_kategori/edit_kategori',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'Kategori' => htmlspecialchars($this->input->post('kategori')),
			];
			$this->db->update('tb_kategori',$data, array('Id' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Kategori Anda Sudah Terupdate!</div>');
			redirect('kategori');
		}
	}
	


	public function hapus_data_kategori()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_kategori', array('Id'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Telah Dihapus!</div>');
		redirect('kategori');
	}

	/*public function role()
	{
		$data['role'] = $this->db->get('tb_role')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('data_kategori/role',$data);
		$this->load->view('template/footer');
	}*/

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */