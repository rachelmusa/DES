<?php defined('BASEPATH')OR exit('error');
/**
 * controller for drugs
 */
class drugs extends CI_controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('drugModel');
    $this->load->helper('url');
  }

  function set_drug()
  {
    $data = $this->input->post('drug');
    $data['issuedby'] = $this->session->userdata['user_profile']['userid'];
    $this->drugModel->set_drugs($data);
    redirect('dashboard/drug/list');
  }
}
 ?>
