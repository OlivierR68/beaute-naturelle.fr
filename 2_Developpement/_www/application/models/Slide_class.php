<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_slide_id;
	private $_slide_libelle;
	private $_slide_bg_image;
	private $_slide_banner_content;

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

	public function getBg_image(){
		return $this->_slide_bg_image;
	}

	public function getBanner_content(){
		return $this->_slide_banner_content;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_slide_id = $id;
	}

	public function setLibelle($id){
		$this->_slide_libelle = $id;
	}

	public function setBg_imd($id){
		$this->_slide_bg_image = $id;
	}

	public function setBanner_content($text){
		$this->_slide_banner_content = $text;
	}

}
