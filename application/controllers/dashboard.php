<?php defined('BASEPATH')OR exit('Exit');
/**
 * controller for dashboard
 */
class Dashboard extends CI_controller
{

  function __construct()
  {
    // code...
    parent:: __construct();
    $this->load->helper('url');
  }
  function doctor_add()
  {
    $this->load->view('head');
    $this->load->view('doctor_add');
    $this->load->view('footer');
  }
  function doctor_list()
  {
    $this->load->view('head');
    $this->load->view('doctor_list');
    $this->load->view('footer');
  }
  function user_add()
  {
    $this->load->view('head');
    $this->load->view('user_add');
    $this->load->view('footer');
  }
  function user_list()
  {
    $this->load->view('head');
    $this->load->view('user_list');
    $this->load->view('footer');
  }
  function patient_list()
  {
    $this->load->view('head');
    $this->load->view('patient_list');
    $this->load->view('footer');
  }
  function home()
  {
    $this->load->view('head');
    $this->load->view('dashboard_page');
    $this->load->view('footer');
  }
}
 ?>
