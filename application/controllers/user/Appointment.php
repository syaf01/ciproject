<?php

if (!defined('BASEPATH')) 
    exit('No direct script access allowed');
 
class Appointment extends CI_Controller
{
    function __construct() 
    { 
        parent::__construct();
        $this->load->model('Appointment_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start')); 
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'appointment/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'appointment/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'appointment/index.html';
            $config['first_url'] = base_url() . 'appointment/index.html';
        }

        $config['per_page'] = 10; 
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Appointment_model->total_rows($q);
        $appointment = $this->Appointment_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'appointment_data' => $appointment,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        //$data['appointment_data']=$this->Appointment_model->get_posts(); 

        $this->load->view('user/appointment', $data);
        //$this->load->view('user/appointment_form', $data);
    }

    public function appointment(){
        if($this->session->set_userdata('uid') != '')  {     
            $this->load->model('Appointment_model');
            $query = $this->db->query('SELECT * FROM appointment 
                        where appointment.tblusers_id = '.$this->session->userdata('uid'));
            $data['appointment_data'] = null;
            if($query){
                $data['appointment_data'] =  $query;
            }
       }
       else{  
            redirect(site_url('user/appointment'));  
            //redirect(site_url('user/appointment_form'));  
       }
       $this->load->view('user/appointment', $data);
       
    }

    public function read($id) 
    {
        $row = $this->Appointment_model->get_by_id($id);
        if ($row) {
            $data = array(
		        'appId' => $row->appId,
		        'tblusers_id' => $row->tblusers_id,
		        'donateId' => $row->donateId,
		        'bloodDrive' => $row->bloodDrive,
		        'request_date' => $row->request_date,
		        'comment' => $row->comment,
		        'status' => $row->status,
	        );
            $this->load->view('user/appointment_read', $data); 
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/appointment')); 
        }
    }

    public function create()  
    {
        $data = array(
            'button' => 'Book',
            'action' => site_url('user/Appointment/create_action'),
	        'appId' => set_value('appId'),
	        'tblusers_id' => set_value('tblusers_id'),
	        'donateId' => set_value('donateId'),
	        'bloodDrive' => set_value('bloodDrive'),
	        'request_date' => set_value('request_date'),
	        'comment' => set_value('comment'),
	        'status' => set_value('status'),
	);
        $this->load->view('user/appointment_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		        'tblusers_id' => $this->input->post('tblusers_id',TRUE),
		        'donateId' => $this->input->post('donateId',TRUE),
		        'bloodDrive' => $this->input->post('bloodDrive',TRUE),
		        'request_date' => $this->input->post('request_date',TRUE),
		        'comment' => $this->input->post('comment',TRUE),
		        'status' => $this->input->post('status',TRUE),
                
                'tblusers_id' => $this->session->userdata('uid')
	        );
            $this->Appointment_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/appointment'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Appointment_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/appointment/update_action'), 
		        'appId' => set_value('appId', $row->appId),
		        'tblusers_id' => set_value('tblusers_id', $row->tblusers_id),
		        'donateId' => set_value('donateId', $row->donateId),
		        'bloodDrive' => set_value('bloodDrive', $row->bloodDrive),
		        'request_date' => set_value('request_date', $row->request_date),
		        'comment' => set_value('comment', $row->comment),
		        'status' => set_value('status', $row->status),
	        );
            $this->load->view('user/appointment_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found'); 
            redirect(site_url('appointment'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('appId', TRUE));
        } else {
            $data = array(
		        'tblusers_id' => $this->input->post('tblusers_id',TRUE),
		        'donateId' => $this->input->post('donateId',TRUE),
		        'bloodDrive' => $this->input->post('bloodDrive',TRUE),
		        'request_date' => $this->input->post('request_date',TRUE),
		        'comment' => $this->input->post('comment',TRUE),
		        'status' => $this->input->post('status',TRUE),
	        );
            $this->Appointment_model->update($this->input->post('appId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/appointment'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Appointment_model->get_by_id($id);

        if ($row) {
            $this->Appointment_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/appointment'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/appointment'));
        }
    }

    public function _rules(){
	    $this->form_validation->set_rules('tblusers_id', 'tblusers id', 'trim|required');
	    $this->form_validation->set_rules('donateId', 'donateid', 'trim|required');
	    $this->form_validation->set_rules('bloodDrive', 'blooddrive', 'trim|required');
	    $this->form_validation->set_rules('request_date', 'request date', 'trim|required');
	    $this->form_validation->set_rules('comment', 'comment', 'trim|required');
	    $this->form_validation->set_rules('status', 'status', 'trim|required');
	    $this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	    $this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	    $this->form_validation->set_rules('appId', 'appId', 'trim');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
