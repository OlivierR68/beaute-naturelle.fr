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

}