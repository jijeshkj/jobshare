<?php

class LoginController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('LoginModel', 'logmodel');
        $this->load->database();
    }
    
    
    public function login(){
        
        $usrname=$this->input->post("username");
        $password=$this->input->post('password');
        $role=  $this->input->post('role');
        $action = $this->logmodel->login($usrname,$password,$role);
        if($action){
            if($role=='admin'){
                $data="admin";
            }else{
                $data="user";
            }
        }else{
            $data="invalid";
        }
        echo json_encode($data);
        
    }
    
    
    
}

