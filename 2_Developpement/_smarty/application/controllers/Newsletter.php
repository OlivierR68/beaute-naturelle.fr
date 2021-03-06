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


    public function index()
    {
        $data['TITLE'] = "Liste des abonnées à la newsletter";

        $subscribers_list = $this->Subscribers_manager->findAll();
        $data['display_list'] = $subscribers_list;

        if (!empty($this->input->get('email'))) {

            $this->Subscribers_manager->insert($this->input->get('email'));
            $this->session->set_flashdata("success", "Le courriel <b>" . $this->input->get('email') . "</b> a été ajouté à la liste.");
            redirect('/newsletter', 'refresh');

        }


        $data['CONTENT'] = $this->smarty->fetch('back/subscribersList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
    }

    public function delete($id)
    {

        $this->Subscribers_manager->delete($id);
        $this->session->set_flashdata("error", "L'adonné <b>#" . $id . "</b> a été supprimé de la liste.");
        redirect('/newsletter', 'refresh');

    }

    public function export_csv()
    {
        $array = $this->Subscribers_manager->findAll();
        $filename = "subscriber.csv";
        $delimiter = ";";
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        $f = fopen('php://output', 'w');

        foreach ($array as $line) {
            fputcsv($f, $line, $delimiter);
        }

        redirect('/newsletter', 'refresh');
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
