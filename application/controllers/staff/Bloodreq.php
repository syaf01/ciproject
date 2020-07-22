<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bloodreq extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_Bloodreq_Model');
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
        $config['total_rows'] = $this->Staff_Bloodreq_Model->total_rows($q);
        $bloodreq = $this->Staff_Bloodreq_Model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bloodreq_data' => $bloodreq,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('staff/bloodreq', $data);
    }

    public function read($id)  
    {
        $row = $this->Staff_Bloodreq_Model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'branch' => $row->branch,
		'date' => $row->date,
		'time' => $row->time,
		'bloodType' => $row->bloodType,
	    );
            $this->load->view('staff/bloodreq_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('staff/bloodreq'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('staff/Bloodreq/create_action'),
	    'id' => set_value('id'),
	    'branch' => set_value('branch'),
	    'date' => set_value('date'),
	    'time' => set_value('time'),
	    'bloodType' => set_value('bloodType'),
	);
        $this->load->view('staff/bloodreq_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'branch' => $this->input->post('branch',TRUE),
		'date' => $this->input->post('date',TRUE),
		'time' => $this->input->post('time',TRUE),
		'bloodType' => $this->input->post('bloodType',TRUE),
	    );

            $this->Staff_Bloodreq_Model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('staff/bloodreq'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Staff_Bloodreq_Model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('staff/Bloodreq/update_action'),
		'id' => set_value('id', $row->id),
		'branch' => set_value('branch', $row->branch),
		'date' => set_value('date', $row->date),
		'time' => set_value('time', $row->time),
		'bloodType' => set_value('bloodType', $row->bloodType),
	    );
            $this->load->view('staff/bloodreq_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bloodreq'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'branch' => $this->input->post('branch',TRUE),
		'date' => $this->input->post('date',TRUE),
		'time' => $this->input->post('time',TRUE),
		'bloodType' => $this->input->post('bloodType',TRUE),
	    );

            $this->Staff_Bloodreq_Model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('staff/bloodreq'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Staff_Bloodreq_Model->get_by_id($id);

        if ($row) {
            $this->Staff_Bloodreq_Model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('staff/bloodreq'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('staff/bloodreq'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('branch', 'branch', 'trim|required');
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('time', 'time', 'trim|required');
	$this->form_validation->set_rules('bloodType', 'bloodtype', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
