<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function home()
	{
		$data['preTITLE']	= "Magasin & Institut";
		$data['TITLE'] 		= "A propos de Beauté Naturelle";

		$data['CONTENT']	= $this->load->view('front/home', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function contact()
	{
		$data['preTITLE']	= "Vous avez des questions ?";
		$data['TITLE'] 		= "Contactez-nous";
		$data['headerImg']	= "img-contact.jpg";

		$data['CONTENT']	= $this->load->view('front/contact', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function about()
	{
		$data['preTITLE']	= "Découvrez";
		$data['TITLE'] 		= "Notre Établissement";
		$data['headerImg']	= "img-magasin.jpg";

		$data['CONTENT']	= $this->load->view('front/about', $data, TRUE);
		$this->load->view('front/content', $data);
	}

	public function mentions()
	{
		$data['preTITLE']	= "Obligations Légales";
		$data['TITLE'] 		= "Mentions Légales";
		$data['headerImg']	= "img-mentions.jpg";

		$data['CONTENT']	= $this->load->view('front/mentions', $data, TRUE);
		$this->load->view('front/content', $data);

	}

	public function politique()
	{
		$data['preTITLE']	= "Protection des Données";
		$data['TITLE'] 		= "Politique de Confidentialité";
		$data['headerImg']	= "img-mentions.jpg";

		$data['CONTENT']	= $this->load->view('front/politique', $data, TRUE);
		$this->load->view('front/content', $data);

	}

	public function sitemap()
	{
		$data['preTITLE']	= "Arborescence";
		$data['TITLE'] 		= "Plan du Site";
		$data['headerImg']	= "img-sitemap.jpg";

		$data['CONTENT']	= $this->load->view('front/sitemap', $data, TRUE);
		$this->load->view('front/content', $data);

	}
}
