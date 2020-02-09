<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Dashboard
 * Controller du tableau de bord du back office
 */
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	/** Back : Affichage du tableau de bord */
	public function index()
	{

		$data['TITLE'] 		= "Tableau de bord";



		// à remplir ici, partie frontend

        $data['CONTENT'] = $this->smarty->fetch('back/dashboard.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}


}
