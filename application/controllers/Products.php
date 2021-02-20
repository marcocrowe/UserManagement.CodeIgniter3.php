<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("WebsiteManager");
		$this->load->model("ProductService");
	}
	public function index()
	{
		$title = "Products";
		if ($this->websitemanager->isLoggedIn()) {
			$products = $this->ProductService->getProductsForSale();

			$vars = array(
				"products" => $products
			);
			$this->websitemanager->loadViewWithMasterPage($title, "ProductListView", $vars);
		} else {
			$this->websitemanager->loadViewWithMasterPage($title, "error_403.php");
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
			$this->websitemanager->loadViewWithMasterPage($title, "UserAccountView", $vars);
		} else {
			$this->websitemanager->loadViewWithMasterPage($title, "error_403.php");
		}
	}
}
