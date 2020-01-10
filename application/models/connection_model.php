<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class connection_model extends CI_Model
{
	public function check_id($mail, $pass)
	{
		$this->db->where('Mail_User', $mail);
		$this->db->where('Password_User', sha1($pass));
		$q = $this->db->get('user');
		if ($q->num_rows() > 0) {
			$this->db->where('Mail_User', $mail);

			return $this->getId($mail);
		} else {
			return 0;
		}
	}

	public function getId($mail)
	{
		$this->db->select('Id_User');
		$this->db->where('Mail_User', $mail);
		$query = $this->db->get('user');
		$data  = $query->first_row();

		return $data->id;
	}

	public function getData($mail)
	{
		$this->db->where('Mail_User', $mail);
		$query = $this->db->get('user');
		$data  = $query->first_row();

		return $data;
	}

	public function getAdresse($id)
	{
		$this->db->where('Id_User', $id);
		$query = $this->db->get('adresse');
		$data  = $query->first_row();

		return $data;
	}

	function modifyPers($id, $data, $add)
	{
		//$this->db->update_string('membres', $data, $id);
		/*$this->db->where('username', $id);
		$this->db->update('membres', $data); */
		$this->db->set($data);
		$this->db->where('username', $id);
		$this->db->update('user');

		$this->db->set($add);
		$this->db->where('membre_id', $this->getId($id));
		$this->db->update('adresse');
	}

	function modifyCte($id, $data)
	{
		//$this->db->update_string('membres', $data, $id);
		/*$this->db->where('username', $id);
		$this->db->update('membres', $data); */
		$this->db->set($data);
		$this->db->where('username', $id);
		$this->db->update('user');
	}
}
