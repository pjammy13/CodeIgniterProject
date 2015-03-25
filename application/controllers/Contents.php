<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Controller {

/**************************** View Files ****************************/
	public function __construct()
	{
		parent:: __construct();
		$this->output->enable_profiler();
	}

	public function showComments()
	{
		$this->load->view('contents/comments');
	}

	public function showNotes()
	{
		$this->load->view('contents/notes');
	}

/**************************** Calling Model ****************************/

}
