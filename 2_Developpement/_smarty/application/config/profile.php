<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['user_profile'] = [

    'pseudo' => [
        'name' => 'Pseudo',
        'type' => 'input'
    ],

    'last_name' => [
        'name' => 'Nom',
        'type' => 'input'
    ],

    'first_name' => [
        'name' => 'Prénom',
        'type' => 'input'
    ],

    'email' => [
        'name' => 'Adresse Email',
        'type' => 'input'
    ],

    'pwd' => [
        'name' => 'Nouveau mot de passe <span class="d-none d-lg-inline">(laisser vide pour ne pas le changer)</span>',
        'type' => 'password',

    ],

    'pconf' => [
        'name' => 'Confirmation du nouveau mot de passe',
        'type' => 'password'
    ],

    'age' => [
        'name' => 'Age',
        'type' => 'input'
    ],

    'tel' => [
        'name' => 'Téléphone',
        'type' => 'input'
    ],

    'profil_libelle' => [
        'name' => 'Profil',
        'type' => 'input',
    ],


];

$config['profile_rule'] = [

    [
        'field' => 'pseudo',
        'label' => 'Pseudo',
        'rules' => 'valid_base64|trim|required|min_length[5]|max_length[18]|callback_pseudo_check'
    ],
    [
        'field' => 'last_name',
        'label' => 'Nom',
        'rules' => 'required|alpha',
    ],
    [
        'field' => 'first_name',
        'label' => 'Prénom',
        'rules' => 'required|alpha'
    ],
    [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'trim|required|valid_email|callback_email_check'
    ],

];
