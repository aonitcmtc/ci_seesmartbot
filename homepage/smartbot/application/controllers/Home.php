<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
		if($_SESSION['username_ss'] == false){
			header( "location: ".base_url().'Login' );
			exit(0);
		}

    }

	public function index()
	{
		// $this->load->view('page');
		//$this->model->function();
		// $temp = mod::dayThai(date('Y-m-d'));
		// _print_r($temp);
		parent::view('page',[]);
	}

	public function logout()
	{
		// print_r($_SESSION); die();
		$data = $_SESSION;
		$this->load->model('Login_model');
		// $this->load->database();
		$this->Login_model->logLogout($data);

		$this->session->set_userdata("username_ss",false);
		$this->session->set_userdata("memberid_ss",false);
		// _print_r($this->session);
		header( "location: ".base_url().'Login' );
		exit(0);
	}

	public function calculate()
	{
		// $this->load->view('calculate');
		parent::view('calculate',[]);
	}

	public function updateToken()
	{
		$input = file_get_contents("php://input");
        $post = json_decode($input, true);

		$this->load->model('Home_model');
		// $this->load->database();
		$data = $this->Home_model->updateToken($post);

		echo json_encode($data);
        die();
	}

}
