<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Product extends BaseController
{
	public function index() {
		$products = new ProductsModel();

		$data["products"] = $products->index();
		return $this->view('products/index', $data, "List Products");
	}

	public function details(int $id) {
		$product = new ProductsModel();

		$data["product"] = $product->getById($id);

		return $this->view('products/details', $data, "Details Products");
	}
}
