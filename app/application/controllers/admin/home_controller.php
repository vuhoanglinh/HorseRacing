<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Class Home Controller
* 
* @package   FCFS - Horse Racing
* @author    Creater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @author    Updater: Vu Hoang Linh - <vuhoanglinh2002@gmail.com>
* @copyright 2015 The FCFS
*/
class Home_controller extends CI_Controller {

	/*
	|----------------------------------------------------------------
	| Construct function 
	| Inherit construct parent (CI)
	|----------------------------------------------------------------
	*/
	public function __construct()
	{
		parent:: __construct();

		/*
		|----------------------------------------------------------------
		|Load common library
		|Call function set lang
		|----------------------------------------------------------------
		*/
		$this->load->library("common");
		$this->common->set_lang();
		
	}

	/**
	* Function view transaction history
	* Date: 02/02/2015
	* URL Page: admin/dashboard
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show Dashboard Page
	*/
	public function index()
	{		
		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Trans History View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view");
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/trans_history_view");
		$this->load->view("admin/footer_view");
	}

	/**
	* Function view add agent
	* Date: 02/02/2015
	* URL Page: admin/add_agent
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show Add agent
	*/
	public function add_agent()
	{					
		
		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Add agent View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view");
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/add_agent_view");
		$this->load->view("admin/footer_view");
	}

	/**
	* Function view add user
	* Date: 02/02/2015
	* URL Page: admin/add_user
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show Add user
	*/
	public function add_user()
	{			
		$p_arr 	=	array(
						'p_custom_css'		=>	$this->load->view('admin/css/css_add_new_user_view', '', TRUE),
						'p_custom_js' 		=>	$this->load->view('admin/js/js_add_new_user_view', '', TRUE)
					);
		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Add user View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view", $p_arr);
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/add_user_view");
		$this->load->view("admin/footer_view");
	}

	/**
	* Function view show all
	* Date: 02/02/2015
	* URL Page: admin/show_all
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show all
	*/
	public function show_all()
	{	

		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Show all View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view");
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/show_all_view");
		$this->load->view("admin/footer_view");
	}

	/**
	* Function view report
	* Date: 02/02/2015
	* URL Page: admin/report
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show all
	*/
	public function report()
	{	

		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Add agent View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view");
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/report_view");
		$this->load->view("admin/footer_view");
	}

	/**
	* Function view generation statement
	* Date: 02/02/2015
	* URL Page: admin/gen_statement
	* Rewrite routing: file config/routes.php
	* @param 
	* @return Show generation statement view
	*/
	public function gen_statement()
	{	

		/*
		|----------------------------------------------------------------
		| Load Head View
		| Load Header View
		| Load Left View
		| Load Gen statement View
		| Load Footer View
		|----------------------------------------------------------------
		*/
		$this->load->view("admin/head_view");
		$this->load->view("admin/header_view");
		$this->load->view("admin/left_view");
		$this->load->view("admin/gen_statement_view");
		$this->load->view("admin/footer_view");
	}
}