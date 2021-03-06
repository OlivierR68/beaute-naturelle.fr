<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['register_rules'] = [

    [
        'field' => 'pseudo',
        'label' => 'Pseudo',
        'rules' => 'trim|required|min_length[5]|max_length[18]|callback_pseudo_check|alpha_numeric'
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

    [
        'field' => 'pwd',
        'label' => 'Mot de passe',
        'rules' => 'required|callback_pwd_check'
    ],

    [
        'field' => 'pconf',
        'label' => 'Confirmation mot de passe',
        'rules' => 'trim|required|matches[pwd]'
    ]
];



$config['register_form2'] = [

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
        'name' => 'Mot de passe',
        'type' => 'password'
    ],

    'pconf' => [
        'name' => 'Confirmation mot de passe',
        'type' => 'password'
    ],

];


