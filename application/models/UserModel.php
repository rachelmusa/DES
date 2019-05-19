<?php defined('BASEPATH')OR exit('exit');
/**
 * model for the user
 */
class UserModel extends CI_model
{
  function login($email, $password)
  {
    $data = array('email' =>$email , 'password'=>$password);
    $this->db->select('u.fname,u.lname,u.mobile,u.email,j.name as jobname,h.name as hospitalname');
    $this->db->from('users as u');
    $this->db->join('jobtype as j','j.id = u.jobtypeid','inner');
    $this->db->join('hospitals as h','h.id = u.hospitalsid','inner');
    $this->db->where($data);
    $result = $this->db->get();
    if ($result) {
      return $result->row_array();
    }else{
      return false;
    }
  }
}
 ?>
