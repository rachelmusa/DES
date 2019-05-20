<?php defined('BASEPATH')OR exit('exit');
/**
 * model for the user
 */
class UserModel extends CI_model
{
  function userlist()
  {
    $this->db->select('u.id as userid,u.fname,u.mname,u.lname,u.gender,u.address,
    u.mobile,u.email,j.name as jobname,h.name as hospitalname');
    $this->db->from('users as u');
    $this->db->join('jobtype as j','j.id = u.jobtypeid','inner');
    $this->db->join('hospitals as h','h.id = u.hospitalsid','inner');
    //$this->db->where($data);
    $users = $this->db->get();
    return $users->result();
  }
  function saveUser($data)
  {
    $this->db->insert('users',$data);
  }
  function login($email, $password)
  {
    $data = array('u.email' =>$email , 'u.password'=>$password);
    $this->db->select('u.id as userid,u.fname,u.lname,u.mobile,u.email,j.name as jobname,h.name as hospitalname');
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
