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
		// $this->load->view('welcome_message');
		$page_data['page_name'] = 'landing';
		$page_data['page_title'] = 'Welcome';
		$this->load->view('frontend/index', $page_data);
	}
	public function signin(){
		$page_data['page_name'] = 'signin';
		$page_data['page_title'] = 'SignIn';
		$this->load->view('frontend/index', $page_data);
	}
	public function signup(){
		$page_data['page_name'] = 'signup';
		$page_data['page_title'] = 'SignUp';
		$this->load->view('frontend/index', $page_data);
	}
}
