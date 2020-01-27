<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images_manager extends CI_Model {

	
 		public function findAll(){

		$this->db->select("*");
		$this->db->from("image");
		// $this->db->join("")
		//$this->db->order_by("img_id", "asc");

		$queryGroup	= $this->db->get();		

		return $queryGroup->result_array();

	} 

}