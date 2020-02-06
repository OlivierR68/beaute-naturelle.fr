<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @author Olivier Ravinasaga
 * @author Morand Claisse
 * @version 1
 *
 */

class Prestations extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("Categorie_manager");
        $this->load->model("Categorie_class");
	}

	/** Front : Fonction permettant d'afficher la page de prestation  */
	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";

		// à remplir ici, parttie frontend

        $categorie = $this->Categorie_manager->findAll();
        $slidesToDisplay = array();
        foreach($categorie as $categorie){
        $objcategorie 	= new Categorie_class();
        $objcategorie->hydrate($categorie);
        $slidesToDisplay[] = $objcategorie;
        }
        $data['arrCategorie'] = $slidesToDisplay;
    
		$data['CONTENT'] = $this->load->view('front/prestations', $data, TRUE);
		$this->load->view('front/templates/content', $data);
	}

	   
}
