<?php
/**
 * Sharif Judge online judge
 * @file Scoreboard_model.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoreboard_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	private function _scoreboard($assignment_id){
		$assignment = $this->assignment_model->assignment_info($assignment_id);
		$submissions = $this->db->get_where('final_submissions', array('assignment'=>$assignment_id))->result_array();
		$scoreboard = array(
			'username' => array(),
			'score' => array(),
			'submit_penalty' => array()
		);
		$total_score = array();
		$penalty = array();
		$users = array();
		$finish = strtotime($assignment['finish_time']);
		$submit_penalty = $this->settings_model->get_setting('submit_penalty');
		$scores = array();
		foreach ($submissions as $submission){

			$pi = $this->assignment_model->problem_info($assignment_id, $submission['problem']);

			$pre_score = ceil($submission['pre_score']*$pi['score']/10000);
			if ($submission['coefficient'] === 'error')
				$final_score = 0;
			else
				$final_score = ceil($pre_score*$submission['coefficient']/100);
			$delay = strtotime($submission['time'])-strtotime($assignment['start_time']);
			$scores[$submission['username']][$submission['problem']]['score'] = $final_score;
			$scores[$submission['username']][$submission['problem']]['time'] = $delay;

			if ( ! isset($total_score[$submission['username']]))
				$total_score[$submission['username']] = 0;
			if ( ! isset($penalty[$submission['username']]))
				$penalty[$submission['username']] = 0;

			$total_score[$submission['username']] += $final_score;
			$penalty[$submission['username']] += $delay+$submission['submit_count']*$submit_penalty;
			$users[$submission['username']] = 1;
		}
		foreach($users as $user => $tmp){
			array_push($scoreboard['username'], $user);
			array_push($scoreboard['score'], $total_score[$user]);
			array_push($scoreboard['submit_penalty'], $penalty[$user]);
		}
		array_multisort(
			$scoreboard['score'], SORT_NUMERIC,SORT_DESC,
			$scoreboard['submit_penalty'], SORT_NUMERIC,SORT_ASC,
			$scoreboard['username']
		);
		return array($scores, $scoreboard);
	}


	// ------------------------------------------------------------------------


	public function update_scoreboard($assignment_id) {
		$data = array();
		$scoreboard_enabled = $this->db->select('scoreboard')->get_where('assignments', array('id'=>$assignment_id))->row()->scoreboard;
		if ($assignment_id == 0 OR  ! $scoreboard_enabled )
			return;
		list ($scores, $scoreboard) = $this->_scoreboard($assignment_id);
		$data['problems'] = $this->assignment_model->all_problems($assignment_id);
		$data['scores'] = $scores;
		$data['scoreboard'] = $scoreboard;
		$scoreboard_table = $this->load->view('pages/scoreboard_table', $data, TRUE);
		$query = $this->db->select('assignment')->get_where('scoreboard', array('assignment'=>$assignment_id));
		if ($query->num_rows()==0)
			$this->db->insert('scoreboard', array('assignment'=>$assignment_id, 'scoreboard'=>$scoreboard_table));
		else
			$this->db->where('assignment', $assignment_id)->update('scoreboard', array('scoreboard'=>$scoreboard_table));
	}


	// ------------------------------------------------------------------------


	public function get_scoreboard($assignment_id) {
		$query =  $this->db->select('scoreboard')->get_where('scoreboard', array('assignment'=>$assignment_id));
		if ($query->num_rows()!=1)
			return 'Scoreboard not found';
		else
			return $query->row()->scoreboard;
	}

}