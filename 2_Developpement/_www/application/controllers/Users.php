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

		if(!empty($something = $this->input->post('email')) && !empty($something = $this->input->post('password'))){

			$user = $this->User_manager->verify($this->input->post('email'), $this->input->post('password'));

			if(empty($user)){
				echo "Adresse e-mail ou mot de passe invalide.";
			} else {


				$this->session->firstName  =  $user->user_first_name;
				redirect('/slides/home', 'refresh');



			}

		}




		$this->load->view('front/login');
	}


}
