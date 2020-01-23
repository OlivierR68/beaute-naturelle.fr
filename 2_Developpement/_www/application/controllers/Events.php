<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Events_manager");
		$this->load->model("Event_class");
	}

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

	public function back()
	{
		$data['preTITLE']	= "Participer à nos";
		$data['TITLE'] 		= "Événements";
		$data['headerImg']	= "img-events.jpg";


		// à remplir ici, partie frontend





		$data['CONTENT']	= $this->load->view('back/dashboard', $data, TRUE);
		$this->load->view('back/content', $data);
	}
}
