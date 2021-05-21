<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->authentication->is_loggedin() === false) {
            $data['title'] = 'Masuk | Pejuang Ujian';
            $data['content'] = 'auth/login';

            $this->load->view('layouts/template_auth', $data);
        } else {
            redirect('/');
        }
    }

     public function forgot()
    {
        if ($this->authentication->is_loggedin() === false) {
            $data['title'] = 'Lupa Password | Pejuang Ujian';
            $data['content'] = 'auth/forgot';

            $this->load->view('layouts/template_auth', $data);
        } else {
            redirect('/');
        }
    }

    public function register()
    {
        if ($this->authentication->is_loggedin() === false) {
            $data['title'] = 'Daftar | Pejuang Ujian';
            $data['content'] = 'auth/register';

            $this->load->view('layouts/template_auth', $data);
        } else {
            redirect('/');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        echo json_encode($this->authentication->login($username, $password));
    }

    public function logout()
    {
        $this->authentication->logout();
        redirect('login');
    }
}
