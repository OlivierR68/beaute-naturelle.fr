<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images_manager extends CI_Model {

/**
 * Fonction permettant de récupérer la liste des articles
 * @return array Tableau des slides
 */

		public function findAll(){
			$queryGroup	= $this->db
				->select("*")
				->from("image")
				->order_by("img_id", "desc")
				->get();

			return $queryGroup->result_array();
		}
	}

	public function new($obj){

		if(method_exists($obj,'getArray')) {

			$this->db->insert('image', $obj->getArray());
		}

	}