<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class History_model extends CI_Model{ 

    public $table = 'history';
    public $id = 'historyId';
    public $order = 'DESC'; 

    function __construct() {
        parent::__construct();
    }

    // get all  
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
        //$query = $this->db->select('*') 
                 //->from('history')  
                 //->where('history','tblusers_id',$tblusers_id);
                 //->where ('history.tblusers_id' , $this->session->userdata('id'));
        //return $query;
        //$this->db->where('history.tblusers_id', $this->session->userdata('id'));
        //$query = $this->db->select('*')
                  //->from('history')
                  //->join('hospital', 'hName = history.hId')
                  //->get('hName');
        //return $query;
    }
    
    function get_by_id($id) { 
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
        //$this->db->where('historyId', $id);
        //$this->db->select('history.*,hName');
        //$this->db->from('history');
        //$this->db->join('hospital', 'history.hId = hName');
        //$query = $this->db->get();
        //return $query->row();
    }

    // get all_active
    function get_all_active(){
        $this->db->select('*');
        $this->db->order_by($this->id, $this->order);
        $this->db->join('tblusers', 'history.tblusers_id = tblusers.id');
        //$this->db->where('history.userid', $this->session->userdata('id'));
        return $this->db->get($this->table)->result();
    }

    /*function get_history_by_user($tblusers_id){
        $this->db->select('*');
        $this->db->from('history');
        //$this->db->join('tblusers', 'detail_tblusers_id=tblusers_id');
        //$this->db->join('history', 'historyId=detail_historyId');
        $this->db->where('tblusers_id', $userid);
        $query = $this->db->get();
        return $query;
    }*/

    // get data by id
    //function get_by_id($id){
        //$this->db->where($this->id, $id);
        //return $this->db->get($this->table)->row();
    //}

    // get total rows
    function total_rows($q = NULL){
        $this->db->like('historyId', $q);
	    $this->db->or_like('date', $q);
	    $this->db->or_like('time', $q);
	    $this->db->or_like('hId', $q);
	    $this->db->or_like('dId', $q);
	    $this->db->or_like('donateId', $q);
	    $this->db->or_like('tblusers_id', $q);
	    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL){
        //$this->db->order_by($this->id, $this->order);
        //$this->db->like('historyId', $q);
	    //$this->db->or_like('date', $q);
	    //$this->db->or_like('time', $q);
	    //$this->db->or_like('hId', $q);
	    //$this->db->or_like('dId', $q);
	    //$this->db->or_like('donateId', $q);
	    //$this->db->or_like('tblusers_id', $q);
        //$this->db->limit($limit, $start);
        //$query = $this->db->select('*')
                  //->from('history')
                  //->join('hospital', 'hId = hospital.hId')
                  //->get('hospital');
        //return $query;
        $this->db->select('*');
        $this->db->from('history');
        $this->db->join('hospital', 'history.hId = hospital.hId');
        $this->db->join('blooddrive', 'history.dId = blooddrive.dId');
        $this->db->join('donatetype', 'history.donateId = donatetype.donateId');
        $this->db->join('tblusers', 'history.tblusers_id = tblusers.id');

        $this->db->where('history.tblusers_id', $this->session->userdata('uid'));
        return $this->db->get()->result();
    }

    // insert data
    function insert($data){
        $this->db->insert($this->table, $data);
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