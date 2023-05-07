<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories014_model extends CI_Model
{
	public function create()
	{
		$data = [
			'cate_name_014' => $this->input->post('cate_name_014'),
			'description_014' => $this->input->post('description_014'),
		];
		$this->db->insert('categories014', $data);
	}

	public function read()
	{
		$query = $this->db->get('categories014');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('id_categories_014', $id);
		$query = $this->db->get('categories014');
		return $query->row();
	}

	public function update($id)
	{
		$data = [
			'cate_name_014' => $this->input->post('cate_name_014'),
			'description_014' => $this->input->post('description_014'),
		];
		$this->db->where('id_categories_014', $id);
		$this->db->update('categories014', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_categories_014', $id);
		$this->db->delete('categories014');
	}
}
