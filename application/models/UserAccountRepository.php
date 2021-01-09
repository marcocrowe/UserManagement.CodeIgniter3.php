<?php
defined('BASEPATH') || exit('No direct script access allowed');

class UserAccessWebExampleDatabase
{
	public const USERACCOUNT = "UserAccount";
}

class UserAccountTable
{
	public const ACTIVE  = "Active";
	public const AVATARFILENAME  = "AvatarFilename";
	public const ID = "Id";
	public const EMAIL = "Email";
	public const NAME = "Name";
	public const PASSWORD = "Password";
	public const PASSWORD_HASH = "ripemd160";
	public const USERNAME = "Username";
}

/**
 * Repository provides MySQL CRUD functionality for User Accounts
 */
class UserAccountRepository extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	public function addUserAccount($userAccount)
	{
		$this->db->insert(UserAccessWebExampleDatabase::USERACCOUNT, $userAccount);
		return $this->db->affected_rows() == 1;
	}
	function deleteUserAccountById($userAccountId)
	{
		$this->db->where(UserAccountTable::ID, $userAccountId);
		return $this->db->delete(UserAccessWebExampleDatabase::USERACCOUNT);
	}
	public function getUserAccounts()
	{
		$query = $this->db->get(UserAccessWebExampleDatabase::USERACCOUNT);
		return $query->result();
	}
	public function getUserAccountByCredentials($username, $password)
	{
		$parameters = array(
			UserAccountTable::USERNAME => $username,
			UserAccountTable::PASSWORD => hash(UserAccountTable::PASSWORD_HASH, $password)
		);
		$query = $this->db->get_where(UserAccessWebExampleDatabase::USERACCOUNT, $parameters);
		return $query->row();
	}
	public function getUserAccountById($userAccountId)
	{
		$query = $this->db->get_where(UserAccessWebExampleDatabase::USERACCOUNT, array(UserAccountTable::ID => $userAccountId));
		return $query->row();
	}
	function updateUserAccount($userAccount)
	{
		$this->db->where($this->id, $userAccount->Id);
		return $this->db->update(UserAccessWebExampleDatabase::USERACCOUNT, $userAccount);
	}
}
