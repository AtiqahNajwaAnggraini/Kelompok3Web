<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	private $table = 'tb_transaksi';

	public function show_transaksi()
    {
        $sql = "SELECT * FROM tb_transaksi as a JOIN tb_produk as b ON a.barcode=b.id;";
        return $this->db->query($sql);
    }

	public function removeStok($id, $stok)
	{
		$this->db->where('id', $id);
		$this->db->set('stok', $stok);
		return $this->db->update('tb_produk');
	}

	public function addTerjual($id, $jumlah)
	{
		$this->db->where('id', $id);
		$this->db->set('terjual', $jumlah);
		return $this->db->update('tb_produk');;
	}

	public function getNama($id)
	{
		$this->db->select('nama_produk, stok');
		$this->db->where('id', $id);
		return $this->db->get('tb_produk')->row();
	}

	public function getBarcode($search='')
	{
		$this->db->select('id, barcode');
		$this->db->like('barcode', $search);
		return $this->db->get('tb_produk')->result();
	}

	public function getStok($id)
	{
		$this->db->select('stok, nama_produk, harga, barcode');
		$this->db->where('id', $id);
		return $this->db->get('tb_produk')->row();
	}

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

		public function getAll($id)
	{
		$this->db->select('tb_transaksi.nota, tb_transaksi.tanggal, tb_transaksi.barcode, tb_transaksi.qty, tb_transaksi.total_bayar, tb_transaksi.jumlah_uang, tb_pengguna.username as kasir');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_pengguna', 'tb_transaksi.kasir = tb_pengguna.id_pengguna');
		$this->db->where('tb_transaksi.id', $id);
		return $this->db->get()->row();
	}

	public function getName($barcode)
	{
		foreach ($barcode as $b) {
			$this->db->select('nama_produk, harga');
			$this->db->where('id', $b);
			$data[] = $this->db->get('tb_produk')->row();
		}
		return $data;
	}

}