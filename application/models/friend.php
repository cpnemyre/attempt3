<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Friend extends CI_Model
{

    function __construct()
    {
        parent::__construct();

    }
    public function get_user($users_info)
    {
      $query = "SELECT * FROM users WHERE email = ? AND password = ?";
      $values = array($users_info['email'], $users_info['password']);
      return $this->db->query($query, $values)->row_array();

    }
    public function insert_user($insert_info)
    {
       $query  = "INSERT INTO users (name, alias, email, password, date_of_birth , created_on, updated_on) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
       $values = array(
           $insert_info['name'],
           $insert_info['alias'],
           $insert_info['email'],
           $insert_info['password'],
           $insert_info['date_of_birth']
);
       $this->db->query($query, $values);
       return $this->db->insert_id();
   }
   public function displayFriendsli($id){

   }
   public function displayNotfriendsli($id){

   }
   public function addFriend(){

   }
  }

    ?>
