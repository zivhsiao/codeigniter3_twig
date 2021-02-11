<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{

		$encrypt = $this->encryption->encrypt($_GET['query']);

		$data = [
			'encrypt_string' => $encrypt, 
			'query' => $_GET['query'],
			'decrypt_string' => $this->encryption->decrypt($encrypt),
			'count' => strlen($encrypt)
		];
		
		$this->twig->render('test.twig', $data);
	}

}
