<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

		public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_satuan');
	}

	public function index()
	{
		$data['satuan'] = $this->db->get('tb_satuan')->result(); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('data_satuan/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_data_satuan()
	{
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('data_satuan/tambah_data_satuan',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data_satuan/tambah_data_satuan',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'Satuan' => htmlspecialchars($this->input->post('satuan')),
			];
			$this->db->insert('tb_satuan',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Satuan Anda Sudah Tersimpan!</div>');
			redirect('satuan');
		}
	}

	public function edit_satuan()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->db->get_where('tb_pengguna',['username' => $this->session->userdata('username')])->row_array();
		$data['edit_satuan'] = $this->M_satuan->Getidsatuan($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('data_satuan/edit_satuan',$data);
		$this->load->view('template/footer');
	}

	public function edit_aksi()
	{
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');
		$id = $this->input->post('id');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar');
			$this->load->view('data_satuan/edit_satuan',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'Satuan' => htmlspecialchars($this->input->post('satuan')),
			];
			$this->db->update('tb_satuan',$data, array('Id' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Satuan Anda Sudah Terupdate!</div>');
			redirect('satuan');
		}
	}
	


	public function hapus_data_satuan()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_satuan', array('Id'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Satuan Telah Dihapus!</div>');
		redirect('satuan');
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