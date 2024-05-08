<?php

class Profile extends CI_Controller{
 
    function __construct(){
        parent::__construct();

        $this->load->model('profileModel');
    
        if($this->session->userdata('status') != "online"){
            redirect(base_url("Dashboard"));
        }
    }

    function index(){

        $this->load->view('__header');
        $this->load->view('profile');
        $this->load->view('__footer');
    }

    function get_profile(){
        if($this->input->method() === 'post'){
            $data = array (
                'name'       => $this->input->post('name'),
                'type'       => $this->input->post('type'),
                'commission' => $this->input->post('commission'),
                'tax'        => $this->input->post('tax'),
                'bonuses'    => $this->input->post('bonuses'),

            );

            $a = $this->profileModel->getprofile($data);

            return redirect('Dashboard','refresh');
        }
    }
}