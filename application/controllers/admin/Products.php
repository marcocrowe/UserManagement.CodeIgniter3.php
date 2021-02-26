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
			$products = $this->ProductService->getProducts();

			$vars = array(
				"products" => $products
			);
			$this->websitemanager->loadViewWithAdminMasterPage($title, "admin/ProductListView", $vars);
		} else {
			$this->websitemanager->loadAdminError403Page($title);
		}
	}
	public function view($productId)
	{
		$title = "Products";
		if ($this->websitemanager->isLoggedIn()) {
			$product = $this->ProductService->getProductById($productId);

			$vars = array(
				"Product" => $product
			);
			$title .= ": " . $product->Username;
			$this->websitemanager->loadViewWithAdminMasterPage($title, "ProductView", $vars);
		} else {
			$this->websitemanager->loadAdminError403Page($title);
		}
	}
}
