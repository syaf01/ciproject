<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blooddrive extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('Blooddrive_model'); 
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE)); 
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/blooddrive' . urlencode($q);
            $config['first_url'] = base_url() . 'user/blooddrive' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/blooddrive';
            $config['first_url'] = base_url() . 'user/blooddrive';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Blooddrive_model->total_rows($q);
        $blooddrive = $this->Blooddrive_model->get_limit_data($config['per_page'], 1, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'blooddrive_data' => $blooddrive,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/blooddrive', $data);
    }

    public function read($id) 
    {
        $row = $this->Blooddrive_model->get_by_id($id);
        if ($row) {
            $data = array(
		'dId' => $row->dId,
		'dname' => $row->dname,
		'address' => $row->address,
		'city' => $row->city,
		'postalCode' => $row->postalCode,
		'longitude' => $row->longitude,
		'latitude' => $row->latitude,
	    );
            $this->load->view('user/blooddrive_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/blooddrive'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('blooddrive/create_action'),
	        'dId' => set_value('dId'),
	        'dname' => set_value('dname'),
	        'address' => set_value('address'),
	        'city' => set_value('city'),
	        'postalCode' => set_value('postalCode'),
	        'longitude' => set_value('longitude'),
	        'latitude' => set_value('latitude'),
	);
        $this->load->view('user/blooddrive_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		        'dname' => $this->input->post('dname',TRUE),
		        'address' => $this->input->post('address',TRUE),
		        'city' => $this->input->post('city',TRUE),
		        'postalCode' => $this->input->post('postalCode',TRUE),
		        'longitude' => $this->input->post('longitude',TRUE),
		        'latitude' => $this->input->post('latitude',TRUE),
	        );

            $this->Blooddrive_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/blooddrive'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Blooddrive_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('blooddrive/update_action'),
		        'dId' => set_value('dId', $row->dId),
		        'dname' => set_value('dname', $row->dname),
		        'address' => set_value('address', $row->address),
		        'city' => set_value('city', $row->city),
		        'postalCode' => set_value('postalCode', $row->postalCode),
		        'longitude' => set_value('longitude', $row->longitude),
		        'latitude' => set_value('latitude', $row->latitude),
	        );
            $this->load->view('user/blooddrive_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('blooddrive'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('dId', TRUE));
        } else {
            $data = array(
		'dname' => $this->input->post('dname',TRUE),
		'address' => $this->input->post('address',TRUE),
		'city' => $this->input->post('city',TRUE),
		'postalCode' => $this->input->post('postalCode',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'latitude' => $this->input->post('latitude',TRUE),
	    );

            $this->Blooddrive_model->update($this->input->post('dId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/blooddrive'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Blooddrive_model->get_by_id($id);

        if ($row) {
            $this->Blooddrive_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/blooddrive'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/blooddrive'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('dname', 'dname', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('city', 'city', 'trim|required');
	$this->form_validation->set_rules('postalCode', 'postalcode', 'trim|required');
	$this->form_validation->set_rules('longitude', 'longitude', 'trim|required|numeric');
	$this->form_validation->set_rules('latitude', 'latitude', 'trim|required|numeric');

	$this->form_validation->set_rules('dId', 'dId', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}