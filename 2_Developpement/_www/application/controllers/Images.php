<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function index()
	{
		$data['preTITLE']	= "Consultez notre";
		$data['TITLE'] 		= "Galerie Photos";
		$data['headerImg']	= "img-gallerie.jpg";


		// à remplir ici, partie frontend



		$data['CONTENT']	= $this->load->view('front/images', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function back()
	{



		// à remplir ici, partie backend








		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
	}
}
