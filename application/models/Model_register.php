<?php
require_once(APPPATH.'third_party/ChromePhp.php');
class model_register extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function set_borrower()
    {
    	$data = array (
    		'borrowers_name' => $this->input->post('name'),
    		'borrowers_pass' => md5($this->input->post('password')),
            'borrowers_mail' => $this->input->post('email')
    	);

    	return $this->db->insert('borrowers', $data);
    }
}
