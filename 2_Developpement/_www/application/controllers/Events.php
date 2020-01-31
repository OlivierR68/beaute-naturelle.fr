<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Events_manager");
		$this->load->model("Event_class");
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
	public function addEdit()
	{
		$data['TITLE'] = "Ajouter des événements";

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
		redirect('events/ListePage', 'refresh');

	}
}
