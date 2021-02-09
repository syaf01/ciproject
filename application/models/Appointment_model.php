<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Appointment_model extends CI_Model{
  
    public $table = 'appointment';
    public $id = 'appId';
    public $order = 'DESC';

    function __construct(){
        parent::__construct(); 
    }

    // get all
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id){
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row(); 
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('appId', $q);
	    $this->db->or_like('tblusers_id', $q);
	    $this->db->or_like('donateId', $q);
	    $this->db->or_like('bloodDrive', $q);
	    $this->db->or_like('request_date', $q);
	    $this->db->or_like('comment', $q);
	    $this->db->or_like('status', $q);
	    $this->db->or_like('created_at', $q);
	    $this->db->or_like('updated_at', $q);
	    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search 
    function get_limit_data($limit, $start = 1, $q = NULL) {
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->join('donatetype', 'appointment.donateId = donatetype.donateId');
        $this->db->join('tblusers', 'appointment.tblusers_id = tblusers.id');
        $this->db->join('blooddrive', 'appointment.bloodDrive = blooddrive.did');

        $this->db->where('appointment.tblusers_id', $this->session->userdata('uid'));
        return $this->db->get()->result();
        //$this->db->order_by($this->id, $this->order);
        //$this->db->like('appId', $q);
	    //$this->db->or_like('your_name', $q);
	    //$this->db->or_like('emailId', $q);
	    //$this->db->or_like('mobileNumber', $q);
	    //$this->db->or_like('donateId', $q);
	    //$this->db->or_like('request_date', $q);
	    //$this->db->or_like('comment', $q);
	    //$this->db->limit($limit, $start);
        //return $this->db->get($this->table)->result();
    }

    // insert data
    //function insert($data){
        //$this->db->insert($this->table, $data);
    //}

    // insert data
    function insert($data){ 
		$this->db->insert($this->table, $data);

		$sql_query=$this->db->insert('appointment',$data);
		if($sql_query){
			$this->session->set_flashdata('success', 'Appointment is successfully schedule.');
			redirect('user/appointment');
		}
		else{
			$this->session->set_flashdata('error', 'Sorry, something went wrong.');
			redirect('user/appointment');
		}
	}

    // update data
    function update($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}