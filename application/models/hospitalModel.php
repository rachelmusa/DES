<?php defined('BASEPATH')OR exit('Error');
/**
 * model for hospitals
 */
class hospitalModel extends CI_model
{
  function get_hospitals()
  {
    $this->db->select('*');
    $this->db->from('hospitals');
    $data = $this->db->get();
    return $data->result();
  }
}
 ?>
