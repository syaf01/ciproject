<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct(); 
        $this->load->model('Hospital_model'); 
		$this->load->library('form_validation');
		
		//parent::__construct();
		//if(! $this->session->userdata('uid'))
		//redirect('user/login');
	}
	public function index()
    { 
        $q = urldecode($this->input->get('q', TRUE));  
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'hospital/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'hospital/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'hospital/index.html';
            $config['first_url'] = base_url() . 'hospital/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        //$config['total_rows'] = $this->Hospital_model->total_rows($q);
		$hospital = $this->Hospital_model->get_limit_data($config['per_page'], 1, $q);
        //$this->load->library('pagination');
        //$this->pagination->initialize($config);

        $data = array(
            'hospital_data' => $hospital,
            'q' => $q, 
            //'pagination' => $this->pagination->create_links(),
            //'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/dashboard', $data);
	}
}
