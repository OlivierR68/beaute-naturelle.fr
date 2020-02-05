<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe EventUser_class
 * @author  Marc Chanteranne
 * @version 1
 *
 */

class EventUser_manager extends CI_Model {

    public function findAll(){
		$this->db->select("*");
        $this->db->from("event_user");
		$this->db->order_by("user_id", "asc");

		$queryGroup	= $this->db->get();


		return $queryGroup->result_array();
	}

}