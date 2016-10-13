<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('AdminJobModel', 'model');
        $this->load->database();
    }

    public function CreateJobCategory() {
        $this->load->view('NiceAdmin/header');
        $this->load->view('NiceAdmin/createJobCategory');
        //$this->load->view('NiceAdmin/footer');
    }

    public function ListJobCategory() {
        $this->load->view('NiceAdmin/header');
        $this->load->view('NiceAdmin/listJobCategory');
        //$this->load->view('NiceAdmin/footer');
    }

    public function postNewJobs() {
        $this->load->view("NiceAdmin/header");
        $data['category'] = $this->model->getCategory();
        $data['locations'] = $this->model->viewLocation();
        $data['qualifications'] = $this->model->viewQualification();
        $this->load->view('NiceAdmin/AddNewJobs', $data);
    }

    public function listLocation() {
        $this->load->view("NiceAdmin/header");
        $data['locations'] = $this->model->viewLocation();
        $data['qualifications'] = $this->model->viewQualification();
        $this->load->view('NiceAdmin/locationandquals', $data);
    }

    public function saveCategory() {
        $var = $this->input->post('category');
        $this->model->saveCategory($var);
    }

    public function saveQuals() {
        $qualification = $this->input->post('qualification');
        $qual = strtolower($qualification);
        $checkAlreadyExist = $this->qualificationExist($qual);
        if ($checkAlreadyExist) {
            $data="Already Exist";
        } else {
           $save=$this->model->saveQuals($qual);
              $data="Successfully Added";  
        }
       echo json_encode($data);
    }

    public function qualificationExist($qual) {

        $data = $this->model->checkQualification($qual);
        return $data;
    }

    public function saveLocation() {
        $var = $this->input->post('location');

        $this->model->saveLocation($var);
    }

    public function delteData() {
        $this->load->model();
    }

    public function SaveJobs() {
        $this->load->formValidation();
    }

    public function SaveJob() {
        $data = $this->get_data_from_post();
        $this->model->saveJob($data);
    }

    function get_data_from_post() {

        $data['job_title'] = $this->input->post('jobtitle', TRUE);
        $data['company_name'] = $this->input->post('companyname', TRUE);
        $data['quals_id'] = $this->input->post('qualification', TRUE);
        $data['joblloc_id'] = $this->input->post('location', TRUE);
        $data['cat_id'] = $this->input->post('category', TRUE);
        $data['interview_date'] = $this->input->post('interviewDate', TRUE);
        $theme2 = $_FILES['discriptionImage']['name'];
        $theme22 = $_FILES['discriptionImage']['tmp_name'];
        $a = explode(".", $theme2);
        $x = rand();
        $image = $x . "." . end($a);
        move_uploaded_file($theme22, $_SERVER['DOCUMENT_ROOT'] . "/jobsharenew/uploads/" . $image);
        $data['discription_image'] = $image;
        $data['exp_year'] = $this->input->post('expYear', TRUE);
        $data['exp_month'] = $this->input->post('expMonth', TRUE);
        $data['job_type'] = $this->input->post('jobtype', TRUE);
        return $data;
    }

    public function listJobs() {
        $this->load->view("NiceAdmin/header");
        $data['data'] = $this->model->viewjob();
        $this->load->view('NiceAdmin/ListJobs', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */