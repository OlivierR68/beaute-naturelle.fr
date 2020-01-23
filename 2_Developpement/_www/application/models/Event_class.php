<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_event_id;
	private $_event_img;
	private $_event_name;
    private $_event_create_date;
    private $_event_start_date;
	private $_event_end_date;
	private $_event_content;
    private $_event_capacity;

	/** Constructeur **/
	public function __construct(){
		parent::__construct();
	}

	/** HYDRATATION *
	 * @param $datas
	 * @return Event_class
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

	public function getName(){
		return $this->_event_name;
	}

	public function getCeate_date(){
		return $this->_event_create_date;
	}

	public function getStart_date(){
		return $this->_event_start_date;
	}

	public function getEnd_date(){
		return $this->_event_end_date;
	}
	
	public function getContent(){
		return $this->_event_content;
	}

	public function getCapacity(){
		return $this->_event_capacity;
	}
	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_event_id = $id;
	}

	public function setImg($img){
		$this->_event_img = $img;
	}

	public function setName($name){
		$this->_event_name = $name;
	}

	public function setCreate_date($create_date){
		$this->_event_create_date = $create_date;
	}

	public function setStart_date($start_date){
		$this->_event_start_date = $start_date;
	}

	public function setEnd_date($end_date){
		$this->_event_end_date = $end_date;
	}

	public function setContent($content){
		$this->_event_content = $content;
	}

	public function setCapacity($capacity){
		$this->_event_capacity = $capacity;
	}

}
