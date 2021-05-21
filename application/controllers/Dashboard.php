<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Dashboard_model', 'model');
        $this->load->helper(array('url', 'file'));

        // if ($this->authentication->is_loggedin() === false) redirect('logout');
    }

    public function index(){
        $data['title'] = 'Wana Kerthi | Lomba Website Aksara Bali';
        $data['content'] = 'home';
        $this->load->view('layouts/template', $data);
    }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
