<?php
	include("connect_bdd.php");
	
	class User_manager extends Connection{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function is_in_base(){
			//var_dump($_POST);
			$strQuery = "	SELECT user_id, user_name, user_firstname,
									user_mail
							FROM users
							WHERE user_mail = '".$_POST['mail']."'
								AND user_pwd = '".$_POST['passwd']."'
							";
			/*$query = $this->_db->query($strQuery);
			return $query->fetchAll();*/
			return $this->_db->query($strQuery)->fetch();
		}
		
		/*public function is_in_base2($mail, $pwd){
			$strQuery = "	SELECT user_id, user_name, user_firstname,
									user_mail
							FROM users
							WHERE user_mail = '".$mail."'
								AND user_pwd = '".$pwd."'
							";

			return $this->_db->query($strQuery)->fetchAll();
		}*/

		public function get(){
			$strQuery = "	SELECT user_id, user_name, user_firstname,
									user_mail
							FROM users
							WHERE user_id = ".$_SESSION['user']['id'];
			return $this->_db->query($strQuery)->fetch();
		}

		public function edit($objUser, $boolEditPwd = false){
			$strQuery = "	UPDATE users
							SET user_name = '".$objUser->getName()."',
								user_firstname = '".$objUser->getFirstname()."',
								user_mail = '".$objUser->getMail()."'";
			if ($boolEditPwd){
				$strQuery .= "	, user_pwd = '".$objUser->getPwd()."'";
			}
								
			$strQuery .= "	WHERE user_id = ".$_SESSION['user']['id'];
			return $this->_db->exec($strQuery);
		}

		public function add($objUser){
			$strQuery = "	INSERT INTO users (user_name, user_firstname, 
												user_mail, user_pwd)
							VALUES ('".$objUser->getName()."', '".$objUser->getFirstname()."', 
									'".$objUser->getMail()."', '".$objUser->getPwd()."')";
			return $this->_db->exec($strQuery);
		}
	}