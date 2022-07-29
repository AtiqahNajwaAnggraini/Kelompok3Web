<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_masuk extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_stokmasuk');
	}

	public function index()
	{
		$data['stokmasuk'] = $this->M_stokmasuk->show_stokmasuk()->result(); 
		$data['produk'] = $this->db->get('tb_produk')->result();
		$data['supplier'] = $this->db->get('tb_supplier')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('stok_masuk/index',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$id = $this->input->post('barcode');
		$jumlah = $this->input->post('jumlah');
		$stok = $this->M_stokmasuk->getStok($id)->stok;
		$rumus = max($stok + $jumlah,0);
		$addStok = $this->M_stokmasuk->addStok($id, $rumus);
		if ($addStok) {
			$tanggal = new DateTime($this->input->post('tanggal'));
			$data = [
				'tanggal' => $tanggal->format('Y-m-d H:i:s'),
				'barcode' => $id,
				'jumlah' => $jumlah,
				'keterangan' => $this->input->post('keterangan'),
				'supplier' => $this->input->post('supplier'),
			];
			$this->db->insert('tb_stok_masuk',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Stok Masuk Anda Sudah Tersimpan!</div>');
			redirect('stok_masuk');
		} else {
			
			
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */