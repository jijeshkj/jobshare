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
        $data = $this->model->getCategory();
        foreach ($data as $value) {
            $pass[] = array('id' => $value->id, 'name' => $value->category_name);
        }
        $locations = $this->model->viewLocation();
        foreach ($locations as $values) {
            $passloc[] = array('id' => $values->id, 'name' => $values->location_name);
        }
        $jobtitles = $this->model->jobtitles();
        foreach ($jobtitles as $records) {
            $jobsdata[] = array('title' => $records->job_title, 'company' => $records->company_name);
        }
        $this->load->view('jobshare/index', array('value' => $pass, 'location' => $passloc,'jobs'=>$jobsdata));

        //$this->load->view('NiceAdmin/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */