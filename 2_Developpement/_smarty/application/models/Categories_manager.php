<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categories_manager extends CI_Model{

	public function findAllCat(){

        return $this->db->get('category')->result_array();

	}

    public function findAllSubCat(){

        return $this->db->join('category', 'category.cat_id = sub_category.sub_cat_parent')
            ->get('sub_category')->result_array();

    }

    public function findOne($id)
    {
        return $this->db->where('cat_id', $id)->get('category')->row();
    }



    public function new($obj)
    {

        $this->db->insert('category', $obj->getArray());
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where('cat_id', $id)->delete('category');
    }

    public function update($obj)
    {
        $this->db->where('cat_id', $obj->getId())->update('category', $obj->getArray(false, true));
    }
}