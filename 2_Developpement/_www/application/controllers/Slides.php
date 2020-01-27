<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Slides_manager");
		$this->load->model("Slide_class");

	}

	public function home()
	{
		$data['preTITLE']	= "Magasin & Institut";
		$data['TITLE'] 		= "A propos de Beauté Naturelle";

		$slides	= $this->Slides_manager->findAll();
		$slidesToDisplay = array();
		foreach($slides as $slide){
			$objSlide 	= new Slide_class();
			$objSlide->hydrate($slide);
			$slidesToDisplay[] = $objSlide;
		}

		$data['arrSlides'] 	= $slidesToDisplay;
		$data['CONTENT']	= $this->load->view('front/home', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function list()
	{
		$data['TITLE'] 		= "Liste des slides";

		$slides	= $this->Slides_manager->findAll();
		$slidesToDisplay = array();
		foreach($slides as $slide){
			$objSlide 	= new Slide_class();
			$objSlide->hydrate($slide);
			$slidesToDisplay[] = $objSlide;
		}

		$data['arrSlides'] 	= $slidesToDisplay;

		$data['CONTENT']	= $this->load->view('back/slidesList', $data, TRUE);
		$this->load->view('back/content', $data);
	}

	public function add()
	{
		$data['TITLE'] 		= "Ajouter un slide";
		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}

	public function edit()
	{
		$data['TITLE'] 		= "Ajouter un slide";


		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}
}
