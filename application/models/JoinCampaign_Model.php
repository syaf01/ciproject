<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class JoinCampaign_Model extends CI_Model{

	public function insert($fname,$lname,$bloodType,$mnumber){
$data=array(
			'firstName'=>$fname,
			'lastName'=>$lname,
			'bloodType'=>$bloodType,
			'mobileNumber'=>$mnumber
		);
$sql_query=$this->db->insert('user_join',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successfull');
		redirect('user/campaign');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('user/campaign');
	}

	}
}