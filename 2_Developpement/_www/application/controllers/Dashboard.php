<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['TITLE'] 		= "Événements";





		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('back/dashboard', $data);
	}


}
