<?php
	include("");
	
	class prestations extends Connection{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function is_in_base(){
			//var_dump($_POST);
			$strQuery = "	SELECT prestation_id, prestation_slug, prestation_name, prestation_time,prestation_tarif,";
			/*$query = $this->_db->query($strQuery);
			return $query->fetchAll();*/
			return $this->_db->query($strQuery)->fetch();
		}
		
		/*public function is_in_base2($mail, $pwd){
			$strQuery = "	SELECT prestation_id, prestation_slug, prestation_name, prestation_time,prestation_tarif,";
							";

			return $this->_db->query($strQuery)->fetchAll();
		}*/

		public function get(){
			$strQuery = "	SELECT prestation_id, prestation_slug, prestation_name, prestation_time,prestation_tarif,";
							
			return $this->_db->query($strQuery)->fetch();
		}

		public function edit($objUser, $boolEditPwd = false){
			$strQuery = "	UPDATE prestation
							SET prestation_name = '".$objprestation->getprestation_name()."',
								prestation_time = '".$objprestation->getprestation_time()."',
								prestation_tarif = '".$objprestation->getprestation_tarif()."'";
			if ($boolEditPwd){
				$strQuery .= "	, prestation_pwd = '".$objUser->getPwd()."'";
			}
								
			$strQuery .= "	WHERE prestation_id = ".$_SESSION['prestation']['prestation_id'];
			return $this->_db->exec($strQuery);
		}

		public function add($objUser){
			$strQuery = "	INSERT INTO categorie (prestation_id, prestation_slug, prestation_name, prestation_time,prestation_tarif)
							VALUES (
                            '".$objprestation->getprestation_slug()."',
                            '".$objprestation->getprestation_name()."', '".$objprestation->getprestation_time()."', 
									'".$objprestation->getprestation_tarif()."', '".$objprestation->getprestation_tarif()."')";
			return $this->_db->exec($strQuery);
		}
	}