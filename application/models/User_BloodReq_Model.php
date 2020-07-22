<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_BloodReq_Model extends CI_Model
{

    public $table = 'bloodreq';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all 
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	    $this->db->or_like('branch', $q);
	    $this->db->or_like('date', $q);
	    $this->db->or_like('time', $q);
	    $this->db->or_like('bloodType', $q);
	    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	    $this->db->or_like('branch', $q);
	    $this->db->or_like('date', $q);
	    $this->db->or_like('time', $q);
	    $this->db->or_like('bloodType', $q);
	    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

}