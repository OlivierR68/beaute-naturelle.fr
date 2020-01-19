<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function home()
	{

		$data['TITLE'] 		= "A propos de Beauté Naturelle";
		$data['preTITLE']	= "Magasin & Institut";


		$data['CONTENT']	= $this->load->view('front/home', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function contact()
	{

		$data['TITLE'] 		= "Contactez-nous";
		$data['preTITLE']	= "Vous avez des questions ?";
		$data['headerImg']	= "img-contact.jpg";



		$data['CONTENT']	= '<h1>Hello</h1>';
		$this->load->view('front/content', $data);
	}
}
