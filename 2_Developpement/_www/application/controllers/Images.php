<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @author  Steven Robert
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Images extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Images_manager");
		$this->load->model("Images_class");
	}

	/** Front : Fonction permettant d'afficher la galerie photos  */
	public function index()
	{
		$data['preTITLE'] = "Consultez notre";
		$data['TITLE'] = "Galerie Photos";
		$data['headerImg'] = "img-gallerie.jpg";

		$images = $this->Images_manager->findAll();
		$imagesToDisplay = array();
		foreach ($images as $image) {
			$objImage = new Images_class();
			$objImage->hydrate($image);
			$imagesToDisplay[] = $objImage;
		}

		$data['arrImages'] = $imagesToDisplay;

		$data['CONTENT'] = $this->load->view('front/images', $data, TRUE);
		$this->load->view('front/content', $data);

	}

}

	/** Back : Fonction permettant d'afficher la liste des slides  */
	public function ListPage()
	{
		$data['TITLE'] 		= "Liste des images";

		$images	= $this->Images_manager->findAll();
		$imagesToDisplay = array();
		foreach($images as $image){
			$objImage 	= new Image_class();
			$objImage->hydrate($image);
			$imagesToDisplay[] = $objImage;
		}

		$data['arrImages'] 	= $imagesToDisplay;

		$data['CONTENT']	= $this->load->view('back/imagesList', $data, TRUE);
		$this->load->view('back/content', $data);
	}