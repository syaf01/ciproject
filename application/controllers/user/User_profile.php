<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(! $this->session->userdata('uid')) 
		redirect('user/login');
		$this->load->model('User_Profile_Model');
	}

	public function index(){
		$userid = $this->session->userdata('uid');
		$profiledetails=$this->User_Profile_Model->getprofile($userid);
		$this->load->view('user/user_profile',['profile'=>$profiledetails]);
	}

	public function updateprofile(){
		$this->form_validation->set_rules('firstName','First Name','required|alpha');
		$this->form_validation->set_rules('lastName','Last Name','required|alpha');
		$this->form_validation->set_rules('age','Age','required|numeric|exact_length[2]');
		$this->form_validation->set_rules('icNo','I/C No','required|numeric');
		$this->form_validation->set_rules('gender','Gender','required|alpha');
		$this->form_validation->set_rules('bloodType','blood Type','required|alpha');
		$this->form_validation->set_rules('address','Address');
		$this->form_validation->set_rules('emailId', 'emailId', 'trim|required');
		$this->form_validation->set_rules('mobileNumber','Mobile Number','required|numeric');

		if($this->form_validation->run()){
			$fname=$this->input->post('firstName');
			$lname=$this->input->post('lastName');
			$age=$this->input->post('age');
			$icNo=$this->input->post('icNo'); 
			$gender=$this->input->post('gender');
			$bloodType=$this->input->post('bloodType');
			$address=$this->input->post('address');
			$emailId=$this->input->post('emailId');
			$mobileNumber=$this->input->post('mobileNumber');
			$userid = $this->session->userdata('uid');

			$this->User_Profile_Model->update_profile($fname,$lname,$age,$icNo,$gender,$bloodType,$address,$emailId,$mobileNumber,$userid);
			$this->session->set_flashdata('success','Profile updated successfull.');
			return redirect('user/user_profile');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
			redirect('user/user_profile');
		}
	}
}
