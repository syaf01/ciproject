<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 

class Hospital extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hospital_model');
        $this->load->library('form_validation');
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
        $hospital = $this->Hospital_model->get_limit_data($config['per_page'], $start, $q);

        $data = array(
            'hospital_data' => $hospital,
            'q' => $q,
            'start' => $start,
        );
        $this->load->view('user/dashboard', $data);
    }

    public function read($id) 
    {
        $row = $this->Hospital_model->get_by_id($id);
        if ($row) {
            $data = array(
                'hId' => $row->hId,
                'hname' => $row->hname,
                'address' => $row->address,
                'city' => $row->city,
                'postalCode' => $row->postalCode,
                'longitude' => $row->longitude,
                'latitude' => $row->latitude,
                'hPhoneNum' => $row->hPhoneNum,
                'covidCentre' => $row->covidCentre,
                'services' => $row->services,
                'hours' => $row->hours,
	    );
            $this->load->view('user/hospital', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/hospital'));
        }
    }

    public function create() 
    {
        $data = array( 
            'button' => 'Create',
            'action' => site_url('hospital/create_action'),
	        'hId' => set_value('hId'),
	        'hname' => set_value('hname'),
	        'address' => set_value('address'),
	        'city' => set_value('city'),
	        'postalCode' => set_value('postalCode'),
	        'longitude' => set_value('longitude'),
	        'latitude' => set_value('latitude'),
	        'hPhoneNum' => set_value('hPhoneNum'),
	        'covidCentre' => set_value('covidCentre'),
	        'services' => set_value('services'),
	        'hours' => set_value('hours'),
	);
        $this->load->view('user/hospital_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'hname' => $this->input->post('hname',TRUE),
                'address' => $this->input->post('address',TRUE),
                'city' => $this->input->post('city',TRUE),
                'postalCode' => $this->input->post('postalCode',TRUE),
                'longitude' => $this->input->post('longitude',TRUE),
                'latitude' => $this->input->post('latitude',TRUE),
                'hPhoneNum' => $this->input->post('hPhoneNum',TRUE),
                'covidCentre' => $this->input->post('covidCentre',TRUE),
                'services' => $this->input->post('services',TRUE),
                'hours' => $this->input->post('hours',TRUE),
	    );

            $this->Hospital_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/hospital'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Hospital_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hospital/update_action'),
		        'hId' => set_value('hId', $row->hId),
		        'hname' => set_value('hname', $row->hname),
		        'address' => set_value('address', $row->address),
		        'city' => set_value('city', $row->city),
		        'postalCode' => set_value('postalCode', $row->postalCode),
		        'longitude' => set_value('longitude', $row->longitude),
		        'latitude' => set_value('latitude', $row->latitude),
		        'hPhoneNum' => set_value('hPhoneNum', $row->hPhoneNum),
		        'covidCentre' => set_value('covidCentre', $row->covidCentre),
		        'services' => set_value('services', $row->services),
		        'hours' => set_value('hours', $row->hours),
	    );
            $this->load->view('user/hospital_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hospital'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('hId', TRUE));
        } else {
            $data = array(
                'hname' => $this->input->post('hname',TRUE),
                'address' => $this->input->post('address',TRUE),
                'city' => $this->input->post('city',TRUE),
                'postalCode' => $this->input->post('postalCode',TRUE),
                'longitude' => $this->input->post('longitude',TRUE),
                'latitude' => $this->input->post('latitude',TRUE),
                'hPhoneNum' => $this->input->post('hPhoneNum',TRUE),
                'covidCentre' => $this->input->post('covidCentre',TRUE),
                'services' => $this->input->post('services',TRUE),
                'hours' => $this->input->post('hours',TRUE),
	    );

            $this->Hospital_model->update($this->input->post('hId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/hospital'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Hospital_model->get_by_id($id);

        if ($row) {
            $this->Hospital_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/hospital'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/hospital'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('hname', 'hname', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('postalCode', 'postalcode', 'trim|required');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim|required|numeric');
        $this->form_validation->set_rules('latitude', 'latitude', 'trim|required|numeric');
        $this->form_validation->set_rules('hPhoneNum', 'hphonenum', 'trim|required');
        $this->form_validation->set_rules('covidCentre', 'covidcentre', 'trim|required');
        $this->form_validation->set_rules('services', 'services', 'trim|required');
        $this->form_validation->set_rules('hours', 'hours', 'trim|required');

	    $this->form_validation->set_rules('hId', 'hId', 'trim');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}