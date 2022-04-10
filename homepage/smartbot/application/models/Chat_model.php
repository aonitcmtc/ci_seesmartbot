<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Bangkok');

class Chat_model extends CI_Model {

    // public $tbl = 'member';
    // public $tbl_log_user = 'log_user';

    public function updateToken($post)
    {
            // $this->db->where('user',$post['user']);
            // $this->db->where('password',$post['password']);
            // $data = $this->db->get($this->tbl)->row_array();
            // // print_r($data); die();
            // if(!empty($data)){
            //     // print_r($data); die();
            //     return $data;
            // }else{
            //     // print_r('Dev999'); die();
            //     return false;

            // }
        $post['Dev'] = 'Test999';
        $post['Dev111'] = 'Test999222';

        return $post;
    }

    public function getName($post)
    {
            // $this->db->where('user',$post['user']);
            // $this->db->where('password',$post['password']);
            // $data = $this->db->get($this->tbl)->row_array();
            // // print_r($data); die();
            // if(!empty($data)){
            //     // print_r($data); die();
            //     return $data;
            // }else{
            //     // print_r('Dev999'); die();
            //     return false;

            // }
        $post['Name'] = 'Test999';
        $post['Dev111'] = 'Test999222';

        return $post;
    }

}
