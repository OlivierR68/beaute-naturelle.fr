<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categories_manager extends CI_Model{

	public function findAllCat(){

        return $this->db->get('category')->result_array();

	}

    public function findAllSubCat(){

        return $this->db->join('category', 'category.cat_id = sub_category.sub_cat_parent')->get('sub_category')->result_array();

    }

    public function findOne($id)
    {

        $query = $this->db->where('cat_id', $id)->get('category');
        return $query->row();

    }
}