<?php

class MY_Controller extends CI_Controller
{
    public $model = []; // load_model

    public function __construct() {

        parent::__construct();
        
        $this->load->helper('mod_helper');
        $this->load_model();
    }

    protected function view($views = null, $data = null)
    {
        $this->load->view('header',$data);
        $this->load->view($views,$data);
        $this->load->view('footer',$data);
    }

    protected function load_model()
    {
        $class = $this->router->class.'_model';
        $this->load->model($class);
        $this->model = $this->$class;
        return $this->model;
    }

}
