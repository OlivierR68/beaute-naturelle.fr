<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Prestations_manager extends CI_Model{
	
	public function getPresta($sub_cat_id){

		$queryGroup	= $this->db->where('prestation_sub_cat', $sub_cat_id)->get('prestation');
		return $queryGroup->result_array();

	}

    public function getSubCat($cat_id){

        $queryGroup	= $this->db->where('cat_id', $cat_id)->get('sub_category');
        return $queryGroup->result_array();

    }
}