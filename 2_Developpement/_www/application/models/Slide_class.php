<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe Slides_class
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Slide_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_slide_id;
	private $_slide_position;
	private $_slide_default; // Boolean si true, le slide ne peut pas être supprimer
	private $_slide_libelle;
	private $_slide_img;
	private $_slide_type;
	private $_slide_title;
	private $_slide_text;

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
			$strSetter	= "set".str_replace("slide_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}


	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_slide_id;
	}

	public function getPosition(){
		return $this->_slide_position;

	}

	public function getDefault(){
		return $this->_slide_default;

	}

	public function getLibelle(){
		return $this->_slide_libelle;
	}

	public function getImg(){
		return $this->_slide_img;
	}

	public function getType(){
		return $this->_slide_type;
	}

	public function getTitle(){
		return $this->_slide_title;
	}


	public function getText(){
		return $this->_slide_text;
	}


	/** GETTER savoir si le texte est grand ou moyen selon le type
	 *@return string  moyen ou grand
	 */

	public function getTaille(){
		return $this->_slide_type=='h2' ?  'Moyen' : 'Grand';
	}


	/** GETTER pour la liste des attributs
	 *@return array Liste des attributs
	 */

	public function getArray(){

		$varArray = ['id','position','default','libelle','img','type','title','text'];
		$array = array();

		foreach ($varArray as &$var) {
			$varName = "_slide_".$var;
			$keyName = substr($varName,1);
			$array[$keyName] =  $this->$varName;
		}

		return $array;

	}


	/** GETTER pour sous-titre raccourci
	 * @param $strLimit integer Limite de taille de la chaîne de caractère
	 * @return string sous-titre
	 */

	public function getShortTitle($strLimit = 40){

		if(strlen($this->_slide_title) > $strLimit) {
			return substr($this->_slide_title, 0, $strLimit)."..."; ;
		} else {
			return $this->_slide_title;
		}
	}


	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_slide_id = $id;
	}

	public function setPosition($position){
		$this->_slide_position = $position;
	}

	public function setDefault($default = 0){
		$this->_slide_default = $default;
	}

	public function setLibelle($id){
		$this->_slide_libelle = $id;
	}

	public function setImg($img){
		$this->_slide_img = $img;
	}

	public function setType($type){
		$this->_slide_type = $type;
	}

	public function setTitle($title){
		$this->_slide_title = $title;
	}

	public function setText($text){
		$this->_slide_text = $text;
	}

}
