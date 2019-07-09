<?php defined('BASEPATH')OR exit('Error');
/**
 * model for the patient
 */
class patientModel extends CI_model
{
  function save_patient($patientdata)
  {
    $this->db->insert('patients',$patientdata);
  }
  function get_patients()
  {
    $this->db->select('*');
    $this->db->from('patients');
    $result = $this->db->get();
    return $result->result();
  }
  function consult_patientdetailsSave($data){
    $this->db->insert('patientdetails',$data);
  }
  function opwnfileForPatient($patientId,$hospitalId,$userId){
    $data = array(
      'patientsid' =>$patientId,
    'hosptialsid' =>$hospitalId,
    'issuedby'=>$userId);
    $this->db->insert('patientfiles',$data);
    $lastId = $this->db->insert_id();
    return $lastId;
  }
  function saveSymptomps($data){
    $this->db->insert('patientsymptoms',$data);
    $id = $this->db->insert_id();
    return $id;
  }
}
 ?>
