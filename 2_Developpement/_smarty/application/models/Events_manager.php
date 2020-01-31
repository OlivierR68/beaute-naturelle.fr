<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_manager extends CI_Model {


	public function findAll(){
		$this->db->select("*");
        $this->db->from("event");
		$this->db->order_by("event_id", "asc");

		$queryGroup	= $this->db->get();


		return $queryGroup->result_array();
	}

	/**
	 * Création d'1 événement
	 * @param $obj object Event_class
	 * @return string l'id de l'insert
	 */
	public function new($obj)
	{
		if (method_exists($obj, 'getArray')) {
			$this->db->insert('event', $obj->getArray());
		}

		return $this->db->insert_id();
	}

	/**
	 * Récupération d'1 événement
	 * @param $id integer identifiant de l'événement dans la bdd
	 * @return array les valeurs de l'événement avec clefs d'association
	 */
	public function findOne($id)
	{
		$query = $this->db->where('event_id', $id)->get('event');
		return $query->row_array();
	}

		/**
	 * Création d'1 événement
	 * @param $obj object Event_class
	 * @return string l'id de l'insert
	 */
	public function update($obj)
	{
		if (method_exists($obj, 'getArray')) {
			$this->db->where('event_id', $obj->getId())
				->replace('event', $obj->getArray());
		}
	}

		/**
	 * Suppression d'1 événement
	 * @param $id integer identifiant de l'événement
	 */
	public function delete($id)
	{
		$this->db->where('event_id', $id)
			->delete('event');
	}


	/**
	 * Duplication d'1 événement
	 * @param $id integer identifiant de l'événement
	 */
	public function copy($id)
	{
		$query = $this->db->where('event_id', $id)->get('event');
		$array = $query->row_array();

		$array['event_id'] = null;
		$array['event_position'] = null;
		$array['event_default'] = false;

		$this->db->insert('event', $array);
	}
}