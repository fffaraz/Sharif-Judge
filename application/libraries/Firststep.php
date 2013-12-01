<?php defined('BASEPATH') or exit('No direct script access allowed');

class Firststep
{
	function Firststep()
	{
		$loginPage = 'http://www.firststep.ir/user/login?destination=http://www.firststep.ir/judge';

		chdir("..");
		global $base_url;
		$base_url="http://www.firststep.ir";

		define('DRUPAL_ROOT', getcwd());
		include_once './includes/bootstrap.inc';

		drupal_bootstrap(DRUPAL_BOOTSTRAP_SESSION);
		global $user;
		chdir("judge");
		//print '<pre>'.print_r($user, 1).'</pre>';


		$ok = $user->{'uid'} !== 0 ? 1:0;

		$CI =& get_instance();
		$CI->load->driver('session');
		
		if($ok)
		{
			
			$CI->load->model('user_model');

			$username=$user->{'name'};

			if(! $CI->user_model->have_user($username))
			{
				$email = $user->{'mail'};
				$result = $CI->user_model->add_user($username, $email, '1234567890', 'student');
				if ($result !== TRUE) die($result);
			}
			
			$login_data = array(
					'username'  => $username,
					'logged_in' => TRUE
				);
			$CI->session->set_userdata($login_data);
			$CI->user_model->update_login_time($username);
		}
		else
		{
			$CI->session->sess_destroy();
			header("Location: ". $loginPage);
		}
	}
}
