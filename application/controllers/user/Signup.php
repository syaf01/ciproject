<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup extends CI_Controller {
	
    public function index(){

        $this->form_validation->set_rules('firstname','First Name','required|alpha');
        $this->form_validation->set_rules('lastname','Last  Name','required|alpha');
        $this->form_validation->set_rules('age','Age','required|numeric|exact_length[2]');
        $this->form_validation->set_rules('icNo','I/C No','required|numeric|exact_length[12]');
        $this->form_validation->set_rules('gender','Gender','required|alpha');
        $this->form_validation->set_rules('bloodType','blood Type','required|alpha');
        $this->form_validation->set_rules('address','Address');
        $this->form_validation->set_rules('emailid','Email id','required|valid_email|is_unique[tblusers.emailId]');
        $this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');

        if($this->form_validation->run()){
 
            $fname=$this->input->post('firstname');
            $lname=$this->input->post('lastname');
            $age=$this->input->post('age');
            $icNo=$this->input->post('icNo');
            $gender=$this->input->post('gender');
            $bloodType=$this->input->post('bloodType'); 
            $address=$this->input->post('address');
            $emailid=$this->input->post('emailid');
            $mnumber=$this->input->post('mobilenumber');
            $password=$this->input->post('password');
            $status=1;

            $this->load->model('Signup_Model');
            $this->Signup_Model->insert($fname,$lname,$age,$icNo,$gender,$bloodType,$address,$emailid,$mnumber,$password,$status);
        } 
        else {
            $this->load->view('user/signup');
        }       	
    }
}