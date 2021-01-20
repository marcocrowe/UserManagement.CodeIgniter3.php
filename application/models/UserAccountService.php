<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Repository provides MySQL CRUD functionality for User Accounts
 */
class UserAccountService extends CI_Model
{
	function __construct()
	{
		$this->load->model("repositories/UserAccountRepository");
		$this->load->model("schema/UserAccountSchema");
	}
	public function addUserAccount($userAccountValueArray)
	{
		$usernameIsAvaible = $this->UserAccountRepository->UsernameIsAvaible($userAccountValueArray[$this->UserAccountSchema->Username]);
		$emailIsUnique = $this->UserAccountRepository->EmailIsUnique($userAccountValueArray[$this->UserAccountSchema->Email]);

		if ($usernameIsAvaible  && $emailIsUnique) {
			return $this->UserAccountRepository->addUserAccount($userAccountValueArray);
		} else {
			return array(
				$this->UserAccountSchema->Username => "Username is not avaible",
				$this->UserAccountSchema->Email => "Email is already registered."
			);
		}
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
