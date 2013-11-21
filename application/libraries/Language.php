<?php

class Language
{
	public function Language()
	{
		$CI =& get_instance();
		/*
		$CI->load->driver('session');
        if ( ! $CI->session->userdata('lang'))
            $CI->lang->load('global', $CI->session->userdata('lang'));
        else
        */
            $CI->lang->load('global');
        $CI->load->helper('language');
	}
}
