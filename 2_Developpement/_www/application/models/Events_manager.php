<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_manager extends CI_Model {


	public function findAll(){
		$this->db->select("*");
        $this->db->from("event, event_user");
        $this->db->where("event_id.event = event_id.event_user");
		$this->db->order_by("event_id", "asc");

		$queryGroup	= $this->db->get();

		return $queryGroup->result_array();
	}

}