<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Staff_Login_Model extends CI_Model {


public function validatelogin($username,$password){

$query=$this->db->where(['userName'=>$username,'password'=>$password]);
	$account=$this->db->get('tblstaff')->row();
	if($account!=NULL){

return $account->id;
}
return NULL;
}
}