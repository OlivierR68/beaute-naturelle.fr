<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Prestations_manager extends CI_Model{
	
	public function getPresta($sub_cat_id){

		$queryGroup	= $this->db->where('prestation_sub_cat', $sub_cat_id)->get('prestation');
		return $queryGroup->result_array();

	}

    public function getSubCat($cat_id){

        $queryGroup	= $this->db->where('sub_cat_parent', $cat_id)->get('sub_category');
        return $queryGroup->result_array();

    }

    public function findAll($limit = null) {

	    if ($limit != null) $this->db->limit($limit);

        if (!empty($this->input->post('cat')) && $this->input->post('cat') != '') $this->db->where('category.cat_id', $this->input->post('cat'));
        if (!empty($this->input->post('subcat'))  && $this->input->post('subcat') != '') $this->db->where('prestation_sub_cat', $this->input->post('subcat'));

        return $this->db
            ->join('sub_category', 'sub_category.sub_cat_id = prestation.prestation_sub_cat')
            ->join('category', 'category.cat_id = sub_category.sub_cat_parent')
            ->get('prestation')
            ->result_array();
    }

    public function findOne($id)
    {
        return $this->db->where('prestation_id', $id)->get('prestation')->row();
    }

    public function new($obj)
    {

        $this->db->insert('prestation', $obj->getArray());

        return $this->db->insert_id();
    }

    /**
     * Suppression d'1 slide
     * @param $id integer identifiant du slide
     */
    public function delete($id)
    {
        $this->db->where('prestation_id', $id)
            ->delete('prestation');
    }

}