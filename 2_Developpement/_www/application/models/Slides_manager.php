<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_manager extends CI_Model {


	public function findAll(){
		$this->db->select("*");
		$this->db->from("slide");
		$this->db->order_by("slide_id", "desc");

		$queryGroup	= $this->db->get();
		return $queryGroup->result_array();
	}

}
