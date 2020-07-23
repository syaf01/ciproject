<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Change_password extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('stid'))
redirect('staff/login');
}

public function index(){
$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');	
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$cpassword=$this->input->post('currentpassword');
$newpassword=$this->input->post('password');
$staffid = $this->session->userdata('stid');
$this->load->model('Staff_Changepassword_Model');
$cpass=$this->Staff_Changepassword_Model->getcurrentpassword($staffid);
echo $dbpass=$cpass->password;

 if($dbpass==$cpassword){
if($this->Staff_Changepassword_Model->updatepassword($staffid,$newpassword))
{
$this->session->set_flashdata('success', 'Password change successfully');
	redirect('staff/change_password');
}

} else {
$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
redirect('staff/change_password');	
} 
} else {
$this->load->view('staff/change_password');
}
}




}