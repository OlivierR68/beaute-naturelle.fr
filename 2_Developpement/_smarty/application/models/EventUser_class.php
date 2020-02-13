<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventUser_class extends CI_Model {
    /** Les attributs de la classe - en privé **/
    private $_user_id;
	private $_event_id;
	private $_event_user_valid;
	private $_event_user_date;
	private $_event_user_valid_date;

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
            if($keyData === 'user_id'){
                $this->setUserId($data);
            }
            if($keyData === 'event_id'){
                $this->setEventId($data);
            }
            if($keyData === 'event_user_valid'){
                $this->setValid($data);
            }
            if($keyData === 'event_user_date'){
                $this->setDate($data);
            }
            if($keyData === 'event_user_valid_date'){
                $this->setValidDate($data);
            }
		}
		return $this;
	}

    /** GETTER pour la liste des attributs
     * @param bool $filter si true filter le tableau
     * @return array Liste des valeurs attributs avec clefs associatives correspondente à la bdd
     */

    public function getArray($filter = false){

        $varArray = get_object_vars($this);

        $arrInsert = array();
        foreach ($varArray as $key => $value) {
            $arrInsert[substr($key,1)] = $value;
        }

        if ($filter){
            $arrInsert = array_filter($arrInsert);
        }

        return $arrInsert;
    }

	/** GETTERS (pour chaque attribut) **/
	public function getEventId(){
		return $this->_event_id;
	}

	public function getUserId(){
		return $this->_user_id;
	}

	public function getValid(){
		return $this->_event_user_valid;
	}

	public function getDate(){
		return $this->_event_user_date;
	}

	public function getValidDate(){
		return $this->_event_user_valid_date;
	}

	/** SETTERS (pour chaque attribut) **/

	public function setUserId($id){
		$this->_event_id = $id;
	}

	public function setEventId($id){
		$this->_user_id= $id;
	}

	public function setValid($valid){
		$this->_event_user_valid = $valid;
	}

	public function setDate($date){
		$this->_event_user_date = $date;
	}

	public function setValidDate($valid_date){
		$this->_event_user_valid_date = $valid_date;
	}

}
