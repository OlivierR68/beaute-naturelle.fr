<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Prestation_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
    private $_prestation_id;
    private $_prestation_title;
    private $_prestation_subtext;
    private $_prestation_price;
    private $_prestation_duration;
    private $_prestation_sub_cat;
    private $_sub_cat_title;
    private $_cat_title;

	/** Constructeur **/
	public function __construct(){
		parent::__construct();
	}

	/** HYDRATATION *
	 * @param $datas
	 * @return prestation_class
	 */
	public function hydrate($datas){
		foreach($datas as $keyData => $data){
			$strSetter	= "set".str_replace("prestation_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}

	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_prestation_id;
	}

    public function getTitle(){
        return $this->_prestation_title;
    }

    public function getSubtext(){
        return $this->_prestation_subtext;
    }

    public function getPrice(){
        return $this->_prestation_price;
    }

    public function getDuration(){
        return $this->_prestation_duration;
    }

    public function getSub_cat(){
        return $this->_prestation_sub_cat;
    }

    public function getSub_cat_title(){
        return $this->_sub_cat_title;
    }

    public function getCat_title(){
        return $this->_cat_title;
    }


	/** SETTERS (pour chaque attribut) **/
    public function setId($id){
        $this->_prestation_id = $id;
    }

    public function setTitle($title){
        $this->_prestation_title = $title;
    }

    public function setSubtext($text){
        $this->_prestation_subtext = $text;
    }

    public function setPrice($price){
        $this->_prestation_price = $price;
    }

    public function setDuration($time){
        $this->_prestation_duration = $time;
    }

    public function setSub_cat($id){
        $this->_prestation_sub_cat = $id;
    }

    public function setSub_cat_title($string){
        $this->_sub_cat_title = $string;
    }

    public function setCat_title($string){
        $this->_cat_title = $string;
    }


}
