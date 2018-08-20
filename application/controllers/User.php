<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('User_Model');
		$this->load->helper('form');
        $this->load->library('form_validation');
    }
	public function insertUsers()
	{
        $data = array('username'=>'Gavin','email'=>'gavin@gmail.com','password'=>md5('123'));
        echo $this->User_Model->insert($data);
	}
	public function getUsers()
	{
        $users = $this->User_Model->getAll();
       // print_r($users);
	}
	
	public function getUser($id)
	{
		$users = $this->User_Model->get($id);
       // print_r($users);
       //echo $qqq = $this->db->last_query($id);
	}
	
	public function deleteUser($id)
	{
		 echo $this->User_Model->delete($id);
	}
	public function updateUser($id)
	{
		$data = array('email'=>'gavin@gmail.com');
		echo $this->User_Model->update($id,$data);
	}

	public function register()
	{
		if($this->input->post())
		{
			if($this->_validate()=== FALSE)
			{
				$this->_loadTemplate('signup.php');	
			}
			else {
				$data = array(
					'username'=>$this->input->post('username'),
					'email'=>$this->input->post('email'),
					'password'=>md5($this->input->post('password')));
				$result = $this->User_Model->insert($data);
				if($result)	
				{
					 $this->session->set_flashdata('success','user Register Successfully');
					redirect('/login','refresh');
				}
				else {
					$this->_loadTemplate('signup.php');	
				}
			}
		}
		else {
			$this->_loadTemplate('signup.php');
		}
	}

	public function login()
	{
		if($this->input->post())
		{
			
				$data = array(
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'));
				$result = $this->User_Model->getuser($data);
					//echo $this->db->last_query();
				if($result)	
				{
					//print_r($result);
					$this->session->set_userdata('username',$result['username']);
					$this->session->set_userdata('email',$result['email']);
					 $this->session->set_flashdata('success','User LogedIn Successfully');
					redirect('/profile','refresh');
				}
				else {
					$this->session->set_flashdata('error','User Not LogedIn ');
					$this->_loadTemplate('signin.php');	
				}
			
		}
		else {
			$this->_loadTemplate('signin.php');
		}
	}

	public function logout()
	{
		session_destroy();
		$this->session->set_flashdata('success','User Loged Out Successfully');
		redirect('/home','refresh');
	}
	public function profile()
	{
		if(!$this->session->userdata('username'))
		{
			$this->session->set_flashdata('error','User Have to LogedIn ');
			redirect('/login','refresh');
		}
		$this->_loadTemplate('profile.php');
	}

	private function _validate()
	{
		$this->form_validation->set_rules('username','error-username',
            'trim|required|min_length[3]|max_length[9]|alpha',
            array('required'=>'Please enter Name!','alpha'=>'Only alphabets please!')
            );
            $this->form_validation->set_rules('email','error-email',
            'trim|required|min_length[3]|max_length[15]',
            array('required'=>'Please enter email!')
            );
            $this->form_validation->set_rules('password','error-password',
            'trim|required|min_length[3]|max_length[15]',
            array('required'=>'Please enter password!')
			);
		if($this->form_validation->run() == False)
		{
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	private function _loadTemplate($view)
	{
		$this->load->view('layout/header.php');
        $this->load->view('layout/nav.php');
        $this->load->view($view);
        $this->load->view('layout/footer.php');
	}
}
