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
        $this->load->model("Category_manager");
        $this->load->model("Category_class");
	}

	/** Front : Fonction permettant d'afficher la page de prestation  */
	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";

		// à remplir ici, parttie frontend

        $categorie = $this->Category_manager->findAll();
        $slidesToDisplay = array();
        foreach($categorie as $categorie){
        $objcategorie 	= new Category_class;
        $objcategorie->hydrate($categorie);
        $slidesToDisplay[] = $objcategorie;
        }
        $data['arrCategorie'] = $slidesToDisplay;

        $data['CONTENT'] = $this->smarty->fetch('front/prestations.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
	}

}
