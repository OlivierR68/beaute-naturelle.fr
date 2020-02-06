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


    public function getArray(){

        $varArray = ['id','pseudo','pwd','inscription_date','last_name','first_name','age','gender','email','tel','profil_id'];
        $array = array();

        foreach ($varArray as &$var) {
            $varName = "_user_".$var;
            $keyName = substr($varName,1);
            $array[$keyName] =  $this->$varName;
        }

        return $array;

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

	public function setPwd($pwd){
		$this->_user_pwd = password_hash($pwd , PASSWORD_DEFAULT);
	}

	public function setInscription_date($date){
		$this->_user_inscription_date = $date;
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

}
