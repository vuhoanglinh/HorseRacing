<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Class Login Controller
* 
* @package   FCFS - Horse Racing
* @author    Creater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @author    Updater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @copyright 2015 The FCFS
*/
class Login_controller extends CI_Controller {

	/*
	|----------------------------------------------------------------
	| Construct function 
	| Inherit construct parent (CI)
	|----------------------------------------------------------------
	*/
	public function __construct()
	{
		parent:: __construct();
	}

	/**
	* Function view supper admin login page
	* Date: 02/02/2015
	* URL Page: admin/super_login
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show Login Page
	*/
	public function index()
	{	
		/*
		|----------------------------------------------------------------
		|Load common library
		|Call function set lang
		|----------------------------------------------------------------
		*/
		$this->load->library("common");
		$this->common->set_lang();

		/*
		|----------------------------------------------------------------
		|Load form helper
		|----------------------------------------------------------------
		*/
		$this->load->helper('form');



		
		/*
		|----------------------------------------------------------------
		| Load Login View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/login_view");
	}
}