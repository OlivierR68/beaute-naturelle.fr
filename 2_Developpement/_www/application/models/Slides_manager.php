<?php
/**
 * Classe Slides_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_manager extends CI_Model {

/**
 * Fonction permettant de récupérer la liste des articles
 * @return array Tableau des slides
 */
	public function findAll(){
		$this->db->select("*");
		$this->db->from("slide");
		$this->db->order_by("slide_id", "asc");

		$queryGroup	= $this->db->get();

		return $queryGroup->result_array();
	}

}
