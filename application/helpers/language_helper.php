<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('lang'))
{
	function lang()
	{
		$CI =& get_instance();
		$args = func_get_args();
		$line = call_user_func_array(array($CI->lang, 'fill'), $args);
		return $line;
	}
}
