<?php defined('BASEPATH')OR exit('exit');
/**
 * model for the user
 */
class UserModel extends CI_model
{
  function login($email, $password)
  {
    $data = array('email' =>$email , 'password'=>$password);
    $this->db->select('*');
    $this->db->from('users');
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
