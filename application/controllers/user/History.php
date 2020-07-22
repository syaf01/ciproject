<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class History extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_History_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'history/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'history/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'history/index.html';
            $config['first_url'] = base_url() . 'history/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_History_Model->total_rows($q);
        $history = $this->User_History_Model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination'); 
        $this->pagination->initialize($config);

        $data = array(
            'history_data' => $history,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/history', $data);
    }

    public function read($id) 
    {
        $row = $this->User_History_Model->get_by_id($id);
        if ($row) {
            $data = array(
		'tblusers_id' => $row->tblusers_id,
		'Date' => $row->Date,
		'Time' => $row->Time,
		'Branch' => $row->Branch,
	    );
            $this->load->view('user/history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/history'));
        }
    }

    public function create()  
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/History/create_action'),
	    'tblusers_id' => set_value('tblusers_id'),
	    'Date' => set_value('Date'),
	    'Time' => set_value('Time'),
	    'Branch' => set_value('Branch'),
	);
        $this->load->view('user/history_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Date' => $this->input->post('Date',TRUE),
		'Time' => $this->input->post('Time',TRUE),
		'Branch' => $this->input->post('Branch',TRUE),
	    );

            $this->User_History_Model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_History_Model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('history/update_action'),
		'tblusers_id' => set_value('tblusers_id', $row->history_id),
		'Date' => set_value('Date', $row->Date),
		'Time' => set_value('Time', $row->Time),
		'Branch' => set_value('Branch', $row->Branch),
	    );
            $this->load->view('history/history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('tblusers_id', TRUE));
        } else {
            $data = array(
		'Date' => $this->input->post('Date',TRUE),
		'Time' => $this->input->post('Time',TRUE),
		'Branch' => $this->input->post('Branch',TRUE),
	    );

            $this->User_History_Model->update($this->input->post('tblusers_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/history'));
        }
    }
 
    public function delete($id) 
    {
        $row = $this->User_History_Model->get_by_id($id);

        if ($row) {
            $this->User_History_Model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Date', 'date', 'trim|required');
	$this->form_validation->set_rules('Time', 'time', 'trim|required');
	$this->form_validation->set_rules('Branch', 'branch', 'trim|required');

	$this->form_validation->set_rules('tblusers_id', 'tblusers_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}