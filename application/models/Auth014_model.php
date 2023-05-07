<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth014_model extends CI_Model
{
	public function getuser($username)
	{
		$this->db->where('username_014', $username);
		return $this->db->get('user014')->row();
	}

	public function changepass()
	{
		$this->db->set('password_014', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
		$this->db->where('username_014', $this->session->userdata('username'));
		return $this->db->update('user014');
	}

	public function changephoto($photo)
	{
		if ($this->session->userdata('photo') !== 'default.png')
			unlink('./upload/users/' . $this->session->userdata('photo'));

		$this->db->set('photo_014', $photo);
		$this->db->where('username_014', $this->session->userdata('username'));
		return $this->db->update('user014');
	}



}