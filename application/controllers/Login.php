<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->model("UserAccountService");
		$this->load->model("UserAccountSchema");


		$this->load->view("LoginView");
	}
	public function manage()
	{
		$this->load->library("session");
		$this->load->model("UserAccountService");


		$username = $this->input->post($this->UserAccountSchema->Username);
		$password = $this->input->post($this->UserAccountSchema->Password);

		$userAccount = $this->UserAccountService->getUserAccountByCredentials($username, $password);

		if (isset($userAccount)) {
			$this->session->set_userdata("UserAccountId", $userAccount->Id);
			redirect('useraccounts/index');
		}
		else
		{
			$this->load->view("LoginView");
		}
	}
}
