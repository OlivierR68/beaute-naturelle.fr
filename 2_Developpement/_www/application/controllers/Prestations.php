<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestations extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("Prestations_manager");
        $this->load->model("Prestations_class");
	}

	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";

		// à remplir ici, parttie frontend

        $prestations = $this->Prestations_manager->findAll();
        $slidesToDisplay = array();
        foreach($prestations as $prestations){
        $objPrestations 	= new Prestations_class();
        $objPrestations->hydrate($prestations);
        $slidesToDisplay[] = $objPrestations;
        }
		$data['CONTENT'] = $this->load->view('front/prestations', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	   
}
