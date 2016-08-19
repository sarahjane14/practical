<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginScreen extends CI_Controller {

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
		if ( $this->session->set_userdata('username') !== null) {
			$this->load->view('landingPage');
			return;
		}

		$this->load->view('login');
		
		
	}

	public function login()
	{
		if ( $this->session->set_userdata('username') !== null )  {
			$this->load->view('landingPage');
			return;
		}
		$data = [];
		$this->load->model('loginModel');
		$result = $this->loginModel->authenticateUser($this->input->post('email'), $this->input->post('password'));
		
		if (!isset($result->username)) {
			$data['msg'] = "Invalid username or password.";
			$this->load->view('login', $data);
		} else {
			$this->session->set_userdata('username', $result->username);
			$this->load->view('landingPage');
		}
		
	}

	public function registration()
	{
		$this->load->view('register');
	}

	public function register()
	{
		if ( $this->session->set_userdata('username') !== null )  {
			$this->load->view('landingPage');
			return;
		}
		$data = [];
		$this->load->model('loginModel');
		$result = $this->loginModel->verifyExistingUser($this->input->post('email'));

		if (isset($result->username)) {
			$data['msg'] = "Email already exist.";
			$this->load->view('register', $data);
		} else {
			$this->loginModel->registerUser($this->input->post('email'), $this->input->post('password'));
			$data['msg'] = "Account created";
			$this->load->view('login', $data);
		}
	}
}
