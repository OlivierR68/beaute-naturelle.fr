<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$data['preTITLE']	= "Participer à nos";
		$data['TITLE'] 		= "Événements";
		$data['headerImg']	= "img-events.jpg";


		// à remplir ici, parttie frontend








		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function back()
	{



		// à remplir ici, partie backend








		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
	}
}
