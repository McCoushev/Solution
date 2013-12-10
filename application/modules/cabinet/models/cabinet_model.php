<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cabinet_model extends CI_Model {
    
    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function getInvoise($id) {
        $this->db->select('*')
                //->select_sum('amount','total')
                ->from('user_payments')
                ->where('user_id',$id);
        
        return $this->db->get();
    }
    
    public function getTotalInvoise($id) {
        $this->db
                ->select_sum('amount','total')
                ->from('user_payments')
                ->where('user_id',$id);
        $res = $this->db->get()->result_array();
    return $res[0]['total'];
    }
    
    
     public function getUserList() {
        $this->db->select('*')
                //->select_sum('amount','total')
                ->from('user_payments')
                ->where('user_id',$id);
        
        return $this->db->get();
    }
}
