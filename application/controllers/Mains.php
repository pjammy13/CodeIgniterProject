<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function hello()
	{
		echo "testing";
	}
}
