<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curd_Model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function getAll($table)
    {
        return $this->db->get($table)->result_array();
        //return $this->db->get($table)->row_array();;   
    }
    public function postAjaxData($table)
    {
       $data =  $this->db->get($table)->result_array();
       $result = '';
       foreach($data as $key)
       {
          $result .=  json_encode($key).',';
       }
         return $data = 'data'. ':'. $result;
         //return json_encode($this->db->get($table)->result_array());
    }
    public function get($table,$id)
    {
        $this->db->where('id',$id);
        return $this->db->get($table)->row();
    }
    public function update($table,$id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update($table,$data);
    }
    public function delete($table,$id)
    {
         $this->db->where('id',$id);
        return $this->db->delete($table);
    }
}
?>