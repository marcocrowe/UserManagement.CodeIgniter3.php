<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("WebsiteManager");
	}
	public function index()
	{
		$this->websitemanager->destroyCurrentUserSession();
		$vars = array(
			"error" => "You have been logged out.",
			"username" => ""
		);
		$this->websitemanager->loadViewWithMasterPage("Login", "LoginView", $vars);
	}
}
