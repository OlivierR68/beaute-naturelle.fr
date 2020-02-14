<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Slides
 * @author  Olivier Ravinasaga
 * Controller du Slider
 */
class Slides extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Slides_manager");
		$this->load->model("Slide_class");
		$this->load->library('upload');

	}

    /*
     * ------------------------------------------------------
     *  Méthodes d'affichages des pages
     * ------------------------------------------------------
     */

	/** Front : Affichage de la page d'accueil  */
	public function home()
	{

		$data['preTITLE']	= "Magasin & Institut";
        $data['TITLE'] 		= "A propos de Beauté Naturelle";
        $data['headerImg']	= base_url("assets/img/img-home.jpg");

		$slides	= $this->Slides_manager->findAll(true);
		$slidesToDisplay = array();
		foreach($slides as $slide){
			$objSlide 	= new Slide_class();
			$objSlide->hydrate($slide);
			$slidesToDisplay[] = $objSlide;
		}
		$data['arrSlides'] 	= $slidesToDisplay;


        $data['CONTENT'] = $this->smarty->fetch('front/home.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);

	}

	/** Back :  Affichage de la liste des slides  */
	public function ListPage()
	{
		$data['TITLE'] 		= "Liste des slides";

		$slides	= $this->Slides_manager->findAll();
		$slidesToDisplay = [];
		foreach($slides as $slide){
			$objSlide 	= new Slide_class();
			$objSlide->hydrate($slide);
			$slidesToDisplay[] = $objSlide;
		}

		$data['arrSlides'] 	= $slidesToDisplay;

        $data['CONTENT'] = $this->smarty->fetch('back/slidesList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}



	/**
	 * Back : Affichage de la page de création/modification des slider
	 * @param int $id identifiant bdd du slide
	 */
	public function addEdit($id = -1)
	{

		$objSlide = new Slide_class();

		if($id >= 0) {
			$objSlide->hydrate($this->Slides_manager->findOne($id));
			var_dump($objSlide);
		}


		if(!empty($this->input->post())){

			$objSlide->hydrate($this->input->post());
			if($_FILES['img']['size'] > 0){

                // gestion configuration d'image
				$config['upload_path']      = './uploads/slider/';
				$config['allowed_types']    = 'gif|jpg|jpeg|png';
				$config['max_size']        	= 2048;


				$this->upload->initialize($config);
				$this->upload->do_upload('img'); // on lance l'upload
				if (!$this->upload->do_upload('img'))
				{
					$data['ERROR'] = $this->upload->display_errors(); // on envoi une erreur

				} else {

					$upload_data = $this->upload->data(); // on récupère le nom et le met en attribut
					$objSlide->setImg($upload_data['file_name']);

				}

			}

			if($_FILES['img']['size'] <= 0 && $id < 0) {
				$objSlide->setImg('slider-d.jpg');
			}


			if($id < 0){

				$insertId = $this->Slides_manager->new($objSlide);

				$this->session->set_flashdata("success", "Le slider <b>{$objSlide->getLibelle()}</b> a été ajouté");

				redirect('slides/addEdit/'.$insertId, 'refresh');

			} else {

				$insertId = $this->Slides_manager->update($objSlide);

				$data['SUCCESS'] = "Le slider <b>{$objSlide->getLibelle()}</b> a été modifié";
			}
		}


		$data['objSlide']	= $objSlide;

		if ($id > 0) {

			$data['TITLE'] 		= "Modifier le slide : ".$objSlide->getLibelle();
			$data['buttonSubmit']  = "Modifier";
			$data['buttonCancel']  = "Revenir à la liste";

		} else {

			$data['TITLE'] 	= "Ajouter un nouveau slide";
			$data['buttonSubmit']  = "Ajouter le slide";
			$data['buttonCancel']  = "Annuler";

		}

        $data['CONTENT'] = $this->smarty->fetch('back/slidesAdd.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}

    /*
     * ------------------------------------------------------
     *  Méthodes d'actions et vérifications
     * ------------------------------------------------------
     */


	/**
	 ** Back : Supprression un slide, et qui redirige par la suite sur la liste
	 * @param int $id identifiant bdd du slide
	 */
	public function delete($id)
	{

		$this->Slides_manager->delete($id);
		$this->session->set_flashdata('error', "Le slide #$id a été supprimé");
		redirect('slides/ListPage', 'refresh');

	}

    /**
     ** Back : Supprression un slide, et qui redirige par la suite sur la liste
     * @param int $id identifiant bdd du slide
     */
    public function copy($id)
    {

        $this->Slides_manager->copy($id);
        $this->session->set_flashdata('success', "Le slide #$id a été copié");
        redirect('slides/ListPage', 'refresh');

    }

    public function orderUp($id)
    {

        $return = $this->Slides_manager->orderUp($id);
        if(!$return) $this->session->set_flashdata('error', "L'ordre ne peut être inférieur à 0");
        redirect('slides/ListPage', 'refresh');

    }

    public function orderDown($id)
    {

        $return = $this->Slides_manager->orderDown($id);
        if(!$return) $this->session->set_flashdata('error', "L'ordre ne peut être supérieur à 0");
        redirect('slides/ListPage', 'refresh');

    }


	public function visible($id)
	{

        $return = $this->Slides_manager->toggleVisible($id);
        $this->session->set_flashdata('infos', "Le slide est maintenant <b>".$return."</b>");
        redirect('slides/ListPage', 'refresh');

	}
}
