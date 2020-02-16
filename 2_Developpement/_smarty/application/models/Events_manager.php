<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_manager extends CI_Model {

    /**
     * Retourne la liste de tous les événements
     */
	public function findAll()
    {

		$this->db->select("*");
        $this->db->from("event");
		$this->db->order_by("event_start_date", "ASC");
		$queryGroup	= $this->db->get();

		return $queryGroup->result_array();
	}

	public function inscription($event_id, $user_id)
    {
        $data = array(
            'user_id' => $user_id,
            'event_id' => $event_id,
            'event_user_valid' => null,
            'event_user_valid_date' => null
        );

        $this->db->insert('event_user', $data);
    }

    public function getFilling($event_id)
    {
        return $this->db->where('event_id', $event_id)->get('event_user')->num_rows();
    }

    public function is_registered($event_id, $user_id)
    {
        $user_data = $this->db->where('user_id', $user_id)->where('event_id',$event_id)->get('event_user')->row_array();

        if (!empty($user_data)) {

            if ($user_data['event_user_valid'] === null) {

                return "Demande d'inscription en cours de validation";

            } elseif ($user_data['event_user_valid'] == 1) {

                return "Demande d'inscription validé le ".$user_data['event_user_valid_date'];

            } elseif ($user_data['event_user_valid'] == 0) {

                return "Demande d'inscription refusé le ".$user_data['event_user_valid_date'];

            }

        } else return false;

    }

    public function unregister($event_id, $user_id)
    {
        $this->db->where('user_id', $user_id)->where('event_id',$event_id)->delete('event_user');
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

		$id = $obj->getId();
        $data = $obj->getArray(true);

        unset($data['event_id']);

        $this->db->where('event_id', $id)->update('event', $data);
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

		$this->db->insert('event', $array);
	}

}