<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categories_manager extends CI_Model{

	public function findAll(){
		$this->db->select("*");
		$this->db->from("category");
		$this->db->order_by("cat_id", "asc");
        $queryGroup	= $this->db->get();
		return $queryGroup->result_array();
	}
}