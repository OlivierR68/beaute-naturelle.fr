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
        $this->load->model("SubCategories_manager");
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

            $data['next'] = true;
            $data['TITLE'] = "Modifier la prestation : #" . $presta_obj->getId();
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

    public function addEdit_cat($id = -1)
    {

        $cat_obj = new Category_class();

        if ($id >= 0) {
            $cat_obj->hydrate($this->Categories_manager->findOne($id));
        }

        if (!empty($this->input->post())) {

            if($_FILES['img']['size'] > 0){


                $config['upload_path']      = './uploads/prestations/';
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['max_size']        	= 2048;


                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('img'))
                {
                    $data['ERRORS'] = $this->upload->display_errors();

                } else {

                    $upload_data = $this->upload->data();
                    $cat_obj->setImg($upload_data['file_name']);

                }

                $this->upload->initialize($config);
                if (!$this->upload->do_upload('header'))
                {
                    $data['ERRORS'] = $this->upload->display_errors();

                } else {

                    $upload_data = $this->upload->data();
                    $cat_obj->setHeader($upload_data['file_name']);

                }

            }


            if ($id < 0) {

                $cat_obj->hydrate($this->input->post());

                $insertId = $this->Categories_manager->new($cat_obj);
                $this->session->set_flashdata("success", "La catégorie <b>{$cat_obj->getTitle()}</b> a été ajoutée");

                redirect('prestations/addEdit/' . $insertId, 'refresh');

            } else {

                $insertId = $this->Categories_manager->update($cat_obj);
                $data['SUCCESS'] = "La catégorie <b>{$cat_obj->getTitle()}</b> a été modifiée";
            }
        }

        if ($id > 0) {

            $data['next'] = true;
            $data['TITLE'] = "Modifier la catégorie : #" . $cat_obj->getTitle();
            $data['buttonSubmit'] = "Modifier";
            $data['buttonCancel'] = "Revenir à la liste";

        } else {

            $data['TITLE'] = "Ajouter une nouvelle catégorie";
            $data['buttonSubmit'] = "Ajouter la catégorie";
            $data['buttonCancel'] = "Annuler";

        }

        $data['cat_obj'] = $cat_obj;
        $data['CONTENT'] = $this->smarty->fetch('back/categoriesAdd.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);

    }

    public function addEdit_subcat($id = -1)
    {

        $subcat_obj = new SubCategory_class();

        if ($id >= 0) {
            $subcat_obj->hydrate($this->SubCategories_manager->findOne($id));
        }

        if (!empty($this->input->post())) {


            if ($id < 0) {

                $subcat_obj->hydrate($this->input->post());

                $insertId = $this->SubCategories_manager->new($subcat_obj);
                $this->session->set_flashdata("success", "La sous-catégorie <b>{$subcat_obj->getTitle()}</b> a été ajoutée");

                redirect('prestations/addEdit_subcat/' . $insertId, 'refresh');

            } else {

                $insertId = $this->SubCategories_manager->update($subcat_obj);
                $data['SUCCESS'] = "La sous-catégorie <b>{$subcat_obj->getTitle()}</b> a été modifiée";
            }
        }




        if ($id > 0) {

            $data['next'] = true;
            $data['TITLE'] = "Modifier la sous-catégorie : #" . $subcat_obj->getTitle();
            $data['buttonSubmit'] = "Modifier";
            $data['buttonCancel'] = "Revenir à la liste";

        } else {

            $data['TITLE'] = "Ajouter une nouvelle sous-catégorie";
            $data['buttonSubmit'] = "Ajouter la catégorie";
            $data['buttonCancel'] = "Annuler";

        }


        $data['cat_list'] = $this->Categories_manager->findAllCat();
        $data['subcat_obj'] = $subcat_obj;
        $data['CONTENT'] = $this->smarty->fetch('back/subCategoriesAdd.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);

    }
}
