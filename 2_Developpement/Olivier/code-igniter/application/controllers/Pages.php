<?php

	class Pages extends CI_Controller{
		public function index(){

			$data['title'] = 'Lastest Posts';

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
	}
