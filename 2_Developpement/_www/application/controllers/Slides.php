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

	/** Back : Fonction pour afficher la page d'un slide  (ancienne fonction plus utilisé...
	public function addPage()
	{
		$data['TITLE'] 		= "Ajouter un slide";




		if(count($this->input->post())>0){


			$config['upload_path']      = './uploads/slider/';
			$config['allowed_types']    = 'gif|jpg|png';
			$config['max_size']        	= 2048;

			$this->upload->initialize($config);
			$this->upload->do_upload('img');


			if (!$this->upload->do_upload('img'))
			{
				$data['ERROR'] = $this->upload->display_errors();

			} else {

				$_POST['img'] = $_FILES['img']['name'];


				$objSlide = new Slide_class();
				$objSlide->hydrate($this->input->post());


				$this->Slides_manager->new($objSlide);

				redirect('slides/ListPage', 'refresh');

			}


		}

		$_POST = array();
		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);

	}


	 *
	 * /


	/** Back : Fonction d'éditer un slide */


	/**
	 * Back : fonction permettant d'afficher la page de création/modification des slider
	 * @param int $id identifiant bdd du slide
	 */
	public function addEdit($id = -1)
	{
		 /*
		 	var $id par défault à -1 les id étant toujours positifs,
		 	c'est comme cela que l'on vérifie si on est sur page de création ou modification
		 	-1 = page de création | 1+ = page de modification
		 */

		$data['SUCCESS'] = $this->session->flashdata('success') ?? ''; // récupération du message de succes si il a été envoyé

		 // Création d'un objet slide qu'on utilisera tout au long de la fonction
		$objSlide = new Slide_class();

		// On vérifie si la page a un id, on l'hydrate en récupérant les infos dans la bdd
		if($id >= 0) {
			$objSlide->hydrate($this->Slides_manager->findOne($id));
		}

		// on vérifie si il y des choses qui ont été envoyés par le formulaire ($_POST)
		if(!empty($this->input->post())){

			// on hydrate avec ce qu'il y dans $_POST
			$objSlide->hydrate($this->input->post());

			// on vérifie si une image a été envoyée
			if($_FILES['img']['size'] > 0){

				//  on configure l'upload de l'image
				$config['upload_path']      = './assets/img/';
				$config['allowed_types']    = 'gif|jpg|jpeg|png';
				$config['max_size']        	= 2048;

				// l'upload de l'image est lancé  ici
				$this->upload->initialize($config);
				$this->upload->do_upload('img'); // <- c'est qu'on indique où on récupére l'image, img correspond à $_FILES['img'], le <input> dans le views avec le name='img'

				// si il y a un problème sur l'image on envoi une erreur
				if (!$this->upload->do_upload('img'))
				{
					$data['ERROR'] = $this->upload->display_errors();

				} else {

					// si tout c'est bien passé on indique le nom de l'image dans l'objet
					$upload_data = $this->upload->data();
					$objSlide->setImg($upload_data['file_name']);

				}

			}

			if($_FILES['img']['size'] <= 0 && $id < 0) {
				/*
				si on dans la page de création et qu'il n'y pas d'image uploadé on assigne une image par défault,
				attention ce n'est pas valable partout, pour la galerie par exemple il faudra refuser la création si il n'y pas d'image
				*/
				$objSlide->setImg('slider-d.jpg');

			}


			// crée ou on modifie un slide selon si on est dans la page de création ou modification
			if($id < 0){

				$insertId = $this->Slides_manager->new($objSlide); // on crée et récupère l'id sur slide
				$this->session->set_flashdata("success", "Le slider <b>{$objSlide->getLibelle()}</b> a été ajouté"); // on crée et envoi un message de succes sur la prochaine page

				redirect('slides/addEdit/'.$insertId, 'refresh'); // rédirrection sur la page modification

			} else {

				$insertId = $this->Slides_manager->update($objSlide);
				$data['SUCCESS'] = "Le slider <b>{$objSlide->getLibelle()}</b> a été modifié";
			}
		}


		$data['objSlide']	= $objSlide;

		if ($id > 0) { // modification de l'affichage selon on se trouve

			$data['TITLE'] 		= "Modifier du slide :".$objSlide->getLibelle();
			$data['buttonSubmit']  = "Modifier";
			$data['buttonCancel']  = "Revenir à la liste";

		} else {

			$data['TITLE'] 	= "Ajouter un nouveau slide";
			$data['buttonSubmit']  = "Ajouter le slide";
			$data['buttonCancel']  = "Annuler";

		}

		$data['CONTENT']	= $this->load->view('back/slidesAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}


	/**
	 ** Back : fonction permettant permettant de supprimer un slide, et qui redirige par la suite sur la liste
	 * @param int $id identifiant bdd du slide
	 */
	public function delete($id)
	{

		$this->Slides_manager->delete($id);
		redirect('slides/ListPage', 'refresh');

	}


	/**
	 ** Back : fonction permettant permettant de copier un slide, et qui redirige par la suite sur la liste
	 * @param int $id identifiant bdd du slide
	 */
	public function copy($id)
	{

		$this->Slides_manager->copy($id);
		redirect('slides/ListPage', 'refresh');

	}
}
