<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login');
	}
 
	function log(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$user = $this->M_login->status("user",$where);
		if($user->num_rows() > 0){
			foreach ($user->result() as $xx) {
                    $sess_data['username'] = $xx->username;
                    $sess_data['role'] = $xx->role;
					$sess_data['status'] = "online"; 
                    $this->session->set_userdata($sess_data);
                }
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "<script type='text/javascript'>alert('Unregistered Username or Password');window.location = './';</script>";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
