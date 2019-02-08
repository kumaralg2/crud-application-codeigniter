<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts = $this->queries->getPosts();
		// echo'<pre>';
		// print_r($posts);
		// echo'<pre>';
		// exit();		
		$this->load->view('welcome_message',['posts'=>$posts]);
	}
	public function create()
	{
		$this->load->view('create');
		// echo 'Create';
	}
	public function save()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			//use below to test ouput data
			// echo'<pre>';
			// print_r($data);
			// echo'<pre>';
			// exit();	
			$this ->load->model('queries');
			$this ->queries-> addPost()


		}
		else
		{
			$this->load->view('create');
		}
	}
}