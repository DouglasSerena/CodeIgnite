<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{

  protected $table = 'clients';
  protected $primaryKey = 'idClient';
  protected $allowedFields = [
    'name', 'phone', 'email', 'address'
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
}
