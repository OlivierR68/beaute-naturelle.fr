<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  prestations_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $_prestations_id;
	private $_prestations_slug;
	private $_prestations_name;
	private $_prestations_time;
	private $_prestations_tarif;

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
		return $this->_prestations_id;
	}

	public function getSlug(){
		return $this->_prestations_slug;
	}

	public function getName(){
		return $this->_prestations_name;
	}

	public function getTime(){
		return $this->_prestations_time;
	}

	public function getTarif(){
		return $this->_prestations_tarif;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setId($id){
		$this->_prestations_id = $id;
	}

	public function setSlug($id){
		$this->_prestations_slug = $slug;
	}

	public function setName($img){
		$this->_prestations_name = $name;
	}

	public function setTime($type){
		$this->_prestations_time = $time;
	}

	public function setTarif($title){
		$this->_prestations_tarif = $tarif;
	}

}
