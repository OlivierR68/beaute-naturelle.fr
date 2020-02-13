<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory_class extends CI_Model {
    /** Les attributs de la classe - en privé **/
    private $_sub_cat_id;
    private $_sub_cat_title;
    private $_sub_cat_parent;
    private $_cat_title;


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
            $strSetter	= "set".str_replace("sub_cat_", "", $keyData);
            if (method_exists($this, $strSetter)){
                $this->$strSetter($data);
            }
        }
        return $this;
    }

    /** GETTERS (pour chaque attribut) **/
    public function getId(){
        return $this->_sub_cat_id;
    }

    public function getTitle(){
        return $this->_sub_cat_title;
    }

    public function getParent(){
        return $this->_sub_cat_parent;
    }

    public function getCat_title(){
        return $this->_cat_title;
    }


    /** GETTER pour la liste des attributs
     * @param bool $filter si true filter le tableau
     * @param bool $noId unset le id du tableau return si true
     * @return array Liste des valeurs attributs avec clefs associatives correspondente à la bdd
     */
    public function getArray($filter = false, $noId = false){

        $varArray = get_object_vars($this);

        $arrInsert = array();
        foreach ($varArray as $key => $value) {
            $arrInsert[substr($key,1)] = $value;
        }

        if ($filter) $arrInsert = array_filter($arrInsert);
        if ($noId) unset($arrInsert['sub_cat_id']);

        foreach($arrInsert as $key => $value){
            $exp_key = explode('_', $key);

            if($exp_key[0] != 'sub'){
                unset($arrInsert[$key]);
            }
        }

        return $arrInsert;
    }

    /** SETTERS (pour chaque attribut) **/
    public function setId($id){
        $this->_sub_cat_id = $id;
    }

    public function setTitle($string){
        $this->_sub_cat_title = $string;
    }

    public function setParent($id){
        $this->_sub_cat_parent = $id;
    }

    public function setCat_title($string){
        $this->_cat_title = $string;
    }
}
