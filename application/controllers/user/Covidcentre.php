<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Covidcentre extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Covidcentre_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/covidcentre' . urlencode($q);
            $config['first_url'] = base_url() . 'user/covidcentre' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/covidcentre';
            $config['first_url'] = base_url() . 'user/covidcentre';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Covidcentre_model->total_rows($q);
        $covidcentre = $this->Covidcentre_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'covidcentre_data' => $covidcentre,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/covidcentre', $data);
    }

    public function read($id) 
    {
        $row = $this->Covidcentre_model->get_by_id($id);
        if ($row) {
            $data = array(
		'centreId' => $row->centreId,
		'name' => $row->name,
		'address' => $row->address,
		'city' => $row->city,
		'postalCode' => $row->postalCode,
		'longitude' => $row->longitude,
		'latitude' => $row->latitude,
		'contactNum' => $row->contactNum,
		'sector' => $row->sector,
		'services' => $row->services,
		'hours' => $row->hours,
	    );
            $this->load->view('user/covidcentre_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/covidcentre_read'));
        }
    }

    /*public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('covidcentre/create_action'),
	    'centreId' => set_value('centreId'),
	    'name' => set_value('name'),
	    'address' => set_value('address'),
	    'city' => set_value('city'),
	    'postalCode' => set_value('postalCode'),
	    'longitude' => set_value('longitude'),
	    'latitude' => set_value('latitude'),
	    'contactNum' => set_value('contactNum'),
	    'sector' => set_value('sector'),
	    'services' => set_value('services'),
	    'hours' => set_value('hours'),
	);
        $this->load->view('covidcentre/covidcentre_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'address' => $this->input->post('address',TRUE),
		'city' => $this->input->post('city',TRUE),
		'postalCode' => $this->input->post('postalCode',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'latitude' => $this->input->post('latitude',TRUE),
		'contactNum' => $this->input->post('contactNum',TRUE),
		'sector' => $this->input->post('sector',TRUE),
		'services' => $this->input->post('services',TRUE),
		'hours' => $this->input->post('hours',TRUE),
	    );

            $this->Covidcentre_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('covidcentre'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Covidcentre_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('covidcentre/update_action'),
		'centreId' => set_value('centreId', $row->centreId),
		'name' => set_value('name', $row->name),
		'address' => set_value('address', $row->address),
		'city' => set_value('city', $row->city),
		'postalCode' => set_value('postalCode', $row->postalCode),
		'longitude' => set_value('longitude', $row->longitude),
		'latitude' => set_value('latitude', $row->latitude),
		'contactNum' => set_value('contactNum', $row->contactNum),
		'sector' => set_value('sector', $row->sector),
		'services' => set_value('services', $row->services),
		'hours' => set_value('hours', $row->hours),
	    );
            $this->load->view('covidcentre/covidcentre_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('covidcentre'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('centreId', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'address' => $this->input->post('address',TRUE),
		'city' => $this->input->post('city',TRUE),
		'postalCode' => $this->input->post('postalCode',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'latitude' => $this->input->post('latitude',TRUE),
		'contactNum' => $this->input->post('contactNum',TRUE),
		'sector' => $this->input->post('sector',TRUE),
		'services' => $this->input->post('services',TRUE),
		'hours' => $this->input->post('hours',TRUE),
	    );

            $this->Covidcentre_model->update($this->input->post('centreId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('covidcentre'));
        }
    }*/
    
    public function delete($id) 
    {
        $row = $this->Covidcentre_model->get_by_id($id);

        if ($row) {
            $this->Covidcentre_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/covidcentre_list'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/covidcentre_list'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('city', 'city', 'trim|required');
	$this->form_validation->set_rules('postalCode', 'postalcode', 'trim|required');
	$this->form_validation->set_rules('longitude', 'longitude', 'trim|required|numeric');
	$this->form_validation->set_rules('latitude', 'latitude', 'trim|required|numeric');
	$this->form_validation->set_rules('contactNum', 'contactnum', 'trim|required');
	$this->form_validation->set_rules('sector', 'sector', 'trim|required');
	$this->form_validation->set_rules('services', 'services', 'trim|required');
	$this->form_validation->set_rules('hours', 'hours', 'trim|required');

	$this->form_validation->set_rules('centreId', 'centreId', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Covidcentre.php */
/* Location: ./application/controllers/Covidcentre.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-01-30 18:04:58 */
/* http://harviacode.com */