<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe User_class
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class User_class extends CI_Model {
	/** Les attributs de la classe - en privé **/

    private $_user_id;
    private $_user_pseudo;
    private $_user_pwd;
    private $_user_inscription_date;
    private $_user_last_name;
    private $_user_first_name;
    private $_user_age;
    private $_user_gender;
    private $_user_email;
    private $_user_tel;
    private $_user_profil_id;
    private $_user_profil_libelle;
    private $_user_avatar;
    private $_user_localisation;

    /** Constructeur **/
	public function __construct(){
		parent::__construct();

	}

	/** HYDRATATION *
	 * @param $datas
	 * @return Slide_class
	 */
	public function hydrate($datas){
		foreach($datas as $keyData => $data){
			$strSetter	= "set".str_replace("user_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);

			}
		}
		return $this;
	}

	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_user_id;
	}

	public function getPseudo(){
		return $this->_user_pseudo;
	}

	public function getPwd(){
		return $this->_user_pwd;
	}

	public function getInscription_date(){
		return $this->_user_inscription_date;
	}

	public function getLast_name(){
		return $this->_user_last_name;
	}

    public function getFirst_name(){
        return $this->_user_first_name;
    }

    public function getAge(){
        return $this->_user_age;
    }

    public function getGender(){
        return $this->_user_gender;
    }

    public function getEmail(){
        return $this->_user_email;
    }

    public function getTel(){
        return $this->_user_tel;
    }

    public function getProfil_id(){
        return $this->_user_profil_id;
    }

    public function getProfil_libelle(){
        return $this->_user_profil_libelle;
    }

    public function getAvatar(){
        return $this->_user_avatar;
    }

    public function getAvatarUrl(){
        return base_url('uploads/avatar')."/".$this->_user_avatar;
    }

    public function getLocalisation(){
        return $this->_user_localisation;
    }

    public function getShortInfos() {

	    if ($this->getGender() != null || $this->getAge() != null) {

	        $infos = "(";
            $gender = "";
           if ($this->getGender() == 1)  $gender = "M";
	       if ($this->getGender() == 2)  $gender = "F";

            $infos .= $gender;
            $infos .= $this->getAge();

            return $infos.")";

        } else {
	        return "";
        }


    }


    /** GETTER pour la liste des attributs
     * @param bool $filter si true filter le tableau
     * @param bool $noId unset le id du tableau return si true
     * @return array Liste des valeurs attributs avec clefs associatives correspondente à la bdd
     */

    public function getArray($filter = false, $noId = false){

        $varArray = get_object_vars($this);

        $arrInsert = array();
        foreach ($varArray as $key => $value) {
            $arrInsert[substr($key,1)] = $value;
        }

        unset($arrInsert['user_profil_libelle']);

        if ($filter) $arrInsert = array_filter($arrInsert);

        if ($noId) unset($arrInsert['user_id']);

        return $arrInsert;
    }


    /** SETTERS (pour chaque attribut) *
     * @param $id
     */
	public function setId($id){
		$this->_user_id = $id;
	}

	public function setPseudo($pseudo){
		$this->_user_pseudo = trim($pseudo);
	}

    public function setInscription_date($date){
	    $this->_user_inscription_date = $date;
    }

	public function setPwd($pwd){
	    if ($pwd != null){
            $this->_user_pwd = password_hash($pwd , PASSWORD_DEFAULT);
        }
	}

	public function setLast_name($name){
		$this->_user_last_name = trim($name);
	}

    public function setFirst_name($name){
        $this->_user_first_name = trim($name);
    }

	public function setAge($age){
		$this->_user_age = trim($age);
	}

    public function setGender($gender){
        $this->_user_gender = $gender;
    }

    public function setEmail($email){
        $this->_user_email = $email;
    }

    public function setTel($tel){
        $this->_user_tel = $tel;
    }

    public function setProfil_id($id = 1){
        $this->_user_profil_id = $id;
    }

    public function setProfil_libelle($libelle){
        $this->_user_profil_libelle = $libelle;
    }

    public function setAvatar($img){
        $this->_user_avatar = $img;
    }

    public function setLocalisation($text){
	    $this->_user_localisation = $text;
    }

}
