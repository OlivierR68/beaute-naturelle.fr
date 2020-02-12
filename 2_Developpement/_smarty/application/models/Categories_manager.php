<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categories_manager extends CI_Model{

	public function findAll(){

        $queryGroup	= $this->db->order_by("cat_id", "asc")->get('category');
		return $queryGroup->result_array();

	}

    public function findOne($id)
    {

        $query = $this->db->where('cat_id', $id)->get('category');
        return $query->row();

    }
}