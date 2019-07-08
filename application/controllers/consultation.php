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
  function patient_details(){
      $data['patientList'] = $this->patientModel->get_patients();
      $this->load->view('head');
      $this->load->view('con_patientdetails',$data);
      $this->load->view('footer');
  }
  function patient_details_save(){
      $userCurrent = $this->session->userdata('user_profile');
      $patientdetails = $this->input->post('pdetails');
      $check = $this->patientModel->consult_patientdetailsSave($patientdetails);
      $openFile = $this->patientModel->opwnfileForPatient($patientdetails['patientsid'],$userCurrent['hospitalid'],$userCurrent['userid']);
      if($check){
        $this->session->set_flashdata('message', 'Error occur');
        redirct('consultation/patient/details');
      }else{
          redirect('consultation/patient/symptoms/'.$openFile);
      }
  }
  function patient_symptoms($patientFileId){
      echo $patientFileId;
  }
}
?>