<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function authenticateUser($user, $password) {
        $this->db->select('id, username');
        $this->db->from('users');
        $this->db->where('username', $user);
        $this->db->where('password', md5($password) );
        $query = $this->db->get();
        if ( $query->num_rows() == 0 ) {
            return 0;
        } else {
            return $query->row();
        }
        
    }

    function verifyExistingUser($user) {
        $this->db->select('id, username');
        $this->db->from('users');
        $this->db->where('username', $user);
        $query = $this->db->get();
        if ( $query->num_rows() == 0 ) {
            return 0;
        } else {
            return $query->row();
        }
    }

    function registerUser($user, $password) {
        $data = array(
           'username' => $user ,
           'password' => md5($password) ,
        );
        $this->db->insert('users', $data); 
    }

}