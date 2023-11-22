<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth014 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Auth014_model');
	}
	public function login()
	{
		if ($this->input->post('login') && $this->Validation('login')) {
			$login = $this->Auth014_model->getuser($this->input->post('username'));
			if ($login != NULL) {
				if (password_verify($this->input->post('password'), $login->password_014)) {
					$data = array(
						'username' => $login->username_014,
						'usertype' => $login->usertype_014,
						'fullname' => $login->fullname_014,
						'photo' => $login->photo_014
					);
					$this->session->set_userdata($data);
					redirect('Welcome');
				}

			}
			$this->session->set_flashdata('msg', '<p style="color:red" class="text-center">invalid username or password !<p>');
		}
		$this->load->view('auth014/form_login_014');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth014/login');
	}

	public function changepass()
	{
		if (!$this->session->userdata('username'))
			redirect('Auth014/login');
		if ($this->input->post('change') && $this->Validation('change')) {
			$change = $this->Auth014_model->getuser($this->session->userdata('username'));
			if (password_verify($this->input->post('oldpassword'), $change->password_014)) {
				if ($this->Auth014_model->changepass())
					$this->session->set_flashdata('msg', '<p style="color:green" class="text-center">Password succesfuly changed !<p>');
				else
					$this->session->set_flashdata('msg', '<p style="color:red" class="text-center">Change password failed !<p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red" class="text-center">Wrong old password !<p>');
			}

		}
		$this->load->view('auth014/form_password_014');
	}

	public function changephoto()
	{
		if (!$this->session->userdata('username'))
			redirect('auth014/login');
		$data['error'] = '';
		if ($this->input->post('upload')) {
			if ($this->upload()) {
				$this->Auth014_model->changephoto($this->upload->data('file_name'));
				$this->session->userdata('photo', $this->upload->data('file_name'));
				$this->session->set_flashdata('msg', '<p style="color:green"> photo succesfully change ! </p>');
			} else
				$data['error'] = $this->upload->display_errors();
		}
		$this->load->view('auth014/form_photo_014', $data);
	}


	private function upload()
	{
		$config['upload_path'] = './upload/users/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$this->load->library('upload', $config);
		return $this->upload->do_upload('photo');
	}


	public function Validation($type)
	{
		$this->load->library('form_validation');

		if ($type == 'login') {
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
		} else {
			$this->form_validation->set_rules('oldpassword', 'Old username', 'trim|required');
			$this->form_validation->set_rules('newpassword', 'New password', 'trim|required');
		}


		if ($this->form_validation->run())
			return TRUE;
		else
			return FALSE;

	}
}