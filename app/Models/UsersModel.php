<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

  protected $table = 'users';
  protected $primaryKey = 'idProduct';

  protected $useTimestamps = false;

  function  getUser($user) {
    return $this->asArray()->where('user', $user)->first();
  }
}
