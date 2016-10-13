<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminJobModel extends CI_Model {

    function saveCategory($value) {

        $data = array(
            'category_name' => $value,
        );
        $this->db->insert('jobshare_jobcategory', $data);
    }

    function saveQuals($value) {
        $data = array(
            'quals_name' => $value,
        );
        $this->db->insert('jobshare_jobqualification', $data);
    }

    function saveLocation($value) {

        $data = array(
            'location_name' => $value,
        );
        $this->db->insert('jobshare_joblocation', $data);
    }

    function viewLocation() {
        return $this->db->get('jobshare_joblocation')->result();
    }

    function viewQualification() {
        return $this->db->get('jobshare_jobqualification')->result();
    }

    function getCategory() {
        return $this->db->get('jobshare_jobcategory')->result();
    }

    function saveJob($data) {

        $this->db->insert('jobshare_jobs', $data);
    }

    function viewjob() {
        return $this->db->get('jobshare_jobs')->result();
    }

    function checkQualification($qual) {
        $this->db->where('quals_name', $qual);
        $query = $this->db->get('jobshare_jobqualification');
        if ($query->num_rows() > 0) {
            $data = "Already Exist";
            return $data;
        } else {
            $data = "";
            return $data;
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */