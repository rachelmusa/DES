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
