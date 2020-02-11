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

    public function findOne($id)
    {

        $query = $this->db
            ->select('user_id, user_pseudo, user_avatar, user_inscription_date, user_last_name, user_first_name, user_age, user_gender, user_email, user_tel, user_profil_id, profil_libelle')
            ->join('profil', 'profil.profil_id = user.user_profil_id')
            ->where('user_id', $id)
            ->get('user');
        return $query->row_array();
    }

    public function findAll()
    {
        $queryGroup = $this->db->join('profil', 'profil.profil_id = user.user_profil_id')->get('user');
        return $queryGroup->result_array();
    }


    public function getSessionData($id){


	    $query = $this->db->where('user_id',$id)
            ->select('
                user_id AS id,
                user_pseudo AS pseudo,
                user_last_name AS name,
                user_first_name AS first_name,
                profil_level AS level,
                profil_libelle')
            ->from('user')
            ->join('profil', 'profil.profil_id = user.user_profil_id')
            ->get();


	    return $query->row_array();

    }


    /**
     * Création d'1 utilisateur
     * @param $obj object Slide_class
     * @return string l'id de l'insert
     */
    public function new($obj)
    {
        if (method_exists($obj, 'getArray')) {
            $this->db->insert('user', $obj->getArray());
        }

        return $this->db->insert_id();
        /**
         * test
         */
    }


    /**
     * Modification d'1 utilisateur
     * @param $objUser
     * @return string l'id de l'insert
     */
    public function update($objUser)
    {

        $id = $objUser->getId();
        $data = $objUser->getArray(true);

        unset($data['user_id']);

        $this->db->where('user_id', $id)->update('user', $data);
        var_dump($this->db->last_query());

    }



    /**
     * Suppression d'1 utilisateur
     * @param $id integer identifiant du slide
     */
    public function delete($id)
    {
        $this->db->where('user_id', $id)
            ->delete('user');
    }

    

}
