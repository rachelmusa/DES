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
  }
  function index()
  {
    $this->load->view('head');
    $this->load->view('login');
    $this->load->view('footer');
  }
}
 ?>
