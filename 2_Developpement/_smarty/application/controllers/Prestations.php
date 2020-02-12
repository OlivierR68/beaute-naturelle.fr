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

        $this->load->model("Prestations_manager");
        $this->load->model("Prestation_class");
	}

	/** Front : Fonction permettant d'afficher la page de prestation  */
	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
        $data['headerImg']	= base_url("assets/img/img-institut.jpg");

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
        $cat_id = strstr($slug, '-', true);
        $cat_data = $this->Categories_manager->findOne($cat_id);

        $objCat = new Category_class;
        $objCat->hydrate($cat_data);


        $subcat_array = $this->Prestations_manager->getSubCat($cat_id);



        foreach ($subcat_array as $subcat){

            $presta_array = $this->Prestations_manager->getPresta($subcat['sub_cat_id']);

            foreach ($presta_array as $presta){
                $objPresta = new Prestation_class();
                $objPresta->hydrate($presta);
                $data['presta_table'][$subcat['sub_cat_title']][] = $objPresta;
            }
        }


        $data['preTITLE']	= "Préstations & Tarifs";
        $data['TITLE'] 		= $objCat->getTitle();
        $data['headerImg']	= base_url('uploads/prestations/'.$objCat->getHeader());
        $data['CONTENT'] = $this->smarty->fetch('front/category.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

}
