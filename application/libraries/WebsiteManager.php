<?php

if (!defined('BASEPATH')) 	exit('No direct script access allowed');

//
//	https://codeigniter.com/userguide3/general/creating_libraries.html
//
class WebsiteManager
{
	//
	//	fields
	//
	private $codeIgniterReference;
	//
	//	constructors
	//
	public function __construct()
	{
		$this->codeIgniterReference = &get_instance();
		$this->codeIgniterReference->load->library('session');
	}
	//
	//	Methods
	//
	public function handleUnauthorizedSession()
	{
		$this->codeIgniterReference->load->view("403.php");
	}
	public function unauthorizedAdminSessionDetected()
	{
		return $this->codeIgniterReference->session->userdata(SessionUserDataKeys::UserId) == null;
	}
	public function unauthorizedCustomerSessionDetected()
	{
		return $this->codeIgniterReference->session->userdata("CustomerId") == null;
	}
	public function loadViewWithAdminMasterPage($pageTitle, $viewName, $viewVars = null)
	{
		$vars = array(
			'mainContent' => $this->codeIgniterReference->load->view($viewName, $viewVars, true),
			'pageTitle' => $pageTitle,
			"username" => $this->getSessionUsername(),
		);
		$this->codeIgniterReference->load->view("AdminMasterPage", $vars);
	}
	public function loadViewWithMasterPage($pageTitle, $viewName, $viewVars = null)
	{
		$vars = array(
			'loggedIn' => $this->isLoggedIn(),
			'mainContent' => $this->codeIgniterReference->load->view($viewName, $viewVars, true),
			'pageTitle' => $pageTitle,
			"username" => $this->getSessionUsername(),
		);
		$this->codeIgniterReference->load->view("index", $vars);
	}
	public function createUserSession($userId, $username)
	{
		$this->codeIgniterReference->session->set_userdata(SessionUserDataKeys::UserId, $userId);
		$this->codeIgniterReference->session->set_userdata(SessionUserDataKeys::Username, $username);
	}
	public function destroyCurrentUserSession()
	{
		$this->codeIgniterReference->session->set_userdata(SessionUserDataKeys::UserId, null);
		$this->codeIgniterReference->session->set_userdata(SessionUserDataKeys::Username, null);
		$this->codeIgniterReference->session->sess_destroy();
	}
	public function getSessionUsername()
	{
		if (isset($this->codeIgniterReference->session->userdata[SessionUserDataKeys::Username]))
			return $this->codeIgniterReference->session->userdata[SessionUserDataKeys::Username];
		else return "";
	}
	public function isLoggedIn()
	{
		if (isset($this->codeIgniterReference->session->userdata[SessionUserDataKeys::UserId]))
			return true;
		else
			return false;
	}
}
class SessionUserDataKeys
{
	//
	//	constants
	//
	public const UserId = "UserId";
	public const Username = "Username";
}
