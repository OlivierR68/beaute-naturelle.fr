<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventUser_manager extends CI_Model {


	public function findAll(){
		$this->db->select("*");
        $this->db->from("event_user");
		$this->db->order_by("event_user_date", "desc");

		$queryGroup	= $this->db->get();


		return $queryGroup->result_array();
    }
    
    public function findNoValid(){
		$this->db->select("*");
        $this->db->from("event_user");
        $this->db->where("event_user_valid", "0");
		$this->db->order_by("event_user_date", "desc");

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
			$this->db->insert('event_user', $obj->getArray());
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
		$query = $this->db->where('event_id', $id)->get('event_user');
		return $query->row_array();
	}

		/**
	 * Création d'1 événement
	 * @param $obj object Event_class
	 * @return string l'id de l'insert
	 */
	public function update($obj)
	{

		$id = $obj->getId();
        $data = $obj->getArray(true);

        unset($data['event_id']);

        $this->db->where('event_id', $id)->update('event_user', $data);
	}


}