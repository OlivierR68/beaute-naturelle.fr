<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model image
 * @author  Steven Robert
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Event_request_class extends CI_Model {

    /** Les attributs de la classe - en privé **/
    private $_img_id;

    /** Constructeur **/
    public function __construct(){
        parent::__construct();
    }

    /** HYDRATATION *
     * @param $datas
     * @return Images_class
     */

    public function hydrate($datas){
        foreach($datas as $keyData => $value){
            $strSetter	= "set".str_replace("event_user", "", $keyData);
            if (method_exists($this, $strSetter)){
                $this->$strSetter($value);

            }
        }
        return $this;
    }

    /** GETTERS (pour chaque attribut) **/
    public function getId(){
        return $this->_img_id;
    }


    /** SETTERS (pour chaque attribut) **/

    public function setId($id){
        $this->_img_id = $id;
    }


}
