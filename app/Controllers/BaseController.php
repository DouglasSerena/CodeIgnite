<?php
namespace App\Controllers;

/**
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * @var array $helpers
	 */
	protected $helpers = [];

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	public function view(string $page, $data = [], string $title = '') {
		$data['title'] = ucfirst(!$title ? $page : $title);

		echo view('header', $data);
		echo view("pages/{$page}", $data);
		echo view('footer', $data);
	}

}
