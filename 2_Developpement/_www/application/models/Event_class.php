<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_event_id;
	private $_event_img;
	private $_event_name;
	private $_event_slug;
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

		/** GETTER pour la liste des attributs
	 *@return array Liste des valeurs attributs avec clefs associatives
	 */

	public function getArray(){

		$varArray = ['id','img','name','slug','create_date','start_date','end_date','content', 'capacity'];
		$array = array();

		foreach ($varArray as &$var) {
			$varName = "_event_".$var;
			$keyName = substr($varName,1);
			$array[$keyName] =  $this->$varName;
		}

		return $array;

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

	public function getSlug(){
		return $this->_event_slug;
	}

	public function getCreate_date(){
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

/** GETTER pour contenu raccourci
	 * @param $strLimit integer Limite de taille de la chaîne de caractère
	 * @return string contenu
	 */

	public function getShortContent($strLimit = 40){

		if(strlen($this->_event_content) > $strLimit) {
			return substr($this->_event_content, 0, $strLimit)."..."; ;
		} else {
			return $this->_event_content;
		}
	}

	public function getStart_date_form(){
		return date('Y-m-d', strtotime($this->_event_start_date));
	}


	public function getEnd_date_form(){
		return date('Y-m-d', strtotime($this->_event_end_date));
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_event_id = $id;
	}

	public function setImg($img){
		$this->_event_img = $img;
	}

	public function setName($name){
		$this->_event_name = ucfirst($name);
	}

	public function setSlug($slug){
		$this->_event_slug = $slug;
	}

	public function setCreate_date($create_date){
		$this->_event_create_date = date('Y-m-d H:i:s', strtotime($create_date));
	}

	public function setStart_date($start_date){
		$this->_event_start_date = date('Y-m-d H:i:s', strtotime($start_date));
	}

	public function setEnd_date($end_date){
		$this->_event_end_date = date('Y-m-d H:i:s', strtotime($end_date));
	}

	public function setContent($content){
		$this->_event_content = $content;
	}

	public function setCapacity($capacity){
		$this->_event_capacity = $capacity;
	}

}
