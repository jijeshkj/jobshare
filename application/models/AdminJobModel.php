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
        $this->db->select('jj.id, jj.job_title, jj.company_name,jj.interview_date,jj.discription_image,jj.job_type,jl.location_name,jc.category_name,jq.quals_name');
        $this->db->from('jobshare_jobs jj');
        $this->db->join('jobshare_jobqualification jq', 'jj.quals_id = jq.id');
        $this->db->join('jobshare_jobcategory jc', 'jj.cat_id = jc.id');
        $this->db->join('jobshare_joblocation jl', 'jj.joblloc_id = jl.id');
        $query = $this->db->get();
        return $query->result();
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

    function updateQuals($value, $id) {
        $data = array(
            'quals_name' => $value,
        );
        $this->db->where('id', $id);
        $this->db->update('jobshare_jobqualification', $data);
    }
    
     function deleteQualification($id) {
        
        $this->db->where('id', $id);
        $this->db->delete('jobshare_jobqualification');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */