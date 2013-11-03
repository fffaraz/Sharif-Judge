<?php
/**
 * Sharif Judge online judge
 * @file Scoreboard.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoreboard extends CI_Controller
{

	var $username;
	var $assignment;
	var $user_level;


	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		if ($this->input->is_cli_request())
			return;
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
		$this->username = $this->session->userdata('username');
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->user_level = $this->user_model->get_user_level($this->username);
	}


	// ------------------------------------------------------------------------


	public function index($input = FALSE)
	{
		if ($input !== FALSE)
			show_404();

		$this->load->model('scoreboard_model');

		$data = array(
			'username' => $this->username,
			'user_level' => $this->user_level,
			'all_assignments' => $this->assignment_model->all_assignments(),
			'assignment' => $this->assignment,
			'title' => 'Scoreboard',
			'style' => 'main.css',
			'scoreboard' => $this->scoreboard_model->get_scoreboard($this->assignment['id'])
		);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/scoreboard', $data);
		$this->load->view('templates/footer');
	}


	public function update($assignment_id) {
		if (!$this->input->is_cli_request())
			show_404();
		$this->load->model('scoreboard_model');
		$this->scoreboard_model->update_scoreboard($assignment_id);
	}


}