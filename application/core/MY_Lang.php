<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Lang extends CI_Lang
{

    function MY_Lang()
    {
        parent::CI_Lang();
    }
    
    /**
     * Fetch a single line of text from the language array. Takes variable number
     * of arguments and supports wildcards in the form of '%1', '%2', etc.
     * Overloaded function.
     *
     * @access public
     * @return mixed false if not found or the language string
     */
    public function fill()
    {
        //get the arguments passed to the function
        $args = func_get_args();
        
        //count the number of arguments
        $c = count($args);
        
        //if one or more arguments, perform the necessary processing
        if ($c)
        {
            //first argument should be the actual language line key
            //so remove it from the array (pop from front)
            $line = array_shift($args);
            
            //check to make sure the key is valid and load the line
            //$line = ($line == '' OR ! isset($this->language[$line])) ? FALSE : $this->language[$line];
            $line = $this->line($line);
            
            //if the line exists and more function arguments remain
            //perform wildcard replacements
            if ($line && $args)
            {
                $i = 1;
                foreach ($args as $arg)
                {
                    $line = preg_replace('/\%'.$i.'/', $arg, $line);
                    $i++;
                }
            }
        }
        else
        {
            //if no arguments given, no language line available
            $line = false;
        }
        
        return $line;
    }
}

/*

// in english
$lang['some_key'] = 'Some string with %1 %2.';

// in another language
$lang['some_key'] = 'Some string %2 with %1.';

// the actual usage
echo $this->lang->fill('some_key','first','second'); 

*/