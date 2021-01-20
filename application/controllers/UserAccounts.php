<?php

defined('BASEPATH') || exit('No direct script access allowed');

class UserAccounts extends CI_Controller
{
	public function index()
	{
		$this->load->model("UserAccountService");
		$userAccounts = $this->UserAccountService->getUserAccounts();

		$viewData = array(
			"userAccounts" => $userAccounts
		);
		$this->load->view("UserAccountListView", $viewData);
	}
	public function view($userAccountId)
	{
		$this->load->model("UserAccountService");
		$userAccount = $this->UserAccountService->getUserAccountById($userAccountId);

		$viewData = array(
			"userAccount" => $userAccount
		);
		$this->load->view("UserAccountView", $viewData);
	}
	public function Edit($userAccountId)
	{
		$this->load->model("UserAccountService");
		$userAccount = $this->UserAccountService->getUserAccountById($userAccountId);

		$viewData = array(
			"userAccount" => $userAccount
		);
		$this->load->view("UserAccountEditView", $viewData);
	}
	public function handleLogin()
	{
		$this->load->model("UserAccountService");
		$userAccount = $this->UserAccountService->getUserAccountById($userAccountId);

		$viewData = array(
			"userAccount" => $userAccount
		);
		$this->load->view("UserAccountEditView", $viewData);
	}
}
