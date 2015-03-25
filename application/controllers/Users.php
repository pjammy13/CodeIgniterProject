<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->view('users/login');
	}

	public function showRegister()
	{
		$this->load->view('users/register');
	}

	public function showDashBoard()
	{
		$showUsers = $this->User->showUsers();
		$this->load->view('users/dashboard', array('showUsers' => $showUsers));
	}

	public function showEditUser()
	{
		$this->load->view('users/edit');
	}

	public function showHomePage()
	{
		$this->load->view('users/home_page');
	}

	public function create()
	{
		$userInfo = $this->User->create($this->input->post());
		$this->session->set_userdata(array('userInfo' => $userInfo));
		redirect('users/show/dashboard');
	}
      
/**************************** Calling Model ****************************/

}
