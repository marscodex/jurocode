<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lsm extends CI_Controller { 


	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Lsm_model');

	}

	public function index()
	{
		$this->load->view('home');
	}

	public function commenthere()
	
	{
		if($this->input->post('Name'))
		{
			$this->form_validation->set_rules('Name', 'Name', 'required|trim');
			$this->form_validation->set_rules('Email', 'Email', 'required|trim');
			$this->form_validation->set_rules('Leave_comment', 'Leave_comment', 'required|trim');

			if($this->form_validation->run() == false)
			{
				echo 'this shit daint work';
			} else{
				//set variables from the form
				$name = $this->input->post('Name');
				$email = $this->input->post('Email');
				$Leave_comment = $this->input->post('Leave_comment');

				if ($this->Lsm_model->comment($name, $email, $Leave_comment))
				{

					$this->load->view('home');
				}else {

					$data->error = 'There was a problem creating your new account. Please try again.';
            		echo 'data';
				}
			}
		}else{
			//load the same page

			$this->load->view('home'); 
		}
	}

	public function visionmore()
	{
		$this->load->view('vision');
	}
	public function goalmore()
	{
		$this->load->view('goal');
	}
	public function contactus()
	{
		$this->load->view('contact');
	}
	// public function details()
	// {
	// 	$this->load->view('enter_details');
	// }
	public function mission()
	{
		$this->load->view('mission');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function profiles()
	{
		$this->load->view('profiles');
	}
	public function volunteers()
	{
		$this->load->view('volunteers');	
	}
	public function children()
	{
		$this->load->view('children');
	}

	public function show($id)
	{
		$comments = $this->Lsm_model->get_comment($id);
		$data['name'] = $comments['Name'];
		$data['email'] = $comments['Email'];
		$data['leave_comment'] = $comments['Leave_comment'];
		$this->load->view('results_view', $data);
	}
}

