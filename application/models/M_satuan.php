<?php
class M_satuan extends CI_Model
{

	public function Getidsatuan($id = '')
	{
		return $this->db->get_where('tb_satuan', array('Id' => $id))->row();
	}
}