<?php namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{

  protected $table = 'products';
  protected $primaryKey = 'idProduct';

  protected $useTimestamps = false;

  function  index() {
    return $this->findAll();
  }
  function  getById(int $id) {
    return $this->find($id);
  }
}
