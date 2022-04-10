<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends MY_Controller {

	public function __construct()
    {
        parent::__construct();

		// header('Content-Type: application/json; charset=utf-8');
		
		if($_SESSION['username_ss'] == false){
			header( "location: ".base_url().'Login' );
			exit(0);
		}

		// $this->model = parent::model();

    }

	public function index()
	{
		// $this->load->view('page');
		// $this->model->function();
        // $data = [
        //     'A' => 'AAAAA',
        //     'B' => 'BBBBB',
        //     'C' => 'CCCCC',
        //     'D' => 'DDDDD',
        // ];
		// $temp = $this->model->getName([]);
		// _print_r($temp);
		parent::view('chat',[]);
	}

}
