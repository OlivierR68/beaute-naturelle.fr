<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Category_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_categorie_id;
	private $_categorie_img;
	private $_categorie_alt;
	private $_categorie_slug;
	private $_categorie_name;
    private $_categorie_description;

    /** Constructeur **/
	public function __construct(){
		parent::__construct();
	}

	/** HYDRATATION *
	 * @param $datas array
	 * @return prestation_class un objet hydraté
	 */
	public function hydrate($datas){
		foreach($datas as $keyData => $data){
			$strSetter	= "set".str_replace("categorie_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}

	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_categorie_id;
	}

	public function getImg(){
		return $this->_categorie_img;
	}

	public function getAlt(){
		return $this->_categorie_alt;
	}

	public function getSlug(){
		return $this->_categorie_slug;
	}

	public function getName(){
		return $this->_categorie_name;
	}
    public function getDescription(){
		return $this->_categorie_description;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_categorie_id = $id;
	}

	public function setImg($img){
		$this->_categorie_img = $img;
	}

	public function setAlt($alt){
		$this->_categorie_alt = $alt;
	}

	public function setSlug($slug){
		$this->_categorie_slug = $slug;
	}

	public function setName($name){
		$this->_categorie_name = $name;
	}
    public function setDescription($description){
		$this->_categorie_description = $description;
	}

}
