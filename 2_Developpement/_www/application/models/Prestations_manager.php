<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class prestation_manager extends CI_Model{
	
	public function findAll(){
		$this->db->select("*");
		$this->db->from("prestation");
		$this->db->order_by("prestation_id", "asc");
		return $query->result('array');
	}
}