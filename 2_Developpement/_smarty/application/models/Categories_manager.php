<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categories_manager extends CI_Model{

    /**
     * Méthode permettant la liste des éléments dans la bdd
     * @param bool $visible_only permet de retourner que les élements visible au public
     * @return array retourne la liste des éléments
     */
	public function findAllCat($visible_only = false){

	    if($visible_only) $this->db->where('cat_visible', true);
        return $this->db->get('category')->result_array();

	}

    /**
     * Méthode permettant récupérer la liste des éléments dans la bdd
     * @param bool $visible_only permet de retourner que les élements visible au public
     * @param string $order_by permet de choisir l'odre des élements
     * @return array retourne la liste des éléments
     */
    public function findAllSubCat($visible_only = false, $order_by = 'id'){


        if($visible_only) $this->db->where('sub_cat_visible', true);

        $this->db->order_by('sub_cat_'.$order_by);

        return $this->db->join('category', 'category.cat_id = sub_category.sub_cat_parent')
            ->get('sub_category')->result_array();

    }

    /**
     * Méthode permettant de récupérer 1 élément dans la bdd
     * @param int $id identifiant de l'élément
     * @return array la liste des champs de l'élément
     */
    public function findOne($id)
    {
        return $this->db->where('cat_id', $id)->get('category')->row();
    }

    public function toggleVisible($id)
    {
        $data = $this->db->select('cat_visible')->where('cat_id', $id)->get('category')->row_array();

        if ($data['cat_visible'] == false){

            $data['cat_visible'] = true;
            $this->db->where('cat_id', $id)->update('category', $data);;
            $reponse = "visible au public";

        } elseif ($data['cat_visible'] == true) {

            $data['cat_visible'] = false;
            $this->db->where('cat_id', $id)->update('category', $data);;
            $reponse = "non visible au public";

        }

        return $reponse;
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