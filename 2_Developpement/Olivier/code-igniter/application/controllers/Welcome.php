<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index(){
		// Assign session data to Smarty:
		$data['message'] = "J'ai réussi!";

		// Compile smarty template and load it to user:
		$this->smarty->display('welcome.tpl', $data);
	}
}
