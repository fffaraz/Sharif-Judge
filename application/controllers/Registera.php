<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registera extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');

		$this->username = $this->session->userdata('username');
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->user_level = $this->user_model->get_user_level($this->username);
	}

	private function _checkstatus($id)
	{
		$this->buy_assignment = $this->assignment_model->assignment_info($id);
		$data['buy_assignment'] = $this->buy_assignment;
		$data['has_error'] = false;

		// check limit
		if($this->buy_assignment['usedcounter'] >= $this->buy_assignment['uselimit'])
		{
			$data['has_error'] = true;
			$data['error'] = "Limit reached";
		}

		// check price : -2 => disabled
		if($this->buy_assignment['price'] <= -2)
		{
			$data['has_error'] = true;
			$data['error'] = "Disabled";
		}

		if($data['has_error'] == false)
		{
			// check price : -1 => only code
			if($this->buy_assignment['price'] == -1)
			{
				$data['show_code'] = true;
				$data['show_buy'] = false;
				$data['show_free'] = false;
			}
			// check price : 0 => free
			if($this->buy_assignment['price'] == 0)
			{
				$data['show_code'] = true;
				$data['show_buy'] = false;
				$data['show_free'] = true;
			}
			// check price : + => kharid
			if($this->buy_assignment['price'] > 0)
			{
				$data['show_code'] = true;
				$data['show_buy'] = true;
				$data['show_free'] = false;
			}
		}
		return $data;
	}

	public function index()
	{
		redirect('assignments');
	}

	public function register($id)
	{
		$data = array(
			'username'=>$this->username,
			'user_level' => $this->user_level,
			'all_assignments'=>$this->assignment_model->all_assignments(),
			'assignment' => $this->assignment,
			'title'=>'Register Assignment',
			'style'=>'main.css'
		);

		$result = $this->_checkstatus($id);
		$data = array_merge($result, $data);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/registera', $data);
		$this->load->view('templates/footer');
	}

	public function freeactivate($id)
	{
		$result = $this->_checkstatus($id);
		if($result['has_error'] == false && $result['show_free'] == true)
		{
			$this->assignment_model->add_participant($id, $this->username);
			$this->_log('freeactivate');
			$this->assignment_model->incUsed($id);
			
		}
		redirect('assignments');
	}

	public function codeactivate($id)
	{
		$result = $this->_checkstatus($id);
		if($result['has_error'] == false && $result['show_code'] == true)
		{
			$code = $this->input->post('code');
			if($this->assignment_model->is_validcode($this->buy_assignment['codes'], $code))
			{
				$this->assignment_model->add_participant($id, $this->username);
				$this->assignment_model->del_code($id, $code);
				$this->_log('codeactivate', $code);
				$this->assignment_model->incUsed($id);
			}
			else
			{
				die('Invalid code');
			}
			
		}
		redirect('assignments');
	}

	public function buyactivate($id)
	{
		$result = $this->_checkstatus($id);
		if($result['has_error'] == false && $result['show_buy'] == true)
		{

		}
	}

	private function _log($result='', $code='', $price=0)
	{
		$log['username'] = $this->username;
		$log['assignment'] = $this->buy_assignment['id'];
		$log['time'] = date('Y-m-d H:i:s');
		$log['result'] = $result;
		$log['code'] = $code;
		$log['price'] = $price;
		$this->db->insert('registerlog', $log);
	}

}
