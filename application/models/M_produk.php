<?php
class M_produk extends CI_Model
{
	public function show_produk()
    {
        $sql = "SELECT * FROM tb_produk as a INNER JOIN tb_satuan as b ON a.satuan=b.Id INNER JOIN tb_kategori as c on a.kategori = c.Id;";
        return $this->db->query($sql);
    }

    function Getidproduk($id = '')
    {
        return $this->db->get_where('tb_produk', array('id' => $id))->row();
    }

}