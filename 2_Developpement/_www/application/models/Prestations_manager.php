<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class prestations_manager extends CI_Model{
	
	public function findAll(){
		$this->db->select("*");
		$this->db->from("prestations");
		$this->db->order_by("prestations_id", "asc");
		return $query->result('array');
	}
}