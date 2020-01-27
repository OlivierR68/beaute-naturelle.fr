<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class categorie_manager extends CI_Model{
	
	public function findAll(){
		$this->db->select("*");
		$this->db->from("categorie");
		$this->db->order_by("categorie_id", "asc");
		return $query->result('array');
	}
}