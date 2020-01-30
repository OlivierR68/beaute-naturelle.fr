<?php
/**
 * Classe Slides_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_manager extends CI_Model
{

	/**
	 * Récupération liste des slides
	 * @return array  tous les slides
	 */
	public function findAll()
	{
		$queryGroup = $this->db->get('slide');
		return $queryGroup->result_array();
	}


	/**
	 * Récupération d'1 slide
	 * @param $id integer identifiant du slide dans la bdd
	 * @return array les valeurs du slide avec clefs d'association
	 */
	public function findOne($id)
	{
		$query = $this->db->where('slide_id', $id)->get('slide');
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
			$this->db->insert('slide', $obj->getArray());
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
			$this->db->where('slide_id', $obj->getId())
				->replace('slide', $obj->getArray());
		}
	}


	/**
	 * Suppression d'1 slide
	 * @param $id integer identifiant du slide
	 */
	public function delete($id)
	{
		$this->db->where('slide_id', $id)->delete('slide');
	}


	/**
	 * Duplication d'1 slide
	 * @param $id integer identifiant du slide
	 */
	public function copy($id)
	{
		$query = $this->db->where('slide_id', $id)->get('slide');
		$array = $query->row_array();

		$array['slide_id'] = null;
		$array['slide_position'] = null;
		$array['slide_default'] = false;

		$this->db->insert('slide', $array);
	}
}


