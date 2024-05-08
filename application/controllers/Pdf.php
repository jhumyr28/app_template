<?php 
 
class Pdf extends CI_Controller{
 
	function __construct(){
		parent::__construct();

		$this->load->model('pdfModel');
	
		if($this->session->userdata('status') != "online"){
			redirect(base_url("Dashboard"));
		}
	}
 
	function index(){
		$data['data'] = $this->pdfModel->selectData();;

		$this->load->view('__header');
		$this->load->view('pdf', $data);
		$this->load->view('__footer');
	}
}