<?php

namespace App\Controllers;

class Site extends BaseController
{
	public function index()
	{
			$this->view('home');
	}
}
