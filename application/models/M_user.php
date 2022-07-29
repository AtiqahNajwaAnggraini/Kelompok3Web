<?php
class M_user extends CI_Model
{

	public function Getiduser($id = '')
	{
		return $this->db->get_where('tb_pengguna', array('id_pengguna' => $id))->row();
	}

	public function Getidrole($id = '')
	{
		return $this->db->get_where('tb_role', array('id_role' => $id))->row();
	}
}