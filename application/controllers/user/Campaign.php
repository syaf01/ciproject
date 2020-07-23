<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Campaign extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_Campaign_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'campaign/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'campaign/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'campaign/index.html';
            $config['first_url'] = base_url() . 'campaign/index.html';
        }
 
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_Campaign_Model->total_rows($q);
        $campaign = $this->User_Campaign_Model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'campaign_data' => $campaign,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/campaign', $data);
    }

    public function read($id) 
    {
        $row = $this->User_Campaign_Model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'date' => $row->date,
		'time' => $row->time,
		'location' => $row->location,
	    );
            $this->load->view('user/campaign_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/campaign'));
        }
	}
	public function _rules() 
    {
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('time', 'time', 'trim|required');
	$this->form_validation->set_rules('location', 'location', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}