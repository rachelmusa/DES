<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for patient
 */
class Patients extends CI_controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('patientModel');
    $this->load->helper('url');
  }
  function set_patient()
  {
    $data = $this->input->post('patient');
    $data['issuedby'] = $this->session->userdata['user_profile']['userid'];
    $this->patientModel->save_patient($data);
    redirect('dashboard/patient/list');
  }
}
 ?>
