<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Slides
 * @author  Marc Chanteranne
 * @version version 1
 */
 
class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Events_manager");
		$this->load->model("Event_class");
		$this->load->library('upload');
	}

	// Fonction permettant d'afficher la page des événements
	public function index()
	{

		$data['preTITLE']	= "Participer à nos";
		$data['TITLE'] 		= "Événements";
		$data['headerImg']	= "img-events.jpg";


		$events	= $this->Events_manager->findAll();
		$eventsToDisplay = array();
		foreach($events as $event){
			$objEvent 	= new Event_class();
			$objEvent->hydrate($event);
			$eventsToDisplay[] = $objEvent;
		}

		$data['arrEvents'] 	= $eventsToDisplay;
		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	/** Fonction permettant d'afficher la liste des événements
	* @param int $id identifiant bdd du slide
	*/
	public function ListPage()
	{
		$data['TITLE'] 		= "Liste des événements";

		$events	= $this->Events_manager->findAll();
		$eventsToDisplay = array();
		foreach($events as $event){
			$objEvent 	= new Event_class();
			$objEvent->hydrate($event);
			$eventsToDisplay[] = $objEvent;
		}

		$data['arrEvents'] 	= $eventsToDisplay;

		$data['CONTENT']	= $this->load->view('back/eventsList', $data, TRUE);
		$this->load->view('back/content', $data);
	}


	/** Fonction permettant de créer ou de modifier un événement
	* @param int $id identifiant bdd de l'événement
	*/
	public function addEdit($id = -1)
	{

		 /*
		 	var $id par défault à -1 les id étant toujours positifs,
		 	c'est comme cela que l'on vérifie si on est sur page de création ou modification
		 	-1 = page de création | 1+ = page de modification
		 */

		$data['SUCCESS'] = $this->session->flashdata('success') ?? ''; // récupération du message de succes si il a été envoyé

		 // Création d'un objet event qu'on utilisera tout au long de la fonction
		$objEvent = new Event_class();

		
			
		// On vérifie si la page a un id, on l'hydrate en récupérant les infos dans la bdd
		if($id >= 0) {

			$objEvent->hydrate($this->Events_manager->findOne($id));
		}

		// on vérifie si il y des choses qui ont été envoyés par le formulaire ($_POST)
		if(!empty($this->input->post())){
		
			// on hydrate avec ce qu'il y dans $_POST
			$objEvent->hydrate($this->input->post());

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
					$objEvent->setImg($upload_data['file_name']);

				}

			}	

			if($_FILES['img']['size'] <= 0 && $id < 0) {
				/*
				si on dans la page de création et qu'il n'y pas d'image uploadé on assigne une image par défault,
				attention ce n'est pas valable partout, pour la galerie par exemple il faudra refuser la création si il n'y pas d'image
				*/
				$objEvent->setImg('events/flacon-de-fleur-orange-huile.jpg');

			}


			// crée ou on modifie un événement selon si on est dans la page de création ou modification
			if($id < 0){

				$insertId = $this->Events_manager->new($objEvent); // on crée et récupère l'id sur event
				$this->session->set_flashdata("success", "L'événement' <b>{$objEvent->getName()}</b> a été ajouté"); // on crée et envoi un message de succes sur la prochaine page

				redirect('events/addEdit/'.$insertId, 'refresh'); // rédirrection sur la page modification

			} else {

				$insertId = $this->Events_manager->update($objEvent);
				$data['SUCCESS'] = "L'événement' <b>{$objEvent->getName()}</b> a été modifié";
			}
		}


		$data['objEvent']	= $objEvent;

		if ($id > 0) { // modification de l'affichage selon on se trouve

			$data['TITLE'] 		= "Modifier l'événement :".$objEvent->getName();
			$data['buttonSubmit']  = "Modifier";
			$data['buttonCancel']  = "Revenir à la liste";

		} else {

			$data['TITLE'] 	= "Ajouter un nouvel événement";
			$data['buttonSubmit']  = "Ajouter l'événement";
			$data['buttonCancel']  = "Annuler";

		}

		$data['CONTENT']	= $this->load->view('back/eventsAdd', $data, TRUE);
		$this->load->view('back/content', $data);
	}

	/** Fonction permettant de supprimer un événement et de rediriger sur la page de la liste
	* @param int $id identifiant bdd de l'événement
	*/
	public function delete($id)
	{

		$this->Events_manager->delete($id);
		$this->session->set_flashdata('error', "L'événement' #$id a été supprimé");
		redirect('events/ListPage', 'refresh');

	}


	
	/** Fonction permettant de copier un événement et de rediriger sur la page de la liste
	* @param int $id identifiant bdd de l'événement
	*/
	public function copy($id)
	{

		$this->Events_manager->copy($id);
		$this->session->set_flashdata('success', "L'événement' #$id a été copié");
		redirect('events/ListPage', 'refresh');

	}
}
