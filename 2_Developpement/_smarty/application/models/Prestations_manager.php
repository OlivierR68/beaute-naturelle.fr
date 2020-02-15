<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Prestations_manager extends CI_Model{
	
	public function getPresta($sub_cat_id, $visible_only = false, $order = false){

	    if($visible_only) $this->db->where('prestation_visible', true);
	    if($order) $this->db->order_by('prestation_order', 'ASC');

		return $this->db->where('prestation_sub_cat', $sub_cat_id)->get('prestation')->result_array();

	}

    public function getSubCat($cat_id, $visible_only = false){

        if($visible_only) $this->db->where('sub_cat_visible', true);
        return  $this->db->where('sub_cat_parent', $cat_id)->get('sub_category')->result_array();

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

    public function deleteAll($parent_id){
        $this->db->where('prestation_sub_cat', $parent_id)
            ->delete('prestation');
    }

    public function toggleVisible($id)
    {
        $data = $this->db->select('prestation_visible')->where('prestation_id', $id)->get('prestation')->row_array();

        if ($data['prestation_visible'] == false){

            $data['prestation_visible'] = true;
            $this->db->where('prestation_id', $id)->update('prestation', $data);;
            $reponse = "visible au public";

        } elseif ($data['prestation_visible'] == true) {

            $data['prestation_visible'] = false;
            $this->db->where('prestation_id', $id)->update('prestation', $data);;
            $reponse = "non visible au public";

        }

        return $reponse;
    }

    public function update($obj)
    {
        $this->db->where('prestation_id', $obj->getId())->update('prestation', $obj->getArray(false, true));
    }


    public function copy($id)
    {
        $query = $this->db->where('prestation_id', $id)->get('prestation');
        $array = $query->row_array();

        $array['prestation_id'] = null;
        $array['prestation_visible'] = false;

        $this->db->insert('prestation', $array);
    }

    public function orderUp($id)
    {
        $data = $this->db->select('prestation_order')->where('prestation_id', $id)->get('prestation')->row_array();
        if($data['prestation_order'] > 0){

            $data['prestation_order']--;
            $this->db->where('prestation_id', $id)->update('prestation', $data);;
            return true;
        } else {
            return false;
        }

    }

    public function orderDown($id)
    {
        $data = $this->db->select('prestation_order')->where('prestation_id', $id)->get('prestation')->row_array();
        if($data['prestation_order'] < 100){

            $data['prestation_order']++;
            $this->db->where('prestation_id', $id)->update('prestation', $data);;
            return true;
        } else {
            return false;
        }

    }

}