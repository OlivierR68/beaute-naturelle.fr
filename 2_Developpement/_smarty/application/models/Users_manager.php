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
        $query = $this->db->where('user_id', $id)->get('user');
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

	public function createAccount($obj) {

        if (method_exists($obj, 'getArray')) {
            $this->db->insert('user', $obj->getArray());
        }
        $obj->setProfil_id = 3;
        return $this->db->insert_id();

    }

    /**
     * Création d'1 slide
     * @param $obj object Slide_class
     * @return string l'id de l'insert
     */
    public function new($obj)
    {
        if (method_exists($obj, 'getArray')) {
            $this->db->insert('user', $obj->getArray());
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
            $this->db->where('user_id', $obj->getId())
                ->replace('user', $obj->getArray());
        }
    }


    /**
     * Suppression d'1 slide
     * @param $id integer identifiant du slide
     */
    public function delete($id)
    {
        $this->db->where('user_id', $id)
            ->delete('user');
    }


}
