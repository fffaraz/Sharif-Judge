<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problems extends CI_Controller
{

	var $username;
	var $assignment;
	var $user_level;

	var $error_messages;
	var $success_messages;
	var $edit_problem;
	var $edit;


	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');

		$this->username = $this->session->userdata('username');
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->user_level = $this->user_model->get_user_level($this->username);

		$this->error_messages = array();
		$this->success_messages = array();
		$this->edit_assignment = array();
		$this->edit = FALSE;
	}


	// ------------------------------------------------------------------------


	public function index()
	{
		$data = array(
			'username' => $this->username,
			'user_level' => $this->user_level,
			'all_assignments' => $this->assignment_model->all_assignments(),
			'title' => 'Assignments',
			'style' => 'main.css',
			'success_messages' => $this->success_messages,
			'error_messages' => $this->error_messages
		);

		$this->form_validation->set_rules('assignment_select', 'Assignment', 'required|integer|greater_than[0]');

		if ($this->form_validation->run())
		{
			$this->assignment = $this->assignment_model->assignment_info($this->input->post('assignment_select'));
			$this->user_model->select_assignment($this->username, $this->assignment['id']);
		}

		$data['assignment'] = $this->assignment;

		$this->load->view('templates/header', $data);
		$this->load->view('pages/assignments', $data);
		$this->load->view('templates/footer');
	}

}
