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
		$queryGroup	= $this->db
			->select("*")
			->from("slide")
			->order_by("slide_position", "desc")
			->get();

		return $queryGroup->result_array();
	}


	public function new($obj){

		if(method_exists($obj,'getArray')) {

			$this->db->insert('slide', $obj->getArray());
		}

	}


	public function delete($id){

		$this->db->where('slide_id', $id);
		$this->db->delete('slide');

	}



	function switchPosition($idFrom, $idTo) {

		// fonction à finir... <-------------------------------------------[!]


		$positionFrom = $this->db
			->select("slide_position")
			->from("slide")
			->where('slide_id', $idFrom)
			->get();


		$positionTo = $this->db
			->select("slide_position")
			->from("slide")
			->where('slide_id', $idTo)
			->get();



		$this->db->select('field2');


	}

}
