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
    $this->load->model('UserModel');
    $this->load->model('patientModel');
    $this->load->model('hospitalModel');
    $this->load->model('jobtypeModel');
    $this->load->model('drugModel');
    $this->load->helper('url');
  }

  function drug_add()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('drug_add',$data);
    $this->load->view('footer');
  }
  function drug_list()
  {
    $data['druglist'] = $this->drugModel->get_drugs();
    $this->load->view('head');
    $this->load->view('drug_list',$data);
    $this->load->view('footer');
  }
  function hospital_add()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('hospital_add',$data);
    $this->load->view('footer');
  }
  function hospital_list()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $data['hospitalist'] = $this->hospitalModel->get_hospitals();
    $this->load->view('head');
    $this->load->view('hospital_list',$data);
    $this->load->view('footer');
  }
  function doctor_add()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('doctor_add',$data);
    $this->load->view('footer');
  }
  function doctor_list()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('doctor_list',$data);
    $this->load->view('footer');
  }
  function user_add()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $data['hospitallist'] = $this->hospitalModel->get_hospitals();
    $data['joblist'] = $this->jobtypeModel->get_jobtypes();
    $this->load->view('head');
    $this->load->view('user_add',$data);
    $this->load->view('footer');
  }
  function user_list()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $data['userlist'] = $this->UserModel->userlist();
    $this->load->view('head');
    $this->load->view('user_list',$data);
    $this->load->view('footer');
  }
  function patient_list()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $data['patientlist'] = $this->patientModel->get_patients();
    $this->load->view('head');
    $this->load->view('patient_list',$data);
    $this->load->view('footer');
  }
  function home(){
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('dashboard_page',$data);
    $this->load->view('footer');
  }
  function signup(){
    $userdata = $this->session->userdata('user_profile');
    $data['hospitallist'] = $this->hospitalModel->get_hospitals();
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('signup',$data);
    $this->load->view('footer');
  }
  function index()
  {
    $userdata = $this->session->userdata('user_profile');
    $data['account'] = $userdata['jobname'];
    $this->load->view('head');
    $this->load->view('login');
    $this->load->view('footer');
  }
}
 ?>
