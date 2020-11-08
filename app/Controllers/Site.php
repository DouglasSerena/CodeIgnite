<?php

namespace App\Controllers;

use App\Models\Clients;
use App\Models\Products;

class Site extends BaseController
{
	public function index()
	{
			$this->view();
	}

	public function view($page = "home", $data = []) {

		$data['title'] = ucfirst($page);

		echo view('header', $data);
		echo view("pages/{$page}", $data);
		echo view('footer', $data);
	}

	public function client($id = null) {
		$model = new Clients();

		$data["clients"] = $model->index();
		
		if($id === null) {
			return $this->view('client', $data);
		}
	}
	public function product() {
		$model = new Products();

		$data["products"] = $model->index();

		return $this->view('product', $data);
	}
}
