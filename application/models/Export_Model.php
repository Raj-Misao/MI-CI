<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_Model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
  
    public function getfeedback()
    {
        $this->db->select('name,email,feedback');
        return $this->db->get('feedback')->result();
        //return $this->db->get($table)->row_array();;   
    }
    public function insert($data)
    {
       
        return $this->db->insert_batch('feedback',$data);
        //return $this->db->get($table)->row_array();;   
    }
   
}
?>