<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Slides
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */
class Slides extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Slides_manager");
		$this->load->model("Slide_class");
		$this->load->library('upload');

	}

	/** Front : Fonction permettant d'afficher la page d'accueil  */
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

	/** Back : Fonction permettant d'afficher la liste des slides  */
	public function ListPage()
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

	/** Back : Fonction pour afficher la page d'un slide */
	public function addPage()
	{


		if(count($this->input->post())>0){

			$objSlide = new Slide_class();
			$objSlide->hydrate($this->input->post());

			var_dump($objSlide->getArray());

			$this->Slides_manager->new($objSlide);

		}

		$_POST = array();

		$data['TITLE'] 		= "Ajouter un slide";
		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}



	/** Back : Fonction d'éditer un slide */
	public function edit()
	{
		$data['TITLE'] 		= "Ajouter un slide";



		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}
}
