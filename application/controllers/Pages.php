<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('static/home');
		$this->load->view('templates/footer');
	}

	function login()
	{
		$this->load->view('static/login');
	}
	function signup()
	{
		$this->load->view('static/signup');
	}
	function dashboard()
	{
		$this->load->view('static/dashboard');
	}
	public function new_user_registration()
	{
		$data = $this->input->post();
		$data = $this->security->xss_clean($data);
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('fail', 'Fill all fields! ');
			redirect(base_url() . "index.php/pages/login");
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone_number' => $this->input->post('phone_number'),
				'password' => $this->input->post('password'),
			);
			$status = $this->user_model->new_user_registration($data);
			if ($status == 201) {
				$this->session->set_flashdata('success', 'Registration successful! ');
				redirect(base_url() . "index.php/pages/login");
			} else {
				$this->session->set_flashdata('fail', 'Some error has been occurred ! Please try after some time ');
				redirect(base_url() . "index.php/pages/login");
			}
		}
	}
}
