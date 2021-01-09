<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Repository provides MySQL CRUD functionality for User Accounts
 */
class UserAccountService extends CI_Model
{
	function __construct()
	{
		$this->load->model("UserAccountRepository");
	}
	public function addUserAccount($userAccount)
	{
		return $this->UserAccountRepository->addUserAccount($userAccount);
	}
	function deleteUserAccountById($userAccountId)
	{
		return $this->UserAccountRepository->deleteUserAccountById($userAccountId);
	}
	public function getUserAccounts()
	{
		return $this->UserAccountRepository->getUserAccounts();
	}
	public function getUserAccountByCredentials($username, $password)
	{
		return $this->UserAccountRepository->getUserAccountByCredentials($username, $password);
	}
	public function getUserAccountById($userAccountId)
	{
		return $this->UserAccountRepository->getUserAccountById($userAccountId);
	}
	function updateUserAccount($userAccount)
	{
		return $this->UserAccountRepository->updateUserAccount($userAccount);
	}
}
