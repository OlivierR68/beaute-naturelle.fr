<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Category_class extends CI_Model
{
    /** Les attributs de la classe - en privé **/
    private $_cat_id;
    private $_cat_title;
    private $_cat_slug;
    private $_cat_img;
    private $_cat_header;
    private $_cat_description;

    /** Constructeur **/
    public function __construct()
    {
        parent::__construct();
    }

    /** HYDRATATION *
     * @param $datas array
     * @return prestation_class un objet hydraté
     */
    public function hydrate($datas)
    {
        foreach ($datas as $keyData => $data) {
            $strSetter = "set" . str_replace("cat_", "", $keyData);
            if (method_exists($this, $strSetter)) {
                $this->$strSetter($data);
            }
        }
        return $this;
    }

    /** GETTERS (pour chaque attribut) **/
    public function getId()
    {
        return $this->_cat_id;
    }

    public function getTitle()
    {
        return $this->_cat_title;
    }

    public function getSlug()
    {

        return $this->_cat_slug;
    }

    public function getUrl()
    {
        return site_url('prestations/cat/'.$this->_cat_slug);
    }

    public function getImg()
    {
        return $this->_cat_img;
    }

    public function getImgUrl()
    {
        return base_url('uploads/prestations/'.$this->_cat_img);
    }

    public function getHeader()
    {
        return $this->_cat_header;
    }

    public function getDescription()
    {
        return $this->_cat_description;
    }


    /** GETTER pour la liste des attributs
     * @param bool $filter si true filter le tableau
     * @param bool $noId unset le id du tableau return si true
     * @return array Liste des valeurs attributs avec clefs associatives correspondente à la bdd
     */

    public function getArray($filter = false, $noId = false)
    {

        $varArray = get_object_vars($this);

        $arrInsert = array();
        foreach ($varArray as $key => $value) {
            $arrInsert[substr($key, 1)] = $value;
        }

        unset($arrInsert['user_profil_libelle']);

        if ($filter) $arrInsert = array_filter($arrInsert);

        if ($noId) unset($arrInsert['user_id']);

        return $arrInsert;
    }

    /** SETTERS (pour chaque attribut) **/
    public function setId($id)
    {
        $this->_cat_id = $id;
    }

    public function setTitle($title)
    {
        $this->_cat_title = $title;
        $this->setSlug();
    }

    public function setSlug()
    {
        $name = $this->getTitle();
        $arrAcc = array(
            'e' => array('é', 'ë', 'ê', 'è', 'É', 'È', 'Ê', 'Ë'),
            'a' => array('à', 'â', 'ä', 'ã', 'À', 'Â', 'Ä', 'Ã'),
            'i' => array('ï', 'î', 'ì', 'Ì', 'Ï', 'Î'),
            'o' => array('ö', 'ô', 'ò', 'õ', 'Ö', 'Ô', 'Ò', 'Õ'),
            'u' => array('ù', 'û', 'ü', 'Ù', 'Û', 'Ü')
        );

        foreach($arrAcc as $key => $array){
            foreach($array as $value){

                $name = str_replace($value, $key, $name);


            }
        }

        $name = trim(strtolower($name));
        $name = str_replace(' ', '-',$name);

        $this->_cat_slug = $this->getId()."-".$name;
    }

    public function setImg($img)
    {
        $this->_cat_img = $img;
    }

    public function setHeader($img)
    {
        $this->_cat_header = $img;
    }

    public function setDescription($text)
    {
        $this->_cat_description = $text;
    }
}
