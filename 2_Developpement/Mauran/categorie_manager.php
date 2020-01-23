<?php
	include("connect_bdd.php");
	
	class prestations_tarifs_manager extends Connection{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function is_in_base(){
			//var_dump($_POST);
			$strQuery = "	SELECT categorie_id, categorie_name, categorie_firstname,
									categorie_mail
							FROM categorie
							WHERE categorie_mail = '".$_POST['mail']."'
								AND categorie_pwd = '".$_POST['passwd']."'
							";
			/*$query = $this->_db->query($strQuery);
			return $query->fetchAll();*/
			return $this->_db->query($strQuery)->fetch();
		}
		
		/*public function is_in_base2($mail, $pwd){
			$strQuery = "	SELECT categorie_id, categorie_name, categorie_firstname,
									categorie_mail
							FROM categorie
							WHERE categorie_mail = '".$mail."'
								AND categorie_pwd = '".$pwd."'
							";

			return $this->_db->query($strQuery)->fetchAll();
		}*/

		public function get(){
			$strQuery = "	SELECT categorie_id, categorie_name, categorie_firstname,
									categorie_mail
							FROM categorie
							WHERE categorie_id = ".$_SESSION['categorie']['id'];
			return $this->_db->query($strQuery)->fetch();
		}

		public function edit($objUser, $boolEditPwd = false){
			$strQuery = "	UPDATE categorie
							SET categorie_name = '".$objUser->getName()."',
								categorie_firstname = '".$objUser->getFirstname()."',
								categorie_mail = '".$objUser->getMail()."'";
			if ($boolEditPwd){
				$strQuery .= "	, categorie_pwd = '".$objUser->getPwd()."'";
			}
								
			$strQuery .= "	WHERE categorie_id = ".$_SESSION['user']['id'];
			return $this->_db->exec($strQuery);
		}

		public function add($objUser){
			$strQuery = "	INSERT INTO categorie (categorie_name, categorie_firstname, 
												categorie_mail, categorie_pwd)
							VALUES ('".$objUser->getName()."', '".$objUser->getFirstname()."', 
									'".$objUser->getMail()."', '".$objUser->getPwd()."')";
			return $this->_db->exec($strQuery);
		}
	}