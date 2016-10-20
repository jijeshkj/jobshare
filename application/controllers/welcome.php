<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('AdminJobModel', 'model');
        $this->load->database();
    }

    public function admin() {
        //$this->load->view('NiceAdmin/header');
        $this->load->view('NiceAdmin/login');
        //$this->load->view('NiceAdmin/footer');
    }

    public function index() {
        $this->load->view('jobshare/header');
        $data['category'] = $this->model->getCategory();
        $this->load->view('jobshare/index',$data);
        //$this->load->view('NiceAdmin/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */