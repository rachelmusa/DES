<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for hospitals
 */
class hospitals extends CI_controller
{

  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('hospitalModel');
    $this->load->helper('url');
  }
  function save_hospitals()
  {
    $data = $this->input->post('hospital');
    $this->hospitalModel->set_hospital($data);
    redirect('dashboard/hospital/list');
  }
}
 ?>
