<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stokkeluar extends CI_Model {

	public function show_stokkeluar()
    {
        $sql = "SELECT * FROM tb_stok_keluar as a JOIN tb_produk as b ON a.barcode=b.id";
        return $this->db->query($sql);
    }

	public function getStok($id)
	{
		$this->db->select('stok');
		$this->db->where('id', $id);
		return $this->db->get('tb_produk')->row();
	}

	public function addStok($id,$stok)
	{
		$this->db->where('id', $id);
		$this->db->set('stok', $stok);
		return $this->db->update('tb_produk');
	}

}