<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_Profile_Model extends CI_Model{

public function getprofile($userid){
	$query=$this->db->select('firstName,lastName,age,icNo,gender,bloodType,address,emailId,mobileNumber,regDate')
                ->where('id',$userid)
                ->from('tblusers')
                ->get();
  return $query->row();  
}

public function update_profile($fname,$lname,$age,$icNo,$gender,$bloodType,$address,$emailId,$mobileNumber,$userid){
$data = array(
               'firstName' =>$fname,
               'lastName' => $lname,
               'age' => $age,
              'icNo'=> $icNo,
			        'gender'=> $gender,
			        'bloodType'=> $bloodType,
              'address'=> $address,
              'emailId'=> $emailId,
               'mobileNumber' => $mobileNumber,
               'id' => $userid
            );

$sql_query=$this->db->where('id', $userid)
                ->update('tblusers', $data); 
          }
        }