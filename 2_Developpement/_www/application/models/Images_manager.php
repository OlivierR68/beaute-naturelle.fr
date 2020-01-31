<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images_manager extends CI_Model {

	/**
	* Fonction permettant de récupérer la liste des articles
	* @return array Tableau des slides
	*/

	/**
	 * Récupération liste des slides
	 * @return array  tous les slides
	 */
	 public function findAll()
	 {
		 $queryGroup = $this->db->get('image');
		 return $queryGroup->result_array();
	 }

	/**
	 * Récupération d'1 slide
	 * @param $id integer identifiant du slide dans la bdd
	 * @return array les valeurs du slide avec clefs d'association
	 */
	public function findOne($id)
	{
		$query = $this->db->where('image_id', $id)->get('image');
		return $query->row_array();
	}

	/**
	 * Création d'1 slide
	 * @param $obj object Slide_class
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
	 * Création d'1 slide
	 * @param $obj object Slide_class
	 * @return string l'id de l'insert
	 */
	public function update($obj)
	{
		if (method_exists($obj, 'getArray')) {
			$this->db->where('image_id', $obj->getId())
				->replace('image', $obj->getArray());
		}
	}

	/**
	 * Suppression d'1 slide
	 * @param $id integer identifiant du slide
	 */
	 public function delete($id)
	 {
		 $this->db->where('image_id', $id)
			 ->delete('image');
	 }

	/**
	 * Duplication d'1 slide
	 * @param $id integer identifiant du slide
	 */
	public function copy($id)
	{
		$query = $this->db->where('image_id', $id)->get('image');
		$array = $query->row_array();

		$array['image_id'] = null;
//		$array['image_position'] = null;
//		$array['image_default'] = false;

		$this->db->insert('image', $array);
	}
}