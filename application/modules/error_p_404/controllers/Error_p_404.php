<?php
defined("BASEPATH") OR exit("No direct script access allowed");

/**
* 
*/
class Error_p_404 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function admin()
	{
		echo "ini admin";
	}

	public function front()
	{
		echo "ini front";
	}
}