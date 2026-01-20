<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    // Login
    public function login() {

        if ($this->input->post()) {

            $email    = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $user = $this->User_model->login($email, $password);

            if ($user) {

                // regenerate session (best practice)
                $this->session->sess_regenerate(TRUE);
                $this->session->set_userdata('user_id', $user->id);

                redirect('task');

            } else {
                $data['error'] = "Invalid Email or Password";
            }
        }

        $this->load->view('auth/login', @$data);
    }

    // Register
    public function register() {

        if ($this->input->post()) {

            $data = [
                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            ];

            if ($this->User_model->email_exists($data['email'])) {
                $data['error'] = "Email already registered!";
            } else {
                $this->User_model->register($data);

                $this->session->set_flashdata(
                'success',
                'Account created successfully. Please login.'
            );
                redirect('auth/login');
            }
        }

        $this->load->view('auth/register', @$data);
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
