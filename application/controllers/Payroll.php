<?php 

class Payroll extends CI_Controller{
 
	function __construct(){
		parent::__construct();

		$this->load->model('PayrollModel');
		if($this->session->userdata('status') != "online"){
			redirect(base_url("Dashboard"));
		}
	}
 
	function index(){
		$this->load->view('__header');
		$this->load->view('payroll');
		$this->load->view('__footer');
	}

	function get_pdf(){
		if($this->input->method() === 'post'){
			$data = array (
				'adviser'    => $this->input->post('adviser'),
				'date'       => $this->input->post('date'),
				'period'     => $this->input->post('period'),
				'clients'    => $this->input->post('clients'),
				'bonuses'    => $this->input->post('bonuses'),

			);

			$a = $this->PayrollModel->getpdf($data);

			return redirect('pdf','refresh');
		}
	}



}