<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collection de fonction pratique
 * @author Olivier Ravinasaga
 * @version  beta 0.1
 *
 */


/**
 * Fonction permettant qui renvoi 'bn_active' quand la condition est validée, est utilisée dans les navs
 * @param $controller string  chaine de charactère a valider
 * @param $return string chaine de charactère retoruner si validée
 * @param $settings int 1 determine le controller de la page, 2 la méthode de la page
 * @return string chaine de charactère $return
 */

function active_page($controller, $return = 'active', $settings = 0)
{
    $ci = get_instance();
    switch ($settings) {

        case 1:
            $uri = $ci->uri->rsegments['1'];
            break;
        case 2:
            $uri = $ci->uri->rsegments['2'];
            break;
        default:
            $uri =  $ci->uri->rsegments['1']."/".$ci->uri->rsegments['2'];
    }

    if ($uri == $controller) return $return;


}


/**
 * Fonction qui retourne de le nom de la méthode de la page actuelle
 * @return string le nom de la méthode
 */
function page_name()
{
    $ci = get_instance();
   return $ci->uri->rsegments['2'];

}

/**
 * Fonction qui retourne de le nom du controller de la page actuelle
 * @return string le nom du Controller de la page
 */
function ctrl_name()
{
    $ci = get_instance();
    return $ci->uri->rsegments['1'];

}


function flash_data($name)
{
    $ci = get_instance();
    return $ci->session->flashdata($name);
}


