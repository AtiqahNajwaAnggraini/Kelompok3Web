<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

		public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_supplier');
	}

	public function index()
	{
		$data['supplier'] = $this->db->get('tb_supplier')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('supplier/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_supplier()
	{
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('supplier/tambah_supplier',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('supplier', 'Supplier', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('supplier/tambah_supplier',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('supplier')),
			];
			$this->db->insert('tb_supplier',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Supplier Anda Sudah Tersimpan!</div>');
			redirect('supplier');
		}
	}

	public function edit_supplier()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['edit_supplier'] = $this->M_supplier->Getidsupplier($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('supplier/edit_supplier',$data);
		$this->load->view('template/footer');
	}

	public function edit_aksi()
	{
		$this->form_validation->set_rules('supplier', 'Supplier', 'required|trim');
		$id = $this->input->post('id');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('supplier/edit_supplier',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('supplier')),
			];
			$this->db->update('tb_supplier',$data, array('id' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Supplier Anda Sudah Terupdate!</div>');
			redirect('supplier');
		}
	}
	

	public function hapus_supplier()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_supplier', array('id'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Supplier Telah Dihapus!</div>');
		redirect('supplier');
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