<?php
/**
 * Classe Slides_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Users_manager extends CI_Model {

	/**
	 * Fonction permettant de récupérer la liste des articles
	 * @return array Tableau des slides
	 */
	public function verify($email, $pwd){

		$this->db->select("*")
			->from("user")
			->where("user_email", $email)
			->where("user_pwd", $pwd);

		$query	= $this->db->get();

		return $query->row();
	}

	public function createAccount($obj) {

        if (method_exists($obj, 'getArray')) {
            $this->db->insert('user', $obj->getArray());
        }

        return $this->db->insert_id();

    }

}
