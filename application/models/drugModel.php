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
}
 ?>
