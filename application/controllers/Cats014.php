<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats014 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('Auth014/login');
		}

		$this->load->model('Cats014_model');
		$this->load->model('Categories014_model');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('cats014/index');
		$config['total_rows'] = $this->db->count_all('cats014');
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$limit = $config['per_page'];
		$start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

		$data['i'] = $start + 1;
		$data['cats'] = $this->Cats014_model->read($limit, $start);
		$this->load->view('cats014/cat_list', $data);
	}

	public function add()
	{
		if ($this->input->post('submit')) {
			$this->Cats014_model->create();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">Cat Successfuly added !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">Cat Successfuly failed !<p>'
				);
			}
			redirect('cats014');
		}
		$data['categories'] = $this->Categories014_model->read();
		$this->load->view('cats014/cat_form', $data);
	}

	public function edit($id)
	{
		if ($this->input->post('submit')) {
			$this->Cats014_model->update($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">Cat Successfuly update !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">Cat Update failed !<p>'
				);
			}
			redirect('cats014');
		}
		$data['categories'] = $this->Categories014_model->read();
		$data['cat'] = $this->Cats014_model->read_by($id);
		$this->load->view('cats014/cat_form', $data);
	}

	public function delete($id)
	{
		$this->Cats014_model->delete($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:green" class="text-center">Cat Successfuly delete !<p>'
			);
		} else {
			$this->session->set_flashdata(
				'msg',
				'<p style="color:red" class="text-center">Cat delete failed !<p>'
			);
		}
		redirect('cats014');
	}

	public function sale($id)
	{
		if ($this->input->post('submit')) {
			$this->Cats014_model->sale($id);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:green" class="text-center">Cat Successfuly sold !<p>'
				);
			} else {
				$this->session->set_flashdata(
					'msg',
					'<p style="color:red" class="text-center">Cat sale failed !<p>'
				);
			}
			redirect('cats014');
		}
		$data['cat'] = $this->Cats014_model->read_by($id);
		$this->load->view('cats014/cat_sale', $data);
	}

	public function sales()
	{
		if ($this->session->userdata('usertype') != 'Manager')
			redirect('Welcome');

		$data['sales'] = $this->Cats014_model->sales();
		$this->load->view('cats014/sale_list', $data);
	}
}