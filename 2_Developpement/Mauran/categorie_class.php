<?php
	class User{
		/* ATTRIBUTS */
		private $_prestation_id;
		private $_name;
		private $_firstname;
		private $_mail;
		private $_pwd;
		
		/* CONSTRUCTEUR */
		public function __construct(){
		}
		
		/* HYDRATATION */
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strSetterName = "set".ucfirst(str_replace("user_", "", $key));
				if(method_exists($this, $strSetterName)){
					$this->$strSetterName($value);
				}
			}
		}
		
		/* SETTERS */
		public function setId($intId){
			$this->_id = $intId;
		}
		public function setName($strName){
			$this->_name = trim($strName);
		}
		public function setFirstname($strFirstname){
			$this->_firstname = trim($strFirstname);
		}
		public function setMail($strMail){
			$this->_mail = strtolower(trim($strMail));
		}
		public function setPwd($strPwd){
			$this->_pwd = $strPwd;
		}
		
		/* GETTERS */
		public function getId(){
			return $this->_id;
		}
		public function getName(){
			return strtoupper($this->_name);
		}		
		public function getFirstname(){
			return $this->_firstname;
		}
		public function getMail(){
			return $this->_mail;
		}
		public function getPwd(){
			return $this->_pwd;
		}
		
		
		public function getFullName(){
			return $this->getFirstname()." ".$this->getName();
		}

	}

