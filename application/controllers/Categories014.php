<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories014 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username'))
			redirect('Auth014/login');
		$this->load->model('Categories014_model');
	}

	public function index()
	{
		$data['categories'] = $this->Categories014_model->read();
		$this->load->view('categories014/categories_list_014', $data);
	}

	public function add()
	{
		if ($this->input->post('submit')) {
			$this->Categories014_model->create();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">Categories Successfuly added !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">Categories Successfuly failed !<p>'
				);
			}
			redirect('categories014');
		}

		$this->load->view('categories014/categories_form');
	}

	public function edit($id)
	{
		if ($this->input->post('submit')) {
			$this->Categories014_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">Categories Successfuly update !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">Categories Update failed !<p>'
				);
			}
			redirect('categories014');
		}
		$data['categories'] = $this->Categories014_model->read_by($id);
		$this->load->view('categories014/categories_form.php', $data);
	}

	public function delete($id)
	{
		$this->Categories014_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:green" class="text-center">Categories Successfuly delete !<p>'
			);
		} else {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:red" class="text-center">Categories delete failed !<p>'
			);
		}
		redirect('categories014');
	}
}