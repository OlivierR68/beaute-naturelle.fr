<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class categorie_manager extends CI_Model{
	
	public function __construct(){
		
	}
	
	public function is_in_base(){
		$this->db->select('prestation_id, prestation_slug, prestation_name, prestation_time,prestation_tarif');
		$this->db->from('beaute_naturelle');
		$query 	= $this->db->get();	
		return $query->result('array');
	}
}$this->load->model('Prestations_manager');