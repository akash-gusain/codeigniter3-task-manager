<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Task_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);

        // Auth protection
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');

        $data['tasks'] = $this->Task_model->get_all_tasks($user_id);

        $this->load->view('task/index', $data);
    }

    public function add()
    {
        if ($this->input->post()) {

            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title', TRUE),
                'description' => $this->input->post('description', TRUE),
            ];

            $this->Task_model->add_task($data);

            redirect('task');
        }

        $this->load->view('task/add');
    }

    public function edit($id)
{
    $user_id = $this->session->userdata('user_id');

    $data['task'] = $this->Task_model->get_task_by_id($id, $user_id);

    if (!$data['task']) {
        show_404();
    }

    $this->load->view('task/edit', $data);
}

public function update($id)
{
    $user_id = $this->session->userdata('user_id');

    if ($this->input->post()) {

        $data = [
            'title' => $this->input->post('title', TRUE),
            'description' => $this->input->post('description', TRUE)
        ];

        $this->Task_model->update_task($id, $user_id, $data);

        redirect('task');
    }
}

public function delete($id)
{
    $user_id = $this->session->userdata('user_id');

    $this->Task_model->delete_task($id, $user_id);

    redirect('task');
}

}
