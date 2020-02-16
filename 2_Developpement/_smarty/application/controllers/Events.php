<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Slides
 * @author  Marc Chanteranne
 * @version version 1
 */
class Events extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Events_manager");
        $this->load->model("Event_class");

        $this->load->model("Users_manager");
        $this->load->model("User_class");

        $this->load->library('upload');

    }

    /**
     * Fonction permettant d'afficher la liste des événements dans le front
     */
    public function index()
    {

        $data['preTITLE'] = "Participer à nos";
        $data['TITLE'] = "Événements";
        $data['headerImg'] = base_url("assets/img/img-events.jpg");


        $events = $this->Events_manager->findAll();
        $eventsToDisplay = array();
        foreach ($events as $event) {
            $objEvent = new Event_class();
            $objEvent->hydrate($event);

            if (!$objEvent->expired()) {

                $filling = $this->Events_manager->getFilling($objEvent->getId());
                $objEvent->setFilling($filling);

                $eventsToDisplay[] = $objEvent;
            }
        }

        $data['arrEvents'] = $eventsToDisplay;
        $data['CONTENT'] = $this->smarty->fetch('front/events.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    /**
     * Fonction permettant d'afficher un évenement en particulier dans le front
     * @param int $id de l'even
     */
    public function ev($id)
    {
        $obj_event = new Event_class();
        $event_data = $this->Events_manager->findOne($id);
        $obj_event->hydrate($event_data);

        $class_param = "d-block py-2 px-4 mr-1 mb-1";

        if (isset($this->session->login)) {

            $reponse_infos = $this->Events_manager->is_registered($obj_event->getId(), $this->session->id);

            if ($reponse_infos != false) {

                $smart_block = "<span class='bg-dark text-light $class_param'><i class='fas fa-info-circle mr-2'></i>$reponse_infos</span>";

                $href = site_url() . "/events/unregister/" . $obj_event->getId() . "/" . $this->session->id;
                $smart_block .= "<a class='bg-danger text-light $class_param' href='$href'><span class='text-light'>ANNULER</span></a>";

            } else {
                $href = site_url() . "/events/register/" . $obj_event->getId() . "/" . $this->session->id;
                $smart_block = "<a class='bn_bg-color-1 $class_param' href='$href'><span class='text-light'>S'INSCRIRE</span></a>";
            }
        } else {

            $reponse_infos = "Vous devez être connecté pour vous inscrire.";
            $smart_block = "<span class='bg-warning $class_param'><i class='fas fa-exclamation-triangle mr-2 '></i>$reponse_infos</span>";

        }

        $user_list_to_display = array();
        $participants_data = $this->Users_manager->getParticipants($obj_event->getId());
        foreach ($participants_data as $user_data) {
            $user_obj = new User_class();
            $user_obj->hydrate($user_data);
            $user_list_to_display[] = $user_obj;
        }


        $data['participants_list'] = $user_list_to_display;
        $data['smart_block'] = $smart_block;
        $data['obj_event'] = $obj_event;
        $data['preTITLE'] = "Le " . $obj_event->getStart_date_form();
        $data['TITLE'] = $obj_event->getName();
        $data['headerImg'] = $obj_event->getImgUrl();
        $data['CONTENT'] = $this->smarty->fetch('front/event_infos.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    public function register($event_id, $user_id)
    {

        $this->Events_manager->inscription($event_id, $user_id);
        redirect('events/ev/' . $event_id, 'refresh');

    }


    public function unregister($event_id, $user_id)
    {

        $this->Events_manager->unregister($event_id, $user_id);
        redirect('events/ev/' . $event_id, 'refresh');

    }

    /** Fonction permettant d'afficher la liste des événements dans le back
     * @param int $id identifiant bdd du slide
     */
    public function ListPage()
    {
        $data['TITLE'] = "Liste des événements";

        $events = $this->Events_manager->findAll();
        $eventsToDisplay = array();
        foreach ($events as $event) {
            $objEvent = new Event_class();
            $objEvent->hydrate($event);

            $filling = $this->Events_manager->getFilling($objEvent->getId());
            $objEvent->setFilling($filling);

            $eventsToDisplay[] = $objEvent;
        }

        $data['arrEvents'] = $eventsToDisplay;

        $data['CONTENT'] = $this->smarty->fetch('back/eventsList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
    }




    /** Fonction permettant de créer ou de modifier un événement
     * @param int $id identifiant bdd de l'événement
     */
    public function addEdit($id = -1)
    {


        $objEvent = new Event_class();

        if ($id >= 0) {

            $objEvent->hydrate($this->Events_manager->findOne($id));
        }

        if (!empty($this->input->post())) {

            $objEvent->hydrate($this->input->post());

            if ($_FILES['img']['size'] > 0) {


                $config['upload_path'] = './uploads/events/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2048;

                $this->upload->initialize($config);


                if (!$this->upload->do_upload('img')) {
                    $data['ERROR'] = $this->upload->display_errors();

                } else {

                    $upload_data = $this->upload->data();
                    $objEvent->setImg($upload_data['file_name']);

                }

            }


            if ($id < 0) {
                $objEvent->setSlug();
                $insertId = $this->Events_manager->new($objEvent);
                $this->session->set_flashdata("success", "L'événement' <b>{$objEvent->getName()}</b> a été ajouté");

                redirect('events/addEdit/' . $insertId, 'refresh');

            } else {

                $insertId = $this->Events_manager->update($objEvent);
                $data['SUCCESS'] = "L'événement' <b>{$objEvent->getName()}</b> a été modifié";
            }
        }


        $data['objEvent'] = $objEvent;

        if ($id > 0) { // modification de l'affichage selon on se trouve

            $data['TITLE'] = "Modifier l'événement :" . $objEvent->getName();
            $data['buttonSubmit'] = "Modifier";
            $data['buttonCancel'] = "Revenir à la liste";

        } else {

            $data['TITLE'] = "Ajouter un nouvel événement";
            $data['buttonSubmit'] = "Ajouter l'événement";
            $data['buttonCancel'] = "Annuler";

        }

        $data['CONTENT'] = $this->smarty->fetch('back/eventsAdd.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
    }

    /** Fonction permettant de supprimer un événement et de rediriger sur la page de la liste
     * @param int $id identifiant bdd de l'événement
     */
    public function delete($id)
    {

        $this->Events_manager->delete($id);
        $this->session->set_flashdata('error', "L'événement' #$id a été supprimé");
        redirect('events/ListPage', 'refresh');

    }


    /** Fonction permettant de copier un événement et de rediriger sur la page de la liste
     * @param int $id identifiant bdd de l'événement
     */
    public function copy($id)
    {

        $this->Events_manager->copy($id);
        $this->session->set_flashdata('success', "L'événement' #$id a été copié");
        redirect('events/ListPage', 'refresh');

    }


    public function accept_user($event_id, $user_id)
    {

        $this->Events_manager->accept_user($event_id, $user_id);
        redirect('dashboard', 'refresh');

    }


    public function refuse_user($event_id, $user_id)
    {

        $this->Events_manager->refuse_user($event_id, $user_id);
        redirect('dashboard', 'refresh');

    }


}
