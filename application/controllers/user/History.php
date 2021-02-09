<?php

if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class History extends CI_Controller{
    function __construct(){
        parent::__construct(); 
        $this->load->model('History_model'); 
        $this->load->library('form_validation');
    }

    public function index(){
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start')); 
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/history?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user/history?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/history';
            $config['first_url'] = base_url() . 'user/history';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE; 
        $config['total_rows'] = $this->History_model->total_rows($q);
        $history = $this->History_model->get_limit_data($config['per_page'], $start, $q);

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

    /*public function get_history_by_user(){
        $userid=$this->input->post('tblusers_id');
        $data=$this->History_model->get_history_by_user($tblusers_id)->result();
        foreach ($data as $result) {
            $value[] = (float) $result->historyId; 
        }
        echo json_encode($value);
    }*/

    public function history(){
        if($this->session->set_userdata('uid') != '')  {     
            $this->load->model('History_model');
            $query = $this->db->query('SELECT * FROM history 
                        where history.tblusers_id = '.$this->session->userdata('uid'));
            //$query = $this->History_model->get_history_by_user($tblusers_id);
            $data['history_data'] = null; 
            if($query){
                $data['history_data'] =  $query;
            }
       }
       else{  
            redirect(site_url('user/history'));  
       }
       $this->load->view('user/history', $data);
    }

    public function read($id) 
    {
        $row = $this->History_model->get_by_id($id);
        if ($row) {
            $data = array(
		        'historyId' => $row->historyId,
		        'date' => $row->date,
		        'time' => $row->time,
		        'hId' => $row->hId,
		        'dId' => $row->dId,
		        'donateId' => $row->donateId,
		        'tblusers_id' => $row->tblusers_id,
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
	        'historyId' => set_value('historyId'),
	        'date' => set_value('date'),
	        'time' => set_value('time'),
	        'hId' => set_value('hId'),
	        'dId' => set_value('dId'),
	        'donateId' => set_value('donateId'),
	        'tblusers_id' => set_value('tblusers_id'),
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
		    'date' => $this->input->post('date',TRUE),
		    'time' => $this->input->post('time',TRUE),
		    'hId' => $this->input->post('hId',TRUE),
		    'dId' => $this->input->post('dId',TRUE),
		    'donateId' => $this->input->post('donateId',TRUE),
		    'tblusers_id' => $this->input->post('tblusers_id',TRUE),
	    );

            $this->History_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user/history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->History_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('history/update_action'),
		        'historyId' => set_value('historyId', $row->historyId),
		        'date' => set_value('date', $row->date),
		        'time' => set_value('time', $row->time),
		        'hId' => set_value('hId', $row->hId),
		        'dId' => set_value('dId', $row->dId),
		        'donateId' => set_value('donateId', $row->donateId),
		        'tblusers_id' => set_value('tblusers_id', $row->tblusers_id),
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
            $this->update($this->input->post('historyId', TRUE));
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'time' => $this->input->post('time',TRUE),
		'hId' => $this->input->post('hId',TRUE), 
		'dId' => $this->input->post('dId',TRUE),
		'donateId' => $this->input->post('donateId',TRUE),
		'tblusers_id' => $this->input->post('tblusers_id',TRUE),
	    );

            $this->History_model->update($this->input->post('historyId', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user/history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->History_model->get_by_id($id);

        if ($row) {
            $this->History_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user/history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('time', 'time', 'trim|required');
	$this->form_validation->set_rules('hId', 'hid', 'trim|required');
	$this->form_validation->set_rules('dId', 'did', 'trim|required');
	$this->form_validation->set_rules('donateId', 'donateid', 'trim|required');
	$this->form_validation->set_rules('tblusers_id', 'tblusers id', 'trim|required');

	$this->form_validation->set_rules('historyId', 'historyId', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}