<?php
namespace App\Controllers;

/**
 * @package CodeIgniter
 */

use CodeIgniter\Config\Services;
use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * @var array $helpers
	 */
  protected $helpers = [];

  protected $session = null;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
    parent::initController($request, $response, $logger);
    
    $this->session = Services::session();
	}

	public function view(
    string $page,
    $data = [],
    string $title = '',
    $admin = false
  ) {
    $data['title'] = ucfirst(!$title ? $page : $title);
    $data['admin'] = $admin;

		echo view('header', $data);
		echo view("pages/{$page}", $data);
		echo view('footer', $data);
  }
}
