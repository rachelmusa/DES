<?php defined('BASEPATH')OR exit('Error');
/**
 * model for drugs
 */
class drugModel extends CI_model
{

  function set_drugs($data)
  {
    $this->db->insert('drugs',$data);
  }
  function get_drugs()
  {
    $this->db->select('*');
    $this->db->from('drugs');
    $this->db->where('status','active');
    $data = $this->db->get();
    return $data->result();
  }
  function checkDrugs($drugsid,$patientId){
    $filter = array(
      'drugsid' =>$drugsid ,
      'patientid'=>$patientId,
      'point <'=>3
    );
    $this->db->select('p.point');
    $this->db->from('patientdrug as p');
    $this->db->where($filter);
    $result = $this->db->get();
    return $result->result_array();
  }
  function insertPatientDrug($data){
    $this->db->insert('patientdrug',$data);
  }
}
 ?>
