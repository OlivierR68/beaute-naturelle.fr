<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Manager Users
 * @author  Steven Robert
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Images_manager extends CI_Model {

	/**
	* Fonction permettant de récupérer la liste des images
	* @return array Tableau des images
	*/

	/**
	 * Récupération liste des images
	 * @return array  tous les images
	 */
	 public function findAll($visible_only = false)
	 {
	     if ($visible_only) $this->db->where('img_validation', 1);
		 return $this->db->get('image')->result_array();
	 }

	/**
	 * Récupération d'1 image
	 * @param $id integer identifiant des images dans la bdd
	 * @return array les valeurs du image avec clefs d'association
	 */
	public function findOne($id)
	{
		$query = $this->db->where('img_id', $id)->get('image');
		return $query->row_array();
	}

	/**
	 * Création d'1 image
	 * @param $obj object image_class
	 * @return string l'id de l'insert
	 */
	 public function new($obj)
	 {
		 if (method_exists($obj, 'getArray')) {
			 $this->db->insert('image', $obj->getArray());
		 }
 
		 return $this->db->insert_id();
	 }

	/**
	 * Suppression d'1 image
	 * @param $id integer identifiant du image
	 */
	 public function delete($id)
	 {
		 $this->db->where('img_id', $id)
			 	  ->delete('image');
	 }

	/**
	 * Duplication d'1 image
	 * @param $id integer identifiant du image
	 */
	public function copy($id)
	{
		$query = $this->db->where('img_id', $id)->get('image');
		$array = $query->row_array();
		$array['img_id'] = null;

		$this->db->insert('image', $array);
	}

    public function update($obj)
    {
        $this->db->where('img_id', $obj->getId())->update('image', $obj->getArray(false, true));
    }

    public function getModerate()
    {
        return $this->db->where('img_validation', NULL)->join('user','user_id = img_author')->get('image')->result_array();
    }


    public function need_moderate()
    {
        return $this->db->where('img_validation', NULL)->get('image')->num_rows();
    }

    public function accept($id)
    {
        $data['img_validation'] = true;
        $this->db->where('img_id', $id)->update('image', $data);
    }

}