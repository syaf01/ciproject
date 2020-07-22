<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class BloodReq extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('User_BloodReq_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'bloodreq/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bloodreq/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bloodreq/index.html';
            $config['first_url'] = base_url() . 'bloodreq/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_BloodReq_Model->total_rows($q);
        $bloodreq = $this->User_BloodReq_Model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bloodreq_data' => $bloodreq,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/bloodReq', $data);
    }
}