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

    public function delete($email){

        $this->db->where('subscriber_email', $email)->delete('subscriber');
    }

    public function insert($email){

        $data['subscriber_id'] = null;
        $data['subscriber_email'] = $email;

        $this->db->insert('subscriber', $data);
    }

}