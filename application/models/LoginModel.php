<?php

class LoginModel extends CI_Model {

    public function login($usrname, $password, $role) {
        $this->db->where('username', $usrname);
        $this->db->where('password', $password);
        $this->db->where('role', $role);
        $query = $this->db->get('jobshare_users');
        if ($query->num_rows() > 0) {
            $data = "Already Exist";
            return $data;
        } else {
            $data = "";
            return $data;
        }
    }

}
