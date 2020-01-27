<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  prestation_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_prestation_id;
	private $_prestation_slug;
	private $_prestation_name;
	private $_prestation_time;
	private $_prestation_tarif;

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

	public function getSlug(){
		return $this->_prestation_slug;
	}

	public function getName(){
		return $this->_prestation_name;
	}

	public function getTime(){
		return $this->_prestation_time;
	}

	public function getTarif(){
		return $this->_prestation_tarif;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_prestation_id = $id;
	}

	public function setSlug($id){
		$this->_prestation_slug = $slug;
	}

	public function setName($img){
		$this->_prestation_name = $name;
	}

	public function setTime($type){
		$this->_prestation_time = $time;
	}

	public function setTarif($title){
		$this->_prestation_tarif = $tarif;
	}

}
