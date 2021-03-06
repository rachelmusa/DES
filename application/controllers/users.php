<?php defined('BASEPATH')OR exit('Exit');
/**
 * controler for the user
 */
class Users extends CI_controller
{

  function __construct()
  {
    parent:: __construct();
    $this->load->helper('url');
    $this->load->model('UserModel');
  }

  function set_user(){
    $userdata = $this->input->post('user');
    if($userdata['password']){
      $userdata['password'] = md5($userdata['password']);
    }else{
      $userdata['password'] = md5($userdata['lname']);
    }
    $this->UserModel->saveUser($userdata);
    redirect('dashboard/user/list');
  }

  function processLogin()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $profile = $this->UserModel->login($email,$password);

    if ($profile) {
      $this->session->set_userdata('checklogged',true);
      $this->session->set_userdata('user_profile',$profile);
      redirect('dashboard/home');
    }else{
      $this->session->set_flashdata('error_message', 'Please Try again, Password or email is incorrect');
      redirect("dashboard/login");
    }
  }
  function logout()
  {
    $this->session->sess_destroy();
    redirect("dashboard/login");
  }
}
 ?>
