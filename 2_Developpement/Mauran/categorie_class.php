<?php
	class prestation{
		/* ATTRIBUTS */
		public $_prestation_id;
        public $_prestation_slug;
		public $_prestation_name;
		public $_prestation_time;
		public $_prestation_tarif;
		
		/* CONSTRUCTEUR */
		public function __construct(){
		}
		
		/* HYDRATATION */
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strSetterName = "set".ucfirst(str_replace("prestation_", "", $key));
				if(method_exists($this, $strSetterName)){
					$this->$strSetterName($value);
				}
			}
		}
		
		/* SETTERS */
		public function setprestation_id($intprestation_id){
			$this->_id = $intprestation_id;
		}
        public function setprestation_slug($strprestation_slug){
			$this->_prestation_slug = trim($strprestation_slug);
		}
		public function setprestation_name($strprestation_name){
			$this->_prestation_name = trim($strprestation_name);
		}
		public function setprestation_time($strprestation_time){
			$this->_prestation_time = trim($strprestation_time);
		}
		public function setprestation_tarif($strprestation_tarif){
			$this->_prestation_tarif = strtolower(trim($strprestation_tarif));
		}
		
		
		/* GETTERS */
		public function getprestation_id(){
			return $this->_prestation_id;
		}
		public function getprestation_slug(){
			return strtoupper($this->_prestation_slug);
		}
        public function prestation_name(){
			return strtoupper($this->_prestation_name);
		}		
		public function getprestation_time(){
			return $this->_prestation_time;
		}
		public function getprestation_tarif(){
			return $this->_prestation_tarif;
		}
		
		
		
		public function getFullprestation(){
			return $this->getFirstprestation()." ".$this->getprestation();
		}

	}

