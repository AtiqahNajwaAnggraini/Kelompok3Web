<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_produk');
	}

	public function index()
	{
		$data['produk'] = $this->M_produk->show_produk()->result();
		$data['satuan'] = $this->db->get('tb_satuan')->result(); 
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('produk/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('barcode', 'Barcode', 'required|trim');
		$this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required|trim');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');
		$this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('tb_produk')->result();
			$data['satuan'] = $this->db->get('tb_satuan')->result(); 
			$data['kategori'] = $this->db->get('tb_kategori')->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('produk/index',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'barcode' => $this->input->post('barcode'),
				'nama_produk' => $this->input->post('nama_produk'),
				'satuan' => $this->input->post('satuan'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok')
			];
			$this->db->insert('tb_produk',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Anda Sudah Tersimpan!</div>');
			redirect('produk');
		}
	}

	public function edit_aksi()
	{
		$this->form_validation->set_rules('barcode', 'Barcode', 'required|trim');
		$this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required|trim');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required|trim');
		$this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		$id = $this->input->post('id');
		// $data['user'] = $this->db->get_where('tb_pengguna',['email' => $this->session->userdata('email')])->row_array();
		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->db->get('tb_produk')->result();
			$data['satuan'] = $this->db->get('tb_satuan')->result(); 
			$data['kategori'] = $this->db->get('tb_kategori')->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('produk/index',$data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'barcode' => $this->input->post('barcode'),
				'nama_produk' => $this->input->post('nama_produk'),
				'satuan' => $this->input->post('satuan'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok')
			];
			$this->db->update('tb_produk',$data, array('id' => $id));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Anda Sudah Terupdate!</div>');
			redirect('produk');
		}
	}

	public function hapus_data_produk()
	{
		$id = $this->input->post('id');
		$this->db->delete('tb_produk', array('id'=>$id));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Telah Dihapus!</div>');
		redirect('produk');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */