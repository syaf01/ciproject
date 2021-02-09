<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_Location_Model extends CI_Model{

    //public $table = 'hospital';
    //public $id = 'hId';
    //public $order = 'DESC';

    function __construct(){
        parent::__construct();
    }

    // get all
    function get_all(){
        $this->db->order_by($this->id, $this->order); 
        return $this->db->get($this->table)->result();
    }

	/*function total_rows($q = NULL) { 
        $this->db->like('hId', $q);
	    $this->db->or_like('hName', $q);
	    $this->db->or_like('address', $q);
	    $this->db->or_like('city', $q);
	    $this->db->or_like('postalCode', $q); 
	    $this->db->or_like('longitude', $q);
	    $this->db->or_like('latitude', $q);
	    $this->db->or_like('hPhoneNum', $q);
	    $this->db->or_like('covidCentre', $q);
	    $this->db->or_like('services', $q);
	    $this->db->or_like('hours', $q);
	    $this->db->from($this->table);
        return $this->db->count_all_results(); 
    }*/
	
	function get_location_data($start) {
		$this->db->select('*');
        $this->db->from('hospital');
        return $this->db->get()->result();
    }

    function get_location_data2($start) {
		$this->db->select('*');
        $this->db->from('blooddrive');
        return $this->db->get()->result();
    }

}