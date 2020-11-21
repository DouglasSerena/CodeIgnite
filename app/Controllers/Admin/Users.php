<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
  public function login() {
    $userModel = new UsersModel();
    
    $userName = $this->request->getVar('user');
    $userPassword = $this->request->getVar('password');

    if($user = $userModel->getUser($userName))
      if($userPassword == $user['password']) {
        $session = \Config\Services::session();
        $session->set('user', [
          'name' => $user['name'],
          'admin' => $user['admin']
        ]);
      }
    return redirect()->to(base_url('/admin'));
  }

  public function logout() {
    $session = \Config\Services::session();
    $session->remove('user');
    return redirect()->to(base_url('/'));
  }
}
