<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User014 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username'))
			redirect('Auth014/login');
		if ($this->session->userdata('usertype') != 'Manager')
			redirect('Welcome');
		$this->load->model('User014_model');
		$this->load->model('Auth014_model');

	}

	public function index()
	{

		$data['user'] = $this->User014_model->read();
		$this->load->view('user014/user_list', $data);
	}

	public function add()
	{
		if ($this->input->post('submit')) {
			$this->User014_model->create();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">user Successfuly added !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">user Successfuly failed !<p>'
				);
			}
			redirect('user014');
		}
		$this->load->view('user014/user_form');
	}

	public function edit($id)
	{
		if ($this->input->post('submit')) {
			$this->User014_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">user Successfuly update !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">user Update failed !<p>'
				);
			}
			redirect('user014');
		}

		$data['user'] = $this->User014_model->read_by($id);
		$this->load->view('user014/user_form', $data);
	}

	public function delete($id)
	{
		$this->User014_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:green" class="text-center">user Successfuly delete !<p>'
			);
		} else {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:red" class="text-center">user delete failed !<p>'
			);
		}
		redirect('user014');
	}

	public function resetpass($id, $type)
	{
		$this->User014_model->resetpass($id, $type);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:green" class="text-center">Reset password successfuly  !<p>'
			);
			redirect('user014');
		} else {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:red" class="text-center">Reset password failed !<p>'
			);
		}
		redirect('user014');
	}


}