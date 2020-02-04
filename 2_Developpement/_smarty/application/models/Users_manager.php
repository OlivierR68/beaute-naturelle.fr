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
	 * @return bool
	 */
	public function checkPseudo($pseudo){

		$query = $this->db->where('user_pseudo',$pseudo)
                    ->get("user");

        return !empty($query->row()) ? true : false;

	}

    public function checkEmail($email){

        $query = $this->db->where('user_email',$email)
            ->get("user");

        return !empty($query->row()) ? true : false;

    }

    public function checkLogin($email, $pwd)
    {

        $result = false;
        $query = $this->db->where('user_email', $email)
            ->get("user");

        $arrUser = $query->row_array();
        if (!empty($arrUser)) {

            if (password_verify($pwd, $arrUser['user_pwd'])) {

                $result = $arrUser['user_id'];

            }
        }

        return $result;
    }



    public function getSessionData($id){
	    $query = $this->db->where('user_id',$id)
            ->select('user_id AS id, user_pseudo AS pseudo, user_last_name AS name, user_first_name AS first_name, profil_level AS level')
            ->from('user')
            ->join('profil', 'profil.profil_id = user.user_profil_id')
            ->get();
	    return $query->row_array();

    }

	public function createAccount($obj) {

        if (method_exists($obj, 'getArray')) {
            $this->db->insert('user', $obj->getArray());
        }
        $obj->setProfil_id = 3;
        return $this->db->insert_id();

    }

}
