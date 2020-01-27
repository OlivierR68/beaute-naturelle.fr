<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_manager extends CI_Model {


	public function findAll(){
		$queryGroup	= $this->db
			->select("*")
			->from("slide")
			->order_by("slide_position", "desc")
			->get();

		return $queryGroup->result_array();
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
