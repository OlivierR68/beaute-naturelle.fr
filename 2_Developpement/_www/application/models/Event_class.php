<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_event_id;
	private $_event_img;
	private $_event_title;
    private $_event_createDate;
    private $_event_startDate;
	private $_event_endDate;
	private $_event_content;
    private $_event_capacity;

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
			$strSetter	= "set".str_replace("event_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}

	/** GETTERS (pour chaque attribut) **/
	public function getId(){
		return $this->_event_id;
	}

	public function getImg(){
		return $this->_event_img;
	}

	public function getTitle(){
		return $this->_event_title;
	}

	public function getCeateDate(){
		return $this->_event_createDate;
	}

	public function getContent(){
		return $this->_event_content;
	}

	public function getStartDate(){
		return $this->_event_startDate;
	}

	public function getEndDAte(){
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
