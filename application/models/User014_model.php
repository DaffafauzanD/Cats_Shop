<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User014_model extends CI_Model
{
	public function create()
	{
		$data = array(
			'username_014' => $this->input->post('username_014'),
			'usertype_014' => $this->input->post('usertype_014'),
			'fullname_014' => $this->input->post('fullname_014'),
			'password_014' => password_hash($this->input->post('usertype_014'), PASSWORD_DEFAULT)
		);
		$this->db->insert('user014', $data);
	}
	public function read()
	{
		$query = $this->db->get('user014');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('userid_014', $id);
		$query = $this->db->get('user014');
		return $query->row();
	}
	public function update($id)
	{
		$data = [
			'username_014' => $this->input->post('username_014'),
			'usertype_014' => $this->input->post('usertype_014'),
			'fullname_014' => $this->input->post('fullname_014'),
		];
		$this->db->where('userid_014', $id);
		$this->db->update('user014', $data);
	}
	public function delete($id)
	{
		$this->db->where('userid_014', $id);
		$this->db->delete('user014');
	}


	public function resetpass($id, $type)
	{
		$this->db->set('password_014', password_hash($type, PASSWORD_DEFAULT));
		$this->db->where('userid_014', $id);
		return $this->db->update('user014');
	}
}