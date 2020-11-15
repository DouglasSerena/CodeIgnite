<?php

namespace App\Controllers;

use App\Models\ClientsModel;

class Client extends BaseController
{
	public function index() {
		$clients = new ClientsModel();

		$data["clients"] = $clients->index();
		return $this->view('clients/index', $data, "List Client");
	}

	public function details(int $id) {
		$client = new ClientsModel();

		$data["client"] = $client->getById($id);

		return $this->view('clients/details', $data, 'Details Client');
	}
}
