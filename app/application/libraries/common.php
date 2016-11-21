<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Class Common
* 
* @package   FCFS - Horse Racing
* @author    Creater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @author    Updater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @copyright 2015 The FCFS
*/
class Common {
	
	/* 
	|----------------------------------------------------------------
	| Variable
	| $ci is get instance framework codeigniter
	|----------------------------------------------------------------
	*/
	private $ci;

	/*
	|----------------------------------------------------------------
	| Construct function 
	|----------------------------------------------------------------
	*/
  	public function __construct() {
    	$this->ci =& get_instance();
	}

	/*
	|----------------------------------------------------------------
	| Function set lang display on website
	| Date: 02/02/2015
	| @param 
	| @return 
	|----------------------------------------------------------------
	*/
	public function set_lang($p_lang = FILE_EN)
	{
		//Set to cookie
		$cookie_time	=	3600*24*30;				
        $this->ci->input->set_cookie('lang', $p_lang, $cookie_time);  
		//Load lang 
        $this->ci->lang->load($p_lang, FOLDER_LANG);
	}
}