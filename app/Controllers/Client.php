<?php

namespace App\Controllers;

use App\Models\ClientsModel;

class Client extends BaseController
{
	public function index() {
		$clientsModel = new ClientsModel();

		$data["clients"] = $clientsModel->index();
		return $this->view('clients/index', $data, "List Client");
	}

	public function details(int $id) {
		$clientModel = new ClientsModel();

		$data["client"] = $clientModel->getById($id);

		return $this->view('clients/details', $data, 'Details Client');
	}
}
