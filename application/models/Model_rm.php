<?php
require_once(APPPATH.'third_party/ChromePhp.php');
class Model_rm extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function login($data)
    {
    	$condition = "rm_name =" . "'" . $data['username'] . "' AND " . "rm_pass =" .  "'" .  $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('rms');
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
        $condition = "rm_name =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('rms');
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

    public function getAllForm()
    {
        $this->db->from('form_permohonan');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getFormByID($id)
    {
        $this->db->from('form_permohonan');
        $this->db->where('id_form',$id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1){
            return $query->result();
        }
        else {
            return false;
        };
    }

    public function getIsianByID($id)
    {
        $this->db->from('isian_rm');
        $this->db->where('id_isian',$id);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1){
            return $query->result();
        }
        else {
            return false;
        };
    }

    public function insertRMIsian($array,$id)
    {
        $insertdata = array(
            'y3' => $array['y3'],
            'm3' => $array['m3'],
            'k3' => $array['k3'],
            'a2' => $array['a2']
        );
        $this->db->insert('isian_rm', $insertdata);
    }

    public function updateRMIsian($array,$id)
    {
        $insertdata = array(
            'y3' => $array['y3'],
            'm3' => $array['m3'],
            'k3' => $array['k3'],
            'a2' => $array['a2']
        );
        $this->db->set($insertdata);
        $this->db->where('id_isian', $id);
        $this->db->update('isian_rm');
    }

    public function updateIsianID($id){
        $this->db->set('id_isian',$id);
        $this->db->where('id_form', $id);
        $this->db->update('form_permohonan');
    }

}