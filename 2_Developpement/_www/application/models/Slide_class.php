<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_slide_id;
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

	public function getShortTitle($strLimit = 50){

		if(strlen($this->_slide_title) > $strLimit) {
			return substr($this->_slide_title, 0, $strLimit)."..."; ;
		} else {
			return $this->_slide_title;
		}


	}

	public function getText(){
		return $this->_slide_text;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_slide_id = $id;
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
