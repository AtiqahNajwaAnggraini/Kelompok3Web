<?php
class M_kategori extends CI_Model
{

	public function Getidkategori($id = '')
	{
		return $this->db->get_where('tb_kategori', array('Id' => $id))->row();
	}
}