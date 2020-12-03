<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClientsModel;

class Client extends BaseController
{
  public function index()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }

    $params = $this->request->getVar();

    $clientsModel = new ClientsModel();
    $data = [];

    if (isset($params['filter'])) {
      $data["clients"] = $clientsModel->filter($params['filter']);
    } else {
      $data["clients"] = $clientsModel->index();
    }

    return $this->view('admin/client/index', $data, "List Client", true);
  }

  public function store()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    return $this->view('admin/client/store', [], "Register Client", true);
  }

  public function storeAction()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $clientsModel = new ClientsModel();
    $client = $this->request->getVar();

    if (!!$clientsModel->insert($client))
      return redirect()->to(base_url('/admin/client'));
    return redirect()->to(base_url('/admin/client/register'));
  }

  public function update(int $id)
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $clientModel = new ClientsModel();

    $data['client'] = $clientModel->getById($id);

    return $this->view('admin/client/update', $data, "Update Client", true);
  }

  public function updateAction($id)
  {
    $clientsModel = new ClientsModel();
    $client = $this->request->getVar();

    if ($clientsModel->update($id, $client))
      return redirect()->to(base_url('/admin/client'));
    return redirect()->to(base_url('/admin/client/register'));
  }

  public function delete(int $id)
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $clientModel = new ClientsModel();

    $clientModel->remove($id);
    return redirect()->to(base_url('/admin/client'));
  }
}
