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
        $this->load->model("Categories_manager");
        $this->load->model("Category_class");
	}

	/** Front : Fonction permettant d'afficher la page de prestation  */
	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";

		// à remplir ici, parttie frontend

        $categories = $this->Categories_manager->findAll();

        $slidesToDisplay = array();
        foreach($categories as $category){
        $objCategory 	= new Category_class;
        $objCategory->hydrate($category);
        $slidesToDisplay[] = $objCategory;
        }
        $data['arrCategories'] = $slidesToDisplay;

        $data['CONTENT'] = $this->smarty->fetch('front/prestations.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
	}

	public function cat($slug)
    {

        $dataCat = $this->Categories_manager->findOne(strstr($slug, '-', true));

        $objCat = new Category_class;
        $objCat->hydrate($dataCat);


        $data['preTITLE']	= "Préstations & Tarifs";
        $data['TITLE'] 		= $objCat->getTitle();
        $data['headerImg']	= "img-institut.jpg";
        $data['CONTENT'] = $this->smarty->fetch('front/category.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

}
