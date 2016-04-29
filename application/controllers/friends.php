<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Friends extends CI_Controller
{
 public function index(){

   $this->load->view('login');
   $this->load->library('form_validation');





 }
 public function userdash(){
   $loggedUser = $this->session->userdata('logged_in');
   $this->load->model('friend');
   $this->load->view('userpage');


 }
 public function addFriend(){
   $this->load->model('friend');
   $this->friend->addFriend();
   redirect('/Friends/profile');
 }


 public function process_register(){
        $this->load->model('friend');
        $post_data = $this->input->post();
        $this->load->library("form_validation");

        $this->form_validation->set_rules("name", "Name", "trim|required");
        $this->form_validation->set_rules("alias", "Alias", "trim|required");
        $this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
        $this->form_validation->set_rules("password", "Password", "trim|min_length[3]|required");
        $this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required");
        $this->form_validation->set_rules("date_of_birth", "Date of Birth", "trim|required");
        $this->form_validation->run();
        $this->load->view('login');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata("registration_error", validation_errors());

        } else {
            $user_input  = $this->input->post();
            $insert_user = $this->friend->insert_user($user_input);

            if ($insert_user) {
                $this->session->set_userdata("user_session", $user_input);
                // redirect("/Friends/userdash");
            } else {
                $this->session->set_flashdata("registration_error", "Sorry but your info could not be registered at this time. Please try again.");
                redirect("/Friends/login");
            }

        }

    }
    public function process_login(){
      $this->load->view('login');
      $this->load->library('form_validation');
      $this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
      $this->form_validation->set_rules("password", "Password", "trim|min_length[3]|required");

        if ($this->form_validation->run() === FALSE) {
           $this->session->set_flashdata("login_error", validation_errors());
           redirect('/Friends/login');


        } else {
            $this->load->model('friend');

            $get_member = $this->friend->get_user($this->input->post());

            if ($get_member) {
                $this->session->set_userdata("user_session", $get_member);

                 redirect('/Friends/userdash');



            }
            else {
                $this->session->set_flashdata("login_error", "Invalid Email and/or Password.");
                 redirect ('/Friends/login');


               }
             }
           }

         }


?>
