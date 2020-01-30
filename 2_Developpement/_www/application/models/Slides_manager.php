<?php
/**
 * Classe Slides_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_manager extends CI_Model {

	/**
 * Fonction permettant de récupérer la liste des articles
 * @return array Tableau des slides
 */
	public function findAll(){
		$queryGroup	= $this->db
			->select("*")
			->from("slide")
			->order_by("slide_position", "desc")
			->get();

		return $queryGroup->result_array();
	}


	public function findOne($id){
		$query	= $this->db
			->select("*")
			->from("slide")
			->where('slide_id', $id)
			->get();

		return $query->row_array();
	}




	public function new($obj){

		if(method_exists($obj,'getArray')) {

			$this->db->insert('slide', $obj->getArray());
		}

	}


	public function delete($id){

		$this->db->where('slide_id', $id);
		$this->db->delete('slide');

	}

	/**
	 * @param $id
	 */
	public function copy($id){

		$query = $this->db->select("*")
			->from("slide")
			->where('slide_id', $id)
			->get();

		$array = $query->row_array();

		$array['slide_id'] = null;
		$array['slide_position'] = null;
		$array['slide_default'] = false;

		$this->db->insert('slide',$array);

	}






}
