<?php namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{

  protected $table = 'clients';
  protected $primaryKey = 'idClient';

  protected $useTimestamps = false;

  function index() {
    return $this->findAll();
  }
  function store($client) {
    return $this
      ->protect(false)
      ->insert($client);
  }
  function updated(int $id, $client) {
    return $this
      ->protect(false)
      ->update($id, $client);
  }
  function getById(int $id) {
    return $this->find($id);
  }
  function remove(int $id) {
    return $this->delete($id);
  }
}
