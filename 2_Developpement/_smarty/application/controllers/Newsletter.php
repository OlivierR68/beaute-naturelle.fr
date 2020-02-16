<?php

/**
 * Controller NEwsleter
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Newsletter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Subscribers_manager');
    }




    /**
     * Fonction AJAX permettant de vérfier si l'adresse mail envoyé est dans la bdd
     */
    public function isInBase()
    {
        $email = $this->input->get('email');
        $test = $this->Subscribers_manager->is_in_base($email);


        if ($this->input->is_ajax_request()) {

            if ($test) {

                $return = array(
                    "status" => "abonné",
                    "text" => "success",
                    "msg" => "Vous êtes abonnés, souhaitez-vous vous désabonner ?",
                    "button" => "SE DÉSABONNÉ"
                );

            } else {

                $return = array(
                    "status" => "non abonné",
                    "text" => "danger",
                    "msg" => "Vous n'êtes pas abonnés, souhaitez-vous vous abonner ?",
                    "button" => "S'ABONNÉ"
                );

            }

            echo json_encode($return);
        }


    }


    /**
     * Fonction AJAX permettant de insérer un mail dans la bdd si il n'y est pas, et de le supprimer si il y est.
     */
    public function subscribe()
    {
        $email = $this->input->get('email');
        $test = $this->Subscribers_manager->is_in_base($email);

        if ($test) {

            $this->Subscribers_manager->delete($email);

        } else {

            $this->Subscribers_manager->insert($email);

        }
    }
}
