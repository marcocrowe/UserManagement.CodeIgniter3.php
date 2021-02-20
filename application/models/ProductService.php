<?php
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Repository provides MySQL CRUD functionality for User Accounts
 */
class ProductService extends CI_Model
{
	function __construct()
	{
		$this->load->model("repositories/ProductRepository");
	}
	public function addProduct($productValueArray)
	{
		$nameIsUnique = $this->ProductRepository->NameIsUnique($productValueArray["Name"]);

		if ($nameIsUnique) {
			return $this->ProductRepository->addProduct($productValueArray);
		} else {
			return array(
			);
		}
	}
	function deleteProductById($productId)
	{
		return $this->ProductRepository->deleteProductById($productId);
	}
	public function getProducts()
	{
		return $this->ProductRepository->getProducts();
	}
	public function getProductsForSale()
	{
		return $this->ProductRepository->getProductsForSale();
	}

	public function getProductById($productId)
	{
		return $this->ProductRepository->getProductById($productId);
	}
	function updateProduct($product)
	{
		return $this->ProductRepository->updateProduct($product);
	}
}
