<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		if (!isset($_SESSION['username'])) {
			$url=base_url('auth');
			redirect($url);
		}
		$this->load->model('M_transaksi');
	}

	public function index()
	{
		$data['produk'] = $this->db->get('tb_produk')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('transaksi/index',$data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$produk = json_decode($this->input->post('produk'));
		$tanggal = new DateTime($this->input->post('tanggal'));
		$barcode = array();
		foreach ($produk as $produk) {
			$this->M_transaksi->removeStok($produk->id, $produk->stok);
			$this->M_transaksi->addTerjual($produk->id, $produk->terjual);
			array_push($barcode, $produk->id);
		}
		$data = array(
			'tanggal' => $tanggal->format('Y-m-d H:i:s'),
			'barcode' => implode(',', $barcode),
			'qty' => implode(',', $this->input->post('qty')),
			'total_bayar' => $this->input->post('total_bayar'),
			'jumlah_uang' => $this->input->post('jumlah_uang'),
			'nota' => $this->input->post('nota'),
			'kasir' => '1'
		);
		if ($this->M_transaksi->create($data)) {
			echo json_encode($this->db->insert_id());
		}
		$data = $this->input->post('form');
	}

	public function cetak($id)
	{
		$produk = $this->M_transaksi->getAll($id);
		$tanggal = new DateTime($produk->tanggal);
		$barcode = explode(',', $produk->barcode);
		$qty = explode(',', $produk->qty);

		$produk->tanggal = $tanggal->format('d m Y H:i:s');

		$dataProduk = $this->M_transaksi->getName($barcode);
		foreach ($dataProduk as $key => $value) {
			$value->total = $qty[$key];
			$value->harga = $value->harga * $qty[$key];
		}

		$data = array(
			'nota' => $produk->nota,
			'tanggal' => $produk->tanggal,
			'produk' => $dataProduk,
			'total' => $produk->total_bayar,
			'bayar' => $produk->jumlah_uang,
			'kembalian' => $produk->jumlah_uang - $produk->total_bayar,
			'kasir' => $produk->kasir
		);
		$this->load->view('transaksi/cetak', $data);
	}

	public function get_nama()
	{
		$id = $this->input->post('id');
		echo json_encode($this->M_transaksi->getNama($id));
	}

	public function get_barcode()
	{
		$barcode = $this->input->post('barcode');
		$search = $this->M_transaksi->getBarcode($barcode);
		foreach ($search as $barcode) {
			$data[] = array(
				'id' => $barcode->id,
				'text' => $barcode->barcode
			);
		}
		echo json_encode($data);
	}

	public function get_stok()
	{
		header('Content-type: application/json');
		$id = $this->input->post('id');
		echo json_encode($this->M_transaksi->getStok($id));
	}

	public function laporan()
	{
		$data['laporan'] = $this->M_transaksi->show_transaksi()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('transaksi/laporan',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */