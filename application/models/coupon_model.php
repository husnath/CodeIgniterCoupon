<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coupon_model extends CI_Model{

    public function construct(){

        parent::__construct();
            $this->load->database;
            $this->load->library('session');
    }

    // public function get_all_register_detail(){

    // }

    public function insert($insert){
        if($this->db->insert('coupon',$insert)){
            return true;
        }
        else{
            return false;
        }
    }


    
    public function get_id_wise_register_details($table,$id1,$id2){
    
        $this->db->select('*');
    
        $this->db->from($table);

        $this->db->where($id1,$id2);
    
        $objQuery = $this->db->get();
    
        return $objQuery->result_array();
        
    
    }

}
?>