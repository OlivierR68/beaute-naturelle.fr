<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		// Assign session data to Smarty:
		$this->smarty->assign('message', "This is Smarty test!");

		// Compile smarty template and load it to user:
		$this->smarty->display('welcome.tpl');
	}
}
