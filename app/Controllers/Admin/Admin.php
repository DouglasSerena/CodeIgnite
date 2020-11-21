<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index() {
    $session = \Config\Services::session();
    if($session->has('user'))
      return $this->view('admin/index', [], "Admin", true);
    else
      $this->login();
  }
  public function login() {
    return $this->view('admin/login', [], "Login", true);
  }
}
