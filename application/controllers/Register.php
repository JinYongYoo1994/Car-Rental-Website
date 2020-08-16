<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();

        //load our Register model here
        $this->load->model('RegisterModel', 'register');
    }
    //registration form page
    public function index()
    {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect('/');
        }
        //load the register page views
        $page_data['page_name'] = 'signup';
		$page_data['page_title'] = 'SignUp';
		$this->load->view('frontend/index', $page_data);
    }
    //register validation and logic
    public function doRegister()
    {
        //set the form validation here
        $this->form_validation->set_rules('Username', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        // if ($this->form_validation->run() == FALSE) {
        //     var_dump("error"); exit;
        //     //set the validation errors in flashdata (one time session)
        //     $this->session->set_flashdata('errors', validation_errors());
        //     redirect('/signup');
        // } else {
            // var_dump("posted"); exit;
            //if not get the input values
            $username = $this->input->post('username');
            $firstname = $this->input->post('name');
            $lastname = $this->input->post('name');
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
            $data = [
                'user_name' => $username, 'email' => $email, 'password' => $password, 'first_name' => $firstname, 'last_name' => $lastname
            ];
            //pass the input values to the register model
            $insert_data = $this->register->add_user($data);
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect('/signin');
            }
        // }
    }
}
