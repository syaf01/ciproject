<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class SafetyProtocol extends CI_Controller {
	function __construct(){
		parent::__construct();
    }
    
    public function index(){
		$this->load->view('user/safetyprotocol');
	}
}