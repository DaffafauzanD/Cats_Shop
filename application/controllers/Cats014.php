<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats014 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cats014_model');
    }

    public function index()
    {
        $data['cats'] = $this->Cats014_model->read();
        $this->load->view('cats014/cat_list', $data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->Cats014_model->create();
            redirect('cats014');
        }

        $this->load->view('cats014/cat_form');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->Cats014_model->update($id);
            redirect('cats014');
        }
        $data['cat'] = $this->Cats014_model->read_by($id);
        $this->load->view('cats014/cat_form', $data);
    }

    public function delete($id)
    {
        $this->Cats014_model->delete($id);
        redirect('cats014');
    }
}
