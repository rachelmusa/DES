<?php defined('BASEPATH')OR exit('error');

class consultation extends CI_controller{
    function __construct(){
    // code...
    parent:: __construct();
    $this->load->model('UserModel');
    $this->load->model('patientModel');
    $this->load->model('hospitalModel');
    $this->load->model('jobtypeModel');
    $this->load->model('drugModel');
    $this->load->helper('url');
  }
  
}
?>