<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

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
		$data['preTITLE']	= "Participer à nos";
		$data['TITLE'] 		= "Événements";
		$data['headerImg']	= "img-events.jpg";


		// à remplir ici, partie frontend





		$data['CONTENT']	= $this->load->view('back/dashboard', $data, TRUE);
		$this->load->view('back/content', $data);
	}
}
