<?php
class Login_Model extends CI_Model
{


	function loginChkFn($userEmail, $userPassword)
	{

		$this->db->where('userEmail', $userEmail);
		$this->db->where('userPassword', $userPassword);
		$this->db->where('userIsActive', 1);
		$query = $this->db->get('usermaster');

		// $query = $this->db->query("select * from usermaster");
		if ($query->num_rows() > 0) {
		//	echo "if";
			return true;
		} else {
		//	echo "else";
			return false;
		}
		// return $query->result();
	}

	public function getDataByID($userID)
	{
		$this->db->where('userID', $userID);
		$query = $this->db->get('usermaster');
		return $query->row();
	}
}
