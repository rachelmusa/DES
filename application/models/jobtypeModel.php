<?php defined('BASEPATH')OR exit('Error');
/**
 *
 */
class jobtypeModel extends CI_model
{
  function get_jobtypes()
  {
    $this->db->select('*');
    $this->db->from('jobtype');
    $this->db->where('status','active');
    $list = $this->db->get();
    return $list->result();
  }
}
 ?>
