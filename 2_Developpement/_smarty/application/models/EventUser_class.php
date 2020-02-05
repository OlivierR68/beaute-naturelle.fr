<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe EventUser_class
 * @author  Marc Chanteranne
 * @version 1
 *
 */

class EventUser_class extends CI_Model {
	/** Les attributs de la classe - en privé **/
	private $event_user_valid;
    private $event_user_date;
    private $event_user_valid_date; 

	/** Constructeur **/
	public function __construct(){
		parent::__construct();
    }
    
    

	/** HYDRATATION *
	 * @param $datas
	 * @return EventUser_class
	 */
	public function hydrate($datas){
		foreach($datas as $keyData => $data){
			$strSetter	= "set".str_replace("event_user_", "", $keyData);
			if (method_exists($this, $strSetter)){
				$this->$strSetter($data);
			}
		}
		return $this;
	}



    public function getValid(){
        return $this->$event_user_valid;
    }

    public function getDate(){
        return $this->$event_user_date;
    }

    public function getValidDate(){
        return $this->$event_user_valid_date;
    }


    public function setValid($valid){
        $this->$event_user_valid = $valid;
    }

    public function setDate($date){
        $this->$event_user_date = $date;
    }

    public function setValidDate($valid_date){
        $this->$event_user_valid_date = $valid_date;
    }

}
