<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Bangkok');

class Login_model extends CI_Model {

    public $tbl = 'member';
    public $tbl_log_user = 'log_user';

    public function checkLogin($post)
    {
            $this->db->where('user',$post['user']);
            $this->db->where('password',$post['password']);
            $data = $this->db->get($this->tbl)->row_array();
            // print_r($data); die();
            if(!empty($data)){
                // print_r($data); die();
                return $data;
            }else{
                // print_r('Dev999'); die();
                return false;

            }
    }

    public function updateMember($member)
    {
        // print_r($member); die();
        $data = array(
            'user' => $member['name'],
            'email' => $member['email'],
            'password' => $member['password']
        );
        $this->db->insert($this->tbl, $data);
        if(!empty($data)){
            return true;
        }else{
            return false;
        }
    }

    public function updateLog($member)
    {
        // print_r($member); die();
        $data = array(
            'member_id' => $member['id'],
            'user' => $member['user'],
            'action' => 'Login',
            'date' => date('Y-m-d H:i:s')
        );
        $this->db->insert($this->tbl_log_user, $data);
        if(!empty($data)){
            return true;
        }else{
            return false;
        }
    }

    public function logLogout($member)
    {
        // print_r($member); die();
        $data = array(
            'member_id' => $member['memberid_ss'],
            'user' => $member['username_ss'],
            'action' => 'Logout',
            'date' => date('Y-m-d H:i:s')
        );
        $this->db->insert($this->tbl_log_user, $data);
        if(!empty($data)){
            return true;
        }else{
            return false;
        }
    }

}
