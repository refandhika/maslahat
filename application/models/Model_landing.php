<?php
require_once(APPPATH.'third_party/ChromePhp.php');
class Model_landing extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function login($data)
    {
    	$condition = "borrowers_name =" . "'" . $data['username'] . "' AND " . "borrowers_pass =" .  "'" .  $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('borrowers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1){
            return true;
        }
        else {
            return false;
        };
    }

    public function getUserData($username)
    {
        $condition = "borrowers_name =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('borrowers');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1){
            return $query->result();
        }
        else {
            return false;
        }; 
    }
}