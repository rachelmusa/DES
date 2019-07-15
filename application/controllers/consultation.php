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
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
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
          redirect('consultation/patient/symptoms/'.$openFile.'/'.$patientdetails['patientsid']);
      }
  }
  function patient_symptoms($patientFileId,$patientId){
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
      $data['patientfile'] = $patientFileId;
      $data['patientid'] = $patientId;
      $this->load->view('head');
      $this->load->view('patientsymptomps',$data);
      $this->load->view('footer');
  }
  function patient_symptoms_save(){
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $userCurrent = $this->session->userdata('user_profile');
      $data = $this->input->post('psymptomps');
      $data['usersid'] = $userCurrent['userid'];
      $patientId = $this->input->post('patientId');
      $lastSymtomps = $this->patientModel->saveSymptomps($data);
      if($lastSymtomps){
        redirect('consultation/patient/assign_drugs/'.$lastSymtomps.'/'.$patientId);
      }else{
        $this->session->set_flashdata('message', 'Error occur');
        redirct('consultation/patient/symptoms/'.$data['patientfileno']);
      }
  }
  function assign_drugs($symtompsId,$patientId){
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $data['symtompsId'] = $symtompsId;
    $data['patientId'] = $patientId;
    $data['patientList'] = $this->patientModel->get_patients();
    $data['drugList'] = $this->drugModel->get_drugs();
    $this->load->view('head');
    $this->load->view('assign_drug',$data);
    $this->load->view('footer');
  }
  function assign_drug_save(){
    $patientInfo = $this->input->post('pdetails');
    $patientInfo['patientId'] = $this->input->post('patientId');
    $check = $this->drugModel->checkDrugs($patientInfo['drugsid'],$patientInfo['patientId']);
    if($check){
      $this->session->set_flashdata('message', 'Change patient drug..');
      redirect('/consultation/patient/assign_drugs/'.$patientInfo['patientsymptomsid'].'/'.$patientInfo['patientId']);
    }else{
      $this->drugModel->insertPatientDrug($patientInfo);
      $this->session->set_flashdata('message', 'Assigned successfully');
      redirect('/consultation/patient/assign_drugs/'.$patientInfo['patientsymptomsid'].'/'.$patientInfo['patientId']);
    }
  }
}
?>