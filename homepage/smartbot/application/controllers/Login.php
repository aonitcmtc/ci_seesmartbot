<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

		// $this->fnc_createTable();

    }

	public function index()
	{
		// print_r($_SESSION); die();

		$this->load->view('login',['alert' => false]);
	}

	private function fnc_createTable()
	{
		// $this->load->view('login');
	}

	public function register()
	{
		// print_r($_SESSION); die();

		$this->load->view('register',['alert' => '']);
	}

	public function check_login()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$post = $this->input->post();

			$this->load->model('Login_model');
			// $this->load->database();
			$check = $this->Login_model->checkLogin($post);
			// print_r($check); die();
			if($check !== false){
				// print_r($check); die();
				$user = $this->Login_model->updateLog($check);
				$this->session->set_userdata("username_ss",$check['user']);
				$this->session->set_userdata("memberid_ss",$check['id']);
				header( "location: ".base_url().'Home' );
				exit(0);
			}else{
				$this->session->set_userdata("username_ss",false);
				$this->session->set_userdata("memberid_ss",false);
				$this->load->view('login',['alert' => 'Username or Password Not Match']);
			}
		 }
	}

	public function updateMember()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$post = $this->input->post();
			if($post['password'] == $post['re-password'] && $post['password'] != '' && $post['re-password'] != ''){
				// print_r('Sucess'); die();
				$this->load->model('Login_model');
				// $this->load->database();
				$result = $this->Login_model->updateMember($post);
				if($result == true){
					header( "location: ".base_url().'Login' );
					exit(0);
				}
				$this->load->view('register',['alert' => 'Register False']);

			}
			$this->load->view('register',['alert' => 'Password Not Match']);

		 }
	}

	
}
