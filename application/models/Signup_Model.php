<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup_Model extends CI_Model{

	public function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

	public function insert($fname,$lname,$age,$icNo,$gender,$bloodType,$address,$emailid,$mnumber,$password,$status){
		$data=array(
			'firstName'=>$fname, 
			'lastName'=>$lname,
			'age'=>$age,
			'icNo'=>$icNo,
			'gender'=>$gender,
			'bloodType'=>$bloodType,
			'address'=>$address,
			'emailId'=>$emailid,
			'mobileNumber'=>$mnumber,
			'userPassword'=>$password,  
			'isActive'=>$status
		);

		$sql_query=$this->db->insert('tblusers',$data);
		if($sql_query){
			$this->session->set_flashdata('success', 'Registration successfull');
			redirect('user/signup');
		}
		else{
			$this->session->set_flashdata('error', 'Something went worng. Error!!');
			redirect('user/signup');
		}
	}
}