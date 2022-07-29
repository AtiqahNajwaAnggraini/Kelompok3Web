<?php
class M_supplier extends CI_Model
{

	public function Getidsupplier($id = '')
	{
		return $this->db->get_where('tb_supplier', array('id' => $id))->row();
	}
}