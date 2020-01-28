<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	/** Front : Fonction permettant d'afficher la page du tableau de bord */
	public function index()
	{

		$data['TITLE'] 		= "Tableau de bord";



		// à remplir ici, partie frontend


		$data['CONTENT']	= $this->load->view('back/dashboard', $data, TRUE);
		$this->load->view('back/content', $data);
	}


}
