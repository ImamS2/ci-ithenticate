<?php
defined("BASEPATH") OR exit("No direct script access allowed");

/**
* 
*/
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "hello world";
		echo "<pre>";
		print_r($this);
		echo "</pre>";
	}
}