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
			$this->websitemanager->loadError403Page($title);
		}
	}
	public function view($userAccountId)
	{
		$title = "Product";
		if ($this->websitemanager->isLoggedIn()) {
			$product = $this->ProductService->getProductById($userAccountId);

			$vars = array(
				"product" => $product
			);
			$title .= ": " . $product->Name;
			$this->websitemanager->loadViewWithMasterPage($title, "ProductView", $vars);
		} else {
			$this->websitemanager->loadError403Page($title);
		}
	}
}
