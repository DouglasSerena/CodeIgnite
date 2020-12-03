<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class Product extends BaseController
{
  protected $verifySession = true;

  public function index()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }

    $productsModel = new ProductsModel();

    $params = $this->request->getVar();

    if (isset($params['filter'])) {
      $data["products"] = $productsModel->filter($params['filter']);
    } else {
      $data["products"] = $productsModel->index();
    }

    return $this->view('admin/product/index', $data, "List Product", true);
  }

  public function store()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    return $this->view('admin/product/store', [], "Register Product", true);
  }

  public function storeAction()
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $productsModel = new ProductsModel();
    $product = $this->request->getVar();

    if (!!$productsModel->insert($product))
      return redirect()->to(base_url('/admin/product'));
    return redirect()->to(base_url('/admin/product/register'));
  }

  public function update(int $id)
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $productsModel = new ProductsModel();

    $data['product'] = $productsModel->getById($id);

    return $this->view('admin/product/update', $data, "Update Product", true);
  }

  public function updateAction($id)
  {
    $productsModel = new ProductsModel();
    $product = $this->request->getVar();

    if ($productsModel->update($id, $product))
      return redirect()->to(base_url('/admin/product'));
    return redirect()->to(base_url('/admin/product/register'));
  }

  public function delete(int $id)
  {
    if (!$this->session->has('user')) {
      return redirect()->to(base_url("/admin"));
    }
    $productsModel = new ProductsModel();

    $productsModel->remove($id);
    return redirect()->to(base_url('/admin/product'));
  }
}
