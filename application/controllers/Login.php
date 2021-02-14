<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("WebsiteManager");
		$this->load->model("UserAccountService");
	}
	public function index()
	{
		$this->websitemanager->loadViewWithMasterPage("Login", "LoginView");
	}
	public function manage()
	{
		$password = $this->input->post($this->UserAccountSchema->Password);
		$username = $this->input->post($this->UserAccountSchema->Username);
		$userAccount = $this->UserAccountService->getUserAccountByCredentials($username, $password);

		if ($userAccount != null) {
			$this->websitemanager->createUserSession($userAccount->Id, $userAccount->Username);
			redirect(base_url() . "index.php/useraccounts/");
		} else {
			$vars = array(
				"error" => "Incorrect login details entered",
				"username" => $username
			);
			$this->websitemanager->loadViewWithMasterPage("Login", "LoginView", $vars);
		}
	}
	public function demo()
	{
		$demoUserAccountId = 1; //	Admin
		$userAccount = $this->UserAccountService->getUserAccountById($demoUserAccountId);

		if ($userAccount != null) {
			$this->websitemanager->createUserSession($userAccount->Id, $userAccount->Username);
			redirect(base_url() . "index.php/useraccounts/");
		} else {
			$vars = array(
				"error" => "Incorrect login details entered",
				"username" => "Admin Demo"
			);
			$this->websitemanager->loadViewWithMasterPage("Login", "LoginView", $vars);
		}
	}
}
