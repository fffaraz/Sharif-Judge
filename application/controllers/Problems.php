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

		$this->problems = $this->assignment_model->all_problems($this->assignment['id']);
		$this->assignment_root = $this->settings_model->get_setting('assignments_root');

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
				'all_problems' => $this->problems,
				'title' => 'Problems',
				'style' => 'main.css',
				'success_messages' => $this->success_messages,
				'error_messages' => $this->error_messages
			);

		if(!isset($this->assignment['participants']))
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/top_bar', $data);
			$this->load->view('templates/side_bar',array('selected'=>'problems'));
			$data['error_messages'] = 'You are not registered for submitting.';
			$this->load->view('errors/error_general', $data);
			$this->load->view('templates/footer');
			return;
		}

		if ( ! $this->assignment_model->is_participant($this->assignment['participants'], $this->username) )
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/top_bar', $data);
			$this->load->view('templates/side_bar',array('selected'=>'problems'));
			$data['error_messages'] = 'You are not registered for submitting.';
			$this->load->view('errors/error_general', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			for ($i=0; $i < count($this->problems); $i++) 
			{ 
				$this->problems[$i]['question'] = $this->_getQuestion($this->problems[$i]['id']);
			}
			$data['all_problems'] = $this->problems;

			$this->form_validation->set_rules('assignment_select', 'Assignment', 'required|integer|greater_than[0]');

			if ($this->form_validation->run())
			{
				$this->assignment = $this->assignment_model->assignment_info($this->input->post('assignment_select'));
				$this->user_model->select_assignment($this->username, $this->assignment['id']);
			}

			$data['assignment'] = $this->assignment;

			$this->load->view('templates/header', $data);
			$this->load->view('pages/problems', $data);
			$this->load->view('templates/footer');
		}
	}

	public function _getQuestion($id)
	{
		$q = rtrim($this->assignment_root, '/').'/assignment_'.$this->assignment['id'].'/p'.$id.'/question.html';
		if( !file_exists($q))
		{
			return tr('Question not found');
		}
		else
		{
			return file_get_contents($q);
		}
	}


}
