<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Location extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_Location_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $location1 = $this->User_Location_Model->get_location_data(1);
        $location2 = $this->User_Location_Model->get_location_data2(1);

        $location = array_merge($location1, $location2);

        $data = array(
            'location_data' => $location
        );

        $this->load->view('user/location', $data);
    }
}