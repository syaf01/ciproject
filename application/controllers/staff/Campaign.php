<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Campaign extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_Campaign_Model');
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
        $config['total_rows'] = $this->Staff_Campaign_Model->total_rows($q);
        $campaign = $this->Staff_Campaign_Model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'campaign_data' => $campaign,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('staff/campaign', $data);
    }

    public function read($id) 
    {
        $row = $this->Staff_Campaign_Model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'date' => $row->date,
		'time' => $row->time,
		'location' => $row->location,
	    );
            $this->load->view('staff/campaign_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('staff/campaign'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('staff/Campaign/create_action'),
	    'id' => set_value('id'),
	    'date' => set_value('date'),
	    'time' => set_value('time'),
	    'location' => set_value('location'),
	);
        $this->load->view('staff/campaign_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'time' => $this->input->post('time',TRUE),
		'location' => $this->input->post('location',TRUE),
	    );

            $this->Staff_Campaign_Model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('staff/campaign'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Staff_Campaign_Model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('staff/Campaign/update_action'),
		'id' => set_value('id', $row->id),
		'date' => set_value('date', $row->date),
		'time' => set_value('time', $row->time),
		'location' => set_value('location', $row->location),
	    );
            $this->load->view('staff/campaign_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('campaign'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'time' => $this->input->post('time',TRUE),
		'location' => $this->input->post('location',TRUE),
	    );

            $this->Staff_Campaign_Model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('staff/campaign'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Staff_Campaign_Model->get_by_id($id);

        if ($row) {
            $this->Staff_Campaign_Model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('staff/campaign'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('staff/campaign'));
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