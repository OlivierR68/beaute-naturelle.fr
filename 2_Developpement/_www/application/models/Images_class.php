<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_img_id;
	private $_img_libelle;
	private $_img_slug;
    private $_img_src;
    private $_img_description;
	private $_img_author;
	private $_img_publi_date;
    private $_img_validation;

	/** Constructeur **/
	public function __construct(){
		parent::__construct();
	}

	/** HYDRATATION *
	 * @param $datas
	 * @return Images_class
	 */
	public function hydrate($datas){
		foreach($datas as $keyData => $data){
			$strSetter	= "set".str_replace("event_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}

	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_images_id;
	}

	public function getLibelle(){
		return $this->_images_libelle;
	}

	public function getSlug(){
		return $this->_images_slug;
	}

	public function getSrc(){
		return $this->_images_src;
	}

	public function getDescription(){
		return $this->_images_description;
	}

	public function getAuthor(){
		return $this->_images_author;
	}
	
	public function getPubli_Date(){
		return $this->_images_publi_date;
	}

	public function getValidation(){
		return $this->_images_validation;
	}
	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_images_id = $id;
	}

	public function setLibelle($libelle){
		$this->_images_Img = $libelle;
	}

	public function setSlug($slug){
		$this->_images_slug = $slug;
	}

	public function setSrc($src){
		$this->_images_src = $src;
	}

	public function setDescription($descritpion){
		$this->_images_description = $descritpion;
	}

	public function setAuthor($author){
		$this->_images_author = $author;
	}

	public function setPubli_Date($publiDate){
		$this->_images_publiDate = $publiDate;
	}

	public function setValidation($validation){
		$this->_images_validation = $validation;
	}

}
