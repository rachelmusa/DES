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
    $this->load->view('head');
    $this->load->view('drug_add');
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
    $this->load->view('head');
    $this->load->view('hospital_add');
    $this->load->view('footer');
  }
  function hospital_list()
  {
    $data['hospitalist'] = $this->hospitalModel->get_hospitals();
    $this->load->view('head');
    $this->load->view('hospital_list',$data);
    $this->load->view('footer');
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
    $data['hospitallist'] = $this->hospitalModel->get_hospitals();
    $data['joblist'] = $this->jobtypeModel->get_jobtypes();
    $this->load->view('head');
    $this->load->view('user_add',$data);
    $this->load->view('footer');
  }
  function user_list()
  {
    $data['hospitalist'] = $this->UserModel->userlist();
    $this->load->view('head');
    $this->load->view('user_list',$data);
    $this->load->view('footer');
  }
  function patient_list()
  {
    $data['patientlist'] = $this->patientModel->get_patients();
    $this->load->view('head');
    $this->load->view('patient_list',$data);
    $this->load->view('footer');
  }
  function home()
  {
    $this->load->view('head');
    $this->load->view('dashboard_page');
    $this->load->view('footer');
  }
  function index()
  {
    $this->load->view('head');
    $this->load->view('login');
    $this->load->view('footer');
  }
}
 ?>
