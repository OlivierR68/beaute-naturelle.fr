<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model image
 * @author  Steven Robert
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Images_class extends CI_Model {
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
		foreach($datas as $keyData => $value){
			$strSetter	= "set".str_replace("img_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($value);

			}
		}
		return $this;
	}
		
	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_img_id;
	}

	public function getLibelle(){
		return $this->_img_libelle;
	}

	public function getSlug(){
		return $this->_img_slug;
	}

	public function getSrc(){
		return $this->_img_src;
	}

	public function getDescription(){
		return $this->_img_description;
	}

	public function getAuthor(){
		return $this->_img_author;
	}
	
	public function getPubli_Date(){
		return $this->_img_publi_date;
	}

	public function getValidation(){
		return $this->_img_validation;
	}


    /** GETTER pour la liste des attributs
     * @param bool $filter si true filter le tableau
     * @return array Liste des valeurs attributs avec clefs associatives correspondente à la bdd
     */

    public function getArray($filter = false){

        $varArray = get_object_vars($this);

        $arrInsert = array();
        foreach ($varArray as $key => $value) {
            $arrInsert[substr($key,1)] = $value;
        }

        if ($filter){
            $arrInsert = array_filter($arrInsert);
        }

        return $arrInsert;
    }

	/** GETTER pour contenu raccourci
	 * @param $strLimit integer Limite de taille de la chaîne de caractère
	 * @return string contenu
	 */

	 public function getShortContent($strLimit = 40){

		if(strlen($this->_image_content) > $strLimit) {
			return substr($this->_image_content, 0, $strLimit)."..."; ;
		} else {
			return $this->_image_content;
		}
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_img_id = $id;
	}

	public function setLibelle($libelle){
		$this->_img_libelle = $libelle;
	}

	public function setSlug($slug){
		$this->_img_slug = $slug;
	}

	public function setSrc($src){
		$this->_img_src = $src;
	}

	public function setDescription($descritpion){
		$this->_img_description = $descritpion;
	}

	public function setAuthor($author){
		$this->_img_author = $author;
	}

	public function setPubli_Date($publiDate){
		$this->_img_publi_date = $publiDate;
	}

	public function setValidation($validation){
		$this->_img_validation = $validation;
	}

}
