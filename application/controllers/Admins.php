<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

/**************************** View Files ****************************/
	public function __construct()
	{
		parent:: __construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function showLogin()
	{
		$this->load->view('admins/login');
	}

	public function showDashBoard()
	{
		$this->load->view('admins/dashboard');
	}

	public function showCreateUser()
	{
		$this->load->view('admins/create_user');
	}

	public function showEditUser()
	{
		$this->load->view('admins/edit_user');
	}


/**************************** Calling Model ****************************/

}
