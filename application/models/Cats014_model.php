<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats014_model extends CI_Model
{
	public function create()
	{
		$data = [
			'name_014' => $this->input->post('name_014'),
			'type_014' => $this->input->post('type_014'),
			'gender_014' => $this->input->post('gender_014'),
			'age_014' => $this->input->post('age_014'),
			'price_014' => $this->input->post('price_014'),
		];
		$this->db->insert('cats014', $data);
	}

	public function read($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get('cats014');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('id_014', $id);
		$query = $this->db->get('cats014');
		return $query->row();
	}

	public function update($id)
	{
		$data = [
			'name_014' => $this->input->post('name_014'),
			'type_014' => $this->input->post('type_014'),
			'gender_014' => $this->input->post('gender_014'),
			'age_014' => $this->input->post('age_014'),
			'price_014' => $this->input->post('price_014'),
		];
		$this->db->where('id_014', $id);
		$this->db->update('cats014', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_014', $id);
		$this->db->delete('cats014');
	}

	public function sale($id)
	{
		$data = [
			'customer_name_014' => $this->input->post('customer_name_014'),
			'customer_address_014' => $this->input->post('customer_address_014'),
			'customer_phone_014' => $this->input->post('customer_phone_014'),
			'cat_id_014' => $id
		];
		$this->db->insert('catsale014', $data);
		$sold = NULL;
		$this->db->set('sold_014', '1');
		$this->db->where('id_014', $id);
		$this->db->update('cats014', $sold);
	}

	public function sales()
	{
		$query = $this->db->get('catsale014');
		return $query->result();
	}
}