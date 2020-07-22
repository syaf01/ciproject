<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class Dashboard extends CI_Controller {

	public function index(){ 

        $this->form_validation->set_rules('branch','Branch','required|alpha');
		$this->form_validation->set_rules('date','Date','required|alpha');
        $this->form_validation->set_rules('time','Time','required|alpha');
        $this->form_validation->set_rules('bloodType','Blood Type','required|alpha');
        

        if($this->form_validation->run()){

            $branch=$this->input->post('branch');
            $date=$this->input->post('date');
            $time=$this->input->post('time');
            $bloodType=$this->input->post('bloodType');

            $this->load->model('Staff_Dashboard_Model');
            $this->Staff_Dashboard_Model->insert($branch,$date,$time,$bloodType);
        } 
        else {
            $this->load->view('staff/dashboard');
        }       	
	}
} 