<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->model("UserAccountService");
		$this->load->model("UserAccountRepository");

		$this->load->model("UserAccountSchema");


		$this->load->view("LoginView");
	}
	public function manage()
	{
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->model("UserAccountService");

		$password = $this->input->post($this->UserAccountSchema->Password);
		$username = $this->input->post($this->UserAccountSchema->Username);

		$userAccount = $this->UserAccountService->getUserAccountByCredentials($username, $password);

		if ($userAccount != null) {
			$this->session->set_userdata("UserAccountId", $userAccount->Id);
			redirect(base_url() . "index.php/useraccounts/");
		} else {
			$vars = array(
				"error" => "Incorrect login details entered",
				"username" => $username
			);
			var_dump($vars);
			$this->load->view("LoginView", $vars);
		}
	}
}
