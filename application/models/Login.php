<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
	public function CheckLoginUser($data)
	{
		return $this->db->get_where('tb_pengguna',$data,1);
	}
}