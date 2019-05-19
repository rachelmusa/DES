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
}
 ?>
