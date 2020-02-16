<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SubCategories_manager extends CI_Model
{
    public function findAll(){

        return $this->db->get('sub_category')->result_array();

    }


    public function findOne($id)
    {
        return $this->db->where('sub_cat_id', $id)->get('sub_category')->row();
    }

    public function toggleVisible($id)
    {
        $data = $this->db->select('sub_cat_visible')->where('sub_cat_id', $id)->get('sub_category')->row_array();

        if ($data['sub_cat_visible'] == false){

            $data['sub_cat_visible'] = true;
            $this->db->where('sub_cat_id', $id)->update('sub_category', $data);;
            $reponse = "visible au public";

        } elseif ($data['sub_cat_visible'] == true) {

            $data['sub_cat_visible'] = false;
            $this->db->where('sub_cat_id', $id)->update('sub_category', $data);;
            $reponse = "non visible au public";

        }

        return $reponse;
    }


    public function new($obj)
    {

        $this->db->insert('sub_category', $obj->getArray());
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where('sub_cat_id', $id)->delete('sub_category');
    }

    public function update($obj)
    {
        $this->db->where('sub_cat_id', $obj->getId())->update('sub_category', $obj->getArray(false, true));
    }


    public function deleteAll($parent_id){
        $this->db->where('sub_cat_parent', $parent_id)
            ->delete('sub_category');
    }

}