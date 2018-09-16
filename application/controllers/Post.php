<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curd_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $Post = $this->Curd_Model->getAll('posts');
        // echo "<pre>";
        // foreach($Post as $aaaa)
        // {
        //     print_r($aaaa);
        // }
        
        // echo "</pre>";
        $this->load->view('layout/header.php');
        $this->load->view('layout/nav.php');
        $this->load->view('postIndex.php',compact('Post'));
        $this->load->view('layout/footer.php');
    }

    public function create()
    {
        $this->load->view('layout/header.php');
        $this->load->view('layout/nav.php');
        $this->load->view('post.php');
        $this->load->view('layout/footer.php');
    }
	public function insertPosts()
	{
        $this->form_validation->set_rules('title','error-title',
        'trim|required|min_length[3]|max_length[15]|alpha',
        array('required'=>'Please enter TTitle!','alpha'=>'Only alphabets please!')
        );
        $this->form_validation->set_rules('body','error-body',
        'trim|required|min_length[3]|max_length[15]|alpha',
        array('required'=>'Please enter BBody!','alpha'=>'Only alphabets please!')
        );
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header.php');
            $this->load->view('layout/nav.php');
            $this->load->view('post.php');
            $this->load->view('layout/footer.php');
        }
        else {
            // echo "<pre>";
            // $data = $this->input->post(); 
            // print_r($data ); 
            $data = array(
             'title'=> $this->input->post('title'),
             'body'=>$this->input->post('body'),
            );
            //  print_r($data ); 
            // echo "<pre>";
            
            
           $result = $this->Curd_Model->insert('posts',$data);
            if($result)
            {
                echo "Insert Successfully";
            }
            else
            {
                echo "Not Insert ";
            }
        }
       // print_r($this->input->post());
         
	}
	public function getPosts()
	{
        $Post = $this->Curd_Model->getAll('posts');
        print_r($Post);
	}
	public function postAjaxData()
	{
        $Post = $this->Curd_Model->postAjaxData('posts');
        echo '<pre>';
        print_r($Post);
	}
	
	public function getPost($id)
	{
		$Post = $this->Curd_Model->get('posts',$id);
        print_r($Post);
	}
	
	public function deletePosts($id)
	{
         $result =  $this->Curd_Model->delete('posts',$id);
          if($result)
          {
            redirect(site_url('postIndex'));
          }
          else {
              echo "Post not deleted ";
          }
	}
	public function updatePosts($id)
	{
        if($this->input->post())
        {
            $this->form_validation->set_rules('title','error-title',
            'trim|required|min_length[3]|max_length[15]',
            array('required'=>'Please enter TTitle!')
            );
            $this->form_validation->set_rules('body','error-body',
            'trim|required|min_length[3]|max_length[15]',
            array('required'=>'Please enter BBody!')
            );
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('layout/header.php');
                $this->load->view('layout/nav.php');
                $this->load->view('post.php');
                $this->load->view('layout/footer.php');
            }
            else {
                $data = array(
                'title'=> $this->input->post('title'),
                'body'=>$this->input->post('body'),
                );
                $result = $this->Curd_Model->update('posts',$id,$data);
                if($result)
                {
                    redirect(site_url('postIndex'));
                }
                else
                {
                    echo "Not Insert ";
                }
            } 
        }
        else {
            $Post = $this->Curd_Model->get('posts',$id);
            $this->load->view('layout/header.php');
            $this->load->view('layout/nav.php');
            $this->load->view('postupdate.php',compact('Post'));
            $this->load->view('layout/footer.php');
        }
		
	}
}
