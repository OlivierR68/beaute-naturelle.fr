<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class prestations_manager extends CI_Model{
	
	public function findAll(){
		$this->db->select("*");
		$this->db->from("prestation");
		$queryGroup	= $this->db->get();
        
        var_dump($queryGroup->result_array());
		return $queryGroup->result_array();
	}
}