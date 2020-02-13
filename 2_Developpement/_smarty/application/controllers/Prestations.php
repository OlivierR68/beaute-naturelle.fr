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

        $this->load->model("SubCategory_class");
	}

	/** Front : Fonction permettant d'afficher la page de prestation  */
	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
        $data['headerImg']	= base_url("assets/img/img-institut.jpg");

		// à remplir ici, parttie frontend

        $categories = $this->Categories_manager->findAllCat();

        $cat_to_display = array();
        foreach($categories as $category){
        $objCategory 	= new Category_class;
        $objCategory->hydrate($category);
        $cat_to_display[] = $objCategory;
        }
        $data['arrCategories'] = $cat_to_display;

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

    /** Back :  Affichage de la liste des prestations  */
    public function ListPage()
    {
        $data['TITLE'] 		= "Liste des prestations";

        // Filtre des prestations
        $data['cat_list']       = $this->Categories_manager->findAllCat();
        $data['sub_cat_list']   = $this->Categories_manager->findAllSubCat();


        // Affichage des prestations
        $presta_list	= $this->Prestations_manager->findAll();
        $presta_to_display = [];
        foreach($presta_list as $presta_data){

            $presta_obj = new Prestation_class();
            $presta_obj->hydrate($presta_data);
            $presta_to_display[] = $presta_obj;
        }

        $data['display_list'] 	= $presta_to_display;

        $data['CONTENT'] = $this->smarty->fetch('back/prestationsList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);




    }


    /**
     * Back : Affichage de la page de création/modification d'un utilisateur
     * @param int $id identifiant utilisateur
     */
    public function addEdit($id = -1)
    {

        $presta_obj = new Prestation_class();

        if ($id >= 0) {
            $presta_obj->hydrate($this->Prestations_manager->findOne($id));
        }

        if (!empty($this->input->post())) {

            if ($id < 0) {

                $presta_obj->hydrate($this->input->post());

                $insertId = $this->Prestations_manager->new($presta_obj);
                $this->session->set_flashdata("success", "La prestation <b>{$presta_obj->getId()}</b> a été ajouté");

                redirect('prestations/addEdit/' . $insertId, 'refresh');

            } else {

                $insertId = $this->Prestations_manager->update($presta_obj);
                $data['SUCCESS'] = "La prestation <b>{$presta_obj->getId()}</b> a été modifié";
            }
        }

        if ($id > 0) {

            $data['TITLE'] = "Modifier la prestation : " . $presta_obj->getId();
            $data['buttonSubmit'] = "Modifier";
            $data['buttonCancel'] = "Revenir à la liste";

        } else {

            $data['TITLE'] = "Ajouter une nouvelle prestation";
            $data['buttonSubmit'] = "Ajouter la prestation";
            $data['buttonCancel'] = "Annuler";

        }

        $data['sub_cat_list']  = $this->Categories_manager->findAllSubCat();

        $data['presta_obj'] = $presta_obj;
        $data['CONTENT'] = $this->smarty->fetch('back/prestationsEdit.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
    }

    /**
     * Suprression d'un utilisateur
     * @param $id identifiant utilisateur
     */
    public function delete($id)
    {

        $this->Prestations_manager->delete($id);
        $this->session->set_flashdata('error', "La prestation #$id a été supprimé");
        redirect('prestations/ListPage', 'refresh');

    }

    /** Back :  Affichage de la liste des prestations  */
    public function ListPage_cat()
    {
        $data['TITLE'] 		= "Liste des catégories";

        // Affichage des prestations

        $cat_list	= $this->Categories_manager->findAllCat();
        $cat_to_display = [];
        foreach($cat_list as $cat_data){

            $cat_obj = new Category_class();
            $cat_obj->hydrate($cat_data);
            $cat_to_display[] = $cat_obj;
        }
        $data['display_list_1'] = $cat_to_display;



        $sub_cat_list	= $this->Categories_manager->findAllSubCat();
        $sub_cat_to_display = [];
        foreach($sub_cat_list as $sub_cat_data){

            $sub_cat_obj = new SubCategory_class();
            $sub_cat_obj->hydrate($sub_cat_data);
            $sub_cat_to_display[] = $sub_cat_obj;
        }
        $data['display_list_2'] = $sub_cat_to_display;


        $data['CONTENT'] = $this->smarty->fetch('back/categoriesList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);




    }
}
