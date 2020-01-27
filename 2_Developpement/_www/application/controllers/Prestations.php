<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestations extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";


		// à remplir ici, parttie frontend

        $prestation	= $this->Prestation_manager->findAll();
        $slidesToDisplay = array();
        foreach($prestation as $prestation){
        $objPrestation 	= new Prestation_class();
        $objPrestation->hydrate($prestation);
        $slidesToDisplay[] = $objPrestation;

		$data['CONTENT']	= $this->load->view('front/prestations', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	   public function back()
	{   
        $data['preTITLE']	= "Préstations & Tarifs";
		$data['TITLE'] 		= "L'Institut";
		$data['headerImg']	= "img-institut.jpg";



		// à remplir ici, partie backend








		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
        
        
	}
}
