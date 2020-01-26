<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Images_manager");
		$this->load->model("Images_class");
	}

	public function index()
	{
		$data['preTITLE']	= "Consultez notre";
		$data['TITLE'] 		= "Galerie Photos";
		$data['headerImg']	= "img-gallerie.jpg";

		$images	= $this->Images_manager->findAll();
		$slidesToDisplay = array();
		foreach($images as $image){
			$objImages 	= new Images_class();
			$objImages->hydrate($images);
			$slidesToDisplay[] = $objImages;
		}

		$data['CONTENT']	= $this->load->view('front/images', $data, TRUE);
		$this->load->view('front/content', $data);
	}

        public function back()
	{
		$data['preTITLE']	= "Consultez notre";
		$data['TITLE'] 		= "Galerie Photos";
		$data['headerImg']	= "img-gallerie.jpg";

		// Partie frontend

		$images	= $this->Images_manager->findAll();
		$slidesToDisplay = array();
		foreach($images as $image){
			$objImages 	= new Images_class();
			$objImages->hydrate($images);
			$slidesToDisplay[] = $objImages;
		
		$data['CONTENT']	= $this->load->view('front/images', $data, TRUE);
		$this->load->view('front/content', $data);

		$data['CONTENT']	= $this->load->view('back/dashboard', $data, TRUE);
		$this->load->view('back/content', $data);
	}
}
