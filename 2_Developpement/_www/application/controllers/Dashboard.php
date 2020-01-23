<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data['TITLE'] 		= "Événements";



		// à remplir ici, partie frontend





		$data['CONTENT']	= $this->load->view('back/dashboard', $data, TRUE);
		$this->load->view('back/content', $data);
	}


}
