<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ClientsModel;

class Client extends BaseController
{
  public function index()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }

    $clientsModel = new ClientsModel();

    $data["clients"] = $clientsModel->index();
    return json_encode($data);
  }
}
