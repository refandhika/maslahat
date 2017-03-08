<?php
require_once(APPPATH.'third_party/ChromePhp.php');
class Model_borrower extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function getAllFormByUser($nama_perusahaan)
    {
    	$condition = "p.nama_perusahaan=" . "'" .  $nama_perusahaan;
    	$this->db->select('form.id_form, p.nama_perusahaan, form.created_at, form.approved');
        $this->db->from('form_permohonan form');
		$this->db->join('id_perusahaan p','form.id_perusahaan=p.id_perusahaan');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getScoreByID($id)
    {
        $this->db->from('score');
        $this->db->where('id_score',$id);
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