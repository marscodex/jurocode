<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lsm_model extends CI_Model{

	public function comment($name, $email, $leave_comment)
	{

		$data = array(

			'Name' => $name,
			'Email' => $email,
			'Leave_comment' => $leave_comment
		);

		$this->session->set_userdata('comment', $data);

		if($this->db->insert('comment', $data))
		{
			return true;
		}

	}

	public function get_comment($id){
	
			if($id != FALSE){
			$query = $this->db->get_where('comment', array('id => $id'));
			return $query->row_array();
		}
		else {
			return FALSE;
		}
	}

}