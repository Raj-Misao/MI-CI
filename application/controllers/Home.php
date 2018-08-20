<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('aboutus');
	}
	public function contact()
	{
		$this->load->view('contactus');
	}
	
	public function signin()
	{
		$this->load->view('signin');
	}
	
	public function signup()
	{
		$this->load->view('signup');
	}
}
