<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader 
{
    public function view($view, $vars = array(), $return = FALSE)
    {
    	$view = "ctalk/" . $view;
    	parent::view($view, $vars, $return);
    }
}
