<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Product extends BaseController
{
	public function index() {
		$productsModel = new ProductsModel();

		$data["products"] = $productsModel->index();
		return $this->view('products/index', $data, "List Products");
	}

	public function details(int $id) {
		$productModel = new ProductsModel();

		$data["product"] = $productModel->getById($id);

		return $this->view('products/details', $data, "Details Products");
	}
}
