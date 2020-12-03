<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{

  protected $table = 'products';
  protected $primaryKey = 'idProduct';
  protected $returnType = 'object';
  protected $allowedFields = [
    'name', 'price', 'description'
  ];

  protected $useTimestamps = false;

  function index()
  {
    return $this->findAll();
  }

  function getById(int $id)
  {
    return $this->find($id);
  }

  function remove(int $id)
  {
    return $this->delete($id);
  }
  function filter($value)
  {
    $filter = [
      'name' => $value,
      'price' => $value,
      'description' => $value,
    ];

    $query = $this
      ->like('idProduct', $value);

    foreach ($filter as $key => $valueArray)
      $query->orLike($key, $valueArray);

    return $query->findAll();
  }
}
