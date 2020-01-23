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








		$data['CONTENT']	= $this->load->view('front/prestations', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function back()
	{



		// à remplir ici, partie backend








		$data['CONTENT']	= $this->load->view('front/events', $data, TRUE);
		$this->load->view('front/content', $data);
	}
}
