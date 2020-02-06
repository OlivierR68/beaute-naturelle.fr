<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Slides
 * @author  Olivier Ravinasaga
 * @version version 1
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

/**
		$data['CONTENT'] = $this->load->view('content',$data,TRUE);
        $this->load->view('content',$data);
*/

        $data['CONTENT'] = $this->smarty->fetch('front/home.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
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

        $data['CONTENT'] = $this->smarty->fetch('back/slidesList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}



	/**
	 * Back : fonction permettant d'afficher la page de création/modification des slider
	 * @param int $id identifiant bdd du slide
	 */
	public function addEdit($id = -1)
	{

		$objSlide = new Slide_class();

		if($id >= 0) {
			$objSlide->hydrate($this->Slides_manager->findOne($id));
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


	/**
	 ** Back : fonction permettant permettant de supprimer un slide, et qui redirige par la suite sur la liste
	 * @param int $id identifiant bdd du slide
	 */
	public function delete($id)
	{

		$this->Slides_manager->delete($id);
		$this->session->set_flashdata('error', "Le slide #$id a été supprimé");
		redirect('slides/ListPage', 'refresh');

	}


	/**
	 ** Back : fonction permettant permettant de copier un slide, et qui redirige par la suite sur la liste
	 * @param int $id identifiant bdd du slide
	 */
	public function copy($id)
	{

		$this->Slides_manager->copy($id);
		$this->session->set_flashdata('success', "Le slide #$id a été copié");
		redirect('slides/ListPage', 'refresh');

	}
}
