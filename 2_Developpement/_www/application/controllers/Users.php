<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("User_manager");

	}


	public function login()
	{
		$data['preTITLE']	= "Magasin & Institut";
		$data['TITLE'] 		= "A propos de Beauté Naturelle";
		$data['headerImg']	= "img-institut.jpg";

		$data['CONTENT'] = $this->load->view('front/login', $data, TRUE);
		$this->load->view('front/min-content', $data);

	}

	public function register()
	{
		$data['preTITLE']	= "Créer votre compte";
		$data['TITLE'] 		= "Rejoignez notre communauté!";
		$data['headerImg']	= "img-register.jpg";


		$data['CONTENT'] = $this->load->view('front/register', $data, TRUE);
		$this->load->view('front/min-content', $data);
	}


}
