<?php

defined('BASEPATH') || exit('No direct script access allowed');

class UserAccounts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("WebsiteManager");
		$this->load->model("UserAccountService");
	}
	public function index()
	{
		$title = "User Accounts";
		if ($this->websitemanager->isLoggedIn()) {
			$userAccounts = $this->UserAccountService->getUserAccounts();

			$vars = array(
				"userAccounts" => $userAccounts
			);
			$this->websitemanager->loadViewWithAdminMasterPage($title, "Admin/UserAccountListView", $vars);
		} else {
			$this->websitemanager->loadAdminError403Page($title);
		}
	}
	public function view($userAccountId)
	{
		$title = "User Account";
		if ($this->websitemanager->isLoggedIn()) {
			$userAccount = $this->UserAccountService->getUserAccountById($userAccountId);

			$vars = array(
				"userAccount" => $userAccount
			);
			$title .= ": " . $userAccount->Username;
			$this->websitemanager->loadViewWithAdminMasterPage($title, "UserAccountView", $vars);
		} else {
			$this->websitemanager->loadAdminError403Page($title);
		}
	}
	public function edit($userAccountId)
	{
		$title = "User Account";
		if ($this->websitemanager->isLoggedIn()) {
			$userAccount = $this->UserAccountService->getUserAccountById($userAccountId);

			$vars = array(
				"userAccount" => $userAccount
			);
			$title .= ": " . $userAccount->Username;
			$this->websitemanager->loadViewWithAdminMasterPage($title, "UserAccountEditView", $vars);
		} else {
			$this->websitemanager->loadViewWithAdminMasterPage($title, "error_403.php");
		}
	}
}
