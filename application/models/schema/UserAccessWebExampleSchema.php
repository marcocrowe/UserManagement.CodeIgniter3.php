<?php
defined('BASEPATH') || exit('No direct script access allowed');

class UserAccessWebExampleSchema extends CI_Model
{
	public string $UserAccount = "Useraccount";
	public string $UserRole = "Userrole";
}
class UserAccountSchema extends CI_Model
{
	public string $Active = "Active";
	public string $Avatar = "Avatar";
	public string $Email = "Email";
	public string $Id = "Id";
	public string $Name = "Name";
	public string $Password = "Password";
	public string $Password_Hash = "ripemd160";
	public string $Username = "Username";
}
class UserRoleSchema extends CI_Model
{
	public string $Avatar = "Avatar";
	public string $Id = "Id";
	public string $Name = "Name";
}
