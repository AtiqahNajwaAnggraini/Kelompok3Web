<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['produk'] = $this->db->query('SELECT COUNT(*) as jumlah FROM tb_produk')->row_array();
		$data['stokmasuk'] = $this->db->query('SELECT COUNT(*) as jumlah FROM tb_stok_masuk')->row_array();
		$data['stokkeluar'] = $this->db->query('SELECT COUNT(*) as jumlah FROM tb_stok_keluar')->row_array();
		$data['transaksi'] = $this->db->query('SELECT COUNT(*) as jumlah FROM tb_transaksi')->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */