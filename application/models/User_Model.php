<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($data)
    {
        return $this->db->insert('users',$data);
    }
    public function getAll()
    {
         return $this->db->get('users')->result_array();
    }
    public function get($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('users')->row();
    }
    public function getuser($data)
    {
        //$this->db->select('username','email');
        $this->db->where('email',$data['email']);
        $this->db->where('password',md5($data['password']));
        return $this->db->get('users')->row_array();
    }
    public function update($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }
    public function delete($id,$data)
    {
         $this->db->where('id',$id);
        return $this->db->delete('users');
    }
}
?>