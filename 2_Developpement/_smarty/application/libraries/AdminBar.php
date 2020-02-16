<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class DropdownMenu
 * Librairie Perso permettant l'affichage des compteurs de modération dans tout le site grâce à l'autoload
 * @author Olivier Ravinasaga
 */
class AdminBar
{

    function __construct()
    {

        $ci = get_instance();

        $ci->load->model('Events_manager');
        $event_manager_obj = new Events_manager();


        $ci->smarty->assign('event_register_counter', $event_manager_obj->need_moderate());


    }


}