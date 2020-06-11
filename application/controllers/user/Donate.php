<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Donate extends CI_Controller {
	function __construct(){
		parent::__construct();
		if(! $this->session->userdata('uid'))
		redirect('user/dashboard');
    }
    
    public function index(){
		$userid = $this->session->userdata('uid');
		$this->load->model('User_Profile_Model');
		$profiledetails=$this->User_Profile_Model->getprofile($userid);
		$this->load->view('user/donate',['profile'=>$profiledetails]);
	}
}