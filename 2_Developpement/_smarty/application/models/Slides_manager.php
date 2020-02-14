<?php
/**
 * Classe Slides_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_manager extends CI_Model
{

	/**
	 * Récupération liste des slides
	 * @return array  tous les slides
	 */
	public function findAll($visible_only = false)
	{
	    if ($visible_only) $this->db->where('slide_visible',true);
		return $this->db->order_by('slide_order')->get('slide')->result_array();
	}


	/**
	 * Récupération d'1 slide
	 * @param $id integer identifiant du slide dans la bdd
	 * @return array les valeurs du slide avec clefs d'association
	 */
	public function findOne($id)
	{
		$query = $this->db->where('slide_id', $id)->get('slide');
		return $query->row_array();
	}


	/**
	 * Création d'1 slide
	 * @param $obj object Slide_class
	 * @return string l'id de l'insert
	 */
	public function new($obj)
	{
		if (method_exists($obj, 'getArray')) {
			$this->db->insert('slide', $obj->getArray());
		}

		return $this->db->insert_id();
	}


	/**
	 * Création d'1 slide
	 * @param $obj object Slide_class
	 * @return string l'id de l'insert
	 */
	public function update($obj)
	{

        $id = $obj->getId();
        $data = $obj->getArray(true, true);

        $this->db->where('slide_id', $id)->update('slide', $data);
	}


	/**
	 * Suppression d'1 slide
	 * @param $id integer identifiant du slide
	 */
	public function delete($id)
	{
		$this->db->where('slide_id', $id)
			->delete('slide');
	}


	/**
	 * Duplication d'1 slide
	 * @param $id integer identifiant du slide
	 */
	public function copy($id)
	{
		$query = $this->db->where('slide_id', $id)->get('slide');
		$array = $query->row_array();

		$array['slide_id'] = null;
		$array['slide_position'] = null;
		$array['slide_visible'] = false;

		$this->db->insert('slide', $array);
	}


    public function toggleVisible($id)
    {
        $data = $this->db->select('slide_visible')->where('slide_id', $id)->get('slide')->row_array();

        if ($data['slide_visible'] == false){

            $data['slide_visible'] = true;
            $this->db->where('slide_id', $id)->update('slide', $data);;
            $reponse = "visible au public";

        } elseif ($data['slide_visible'] == true) {

            $data['slide_visible'] = false;
            $this->db->where('slide_id', $id)->update('slide', $data);;
            $reponse = "non visible au public";

        }

        return $reponse;
    }

    public function orderUp($id)
    {
        $data = $this->db->select('slide_order')->where('slide_id', $id)->get('slide')->row_array();
        if($data['slide_order'] > 0){

            $data['slide_order']--;
            $this->db->where('slide_id', $id)->update('slide', $data);;
            return true;
        } else {
            return false;
        }

    }

    public function orderDown($id)
    {
        $data = $this->db->select('slide_order')->where('slide_id', $id)->get('slide')->row_array();
        if($data['slide_order'] < 100){

            $data['slide_order']++;
            $this->db->where('slide_id', $id)->update('slide', $data);;
            return true;
        } else {
            return false;
        }

    }
}


