<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}

	public function process()
	{
		if($this->input->post()) //to check if there are data submitted to the form; prevents adding the number of views when user just go to the link /survey/process
		{
			$count = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $count+1);

			$this->session->set_userdata('post_data', $this->input->post());
			redirect('survey/result');
		}
		else
			redirect('survey/index');
	}

	public function result()
	{
		$this->load->view('result');
	}
}

// end of file
