<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Classe User_class
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Subscribers_manager extends CI_Model
{

    public function is_in_base($email) {

        $verif = $this->db->where('subscriber_email', $email)->get('subscriber')->row();

        return !empty($verif) ? true : false;

    }

    public function findAll()
    {
        return $this->db->get('subscriber')->result_array();
    }

    public function delete($email_or_id){

        $this->db->where('subscriber_email', $email_or_id)->or_where('subscriber_id', $email_or_id)->delete('subscriber');
    }

    public function insert($email){

        $data['subscriber_id'] = null;
        $data['subscriber_email'] = $email;

        $this->db->insert('subscriber', $data);
    }

}