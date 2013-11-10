<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('lang'))
{
	if (function_exists('t'))
	{
		// runkit_function_rename('t','t_old');
	}

	function tt()
	{
		$CI =& get_instance();
		$args = func_get_args();
		$line = call_user_func_array(array($CI->lang, 'fill'), $args);
		//return $line;
		echo $line; // <<<==========
	}

	function tr()
	{
		$CI =& get_instance();
		$args = func_get_args();
		$line = call_user_func_array(array($CI->lang, 'fill'), $args);
		return $line; // <<<==========
	}
}
