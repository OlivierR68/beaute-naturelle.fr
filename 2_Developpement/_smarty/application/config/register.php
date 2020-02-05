<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['register_rules'] = [

    [
        'field' => 'pseudo',
        'label' => 'Pseudo',
        'rules' => 'required'
    ],
    [
        'field' => 'last_name',
        'label' => 'Nom',
        'rules' => 'required',
    ],
    [
        'field' => 'first_name',
        'label' => 'Prénom',
        'rules' => 'required'
    ],
    [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required'
    ],

    [
        'field' => 'pwd',
        'label' => 'Mot de passe',
        'rules' => 'required'
    ],

    [
        'pconf' => 'pconf',
        'label' => 'Confirmation mot de passe',
        'rules' => 'required'
    ]
];

$config['register_form'] = [

    'pseudo' => [
        'input' => ['pseudo','id=\"inputPseudo\" class=\"form-control\" placeholder=\"Pseudo\"',set_value('pseudo')],
        'error' => ["'pseudo'","'<div class=\"invalid-feedback d-block\">'","'</div>'"],
        'label' => ["'pseudo'","'inputPseudo'"]
    ],

    'last_name' => [
        'input' => ["'last_name'","set_value('last_name')","'id=\"inputNom\" class=\"form-control\" placeholder=\"Nom\"'"],
        'error' => ["'last_name'","'<div class=\"invalid-feedback d-block\">'","'</div>'"],
        'label' => ["'Nom'","'inputNom'"]
    ],

    'first_name' => [
        'input' => ["'first_name'","set_value('first_name')","'id=\"inputPrenom\" class=\"form-control\" placeholder=\"Prénom\"'"],
        'error' => ["'first_name'","'<div class=\"invalid-feedback d-block\">','</div>'"],
        'label' => ["'Prénom'","'inputPrenom'"]
    ],

    'email' => [
        'input' => ["'email'","set_value('email')","'id=\"inputEmail\" class=\"form-control\" placeholder=\"Adresse Email\"'"],
        'error' => ["'pseudo'","'<div class=\"invalid-feedback d-block\">'","'</div>'"],
        'label' => ["'Pseudo'","'inputPseudo'"]
    ],

    'pwd' => [
        'password' => ["'pwd'","set_value('pwd')","'id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de Passe\"'"],
        'error' => ["'pwd'","'<div class=\"invalid-feedback d-block\">'","'</div>'"],
        'label' => ["'Mot de Passe'","'inputPassword'"]
    ],

    'pconf' => [
        'password' => ["'pconf'","set_value('pconf')","'id=\"inputPassconf\" class=\"form-control\" placeholder=\"Confirmation Mot de Passe\"'"],
        'error' => ["'pconf'","'<div class=\"invalid-feedback d-block\">'","'</div>'"],
        'label' => ["'Confirmation Mot de Passe'","'inputPassconf'"]
    ],
];



$config['register_form2'] = [
    'pseudo'        => ['name' => 'Pseudo',         'type' => 'input'],
    'last_name'     => ['name' => 'Nom',            'type' => 'input'],
    'first_name'    => ['name' => 'Prénom',         'type' => 'input'],
    'email'         => ['name' => 'Adresse Email',  'type' => 'input'],
    'pwd'           => ['name' => 'Mot de passe',               'type' => 'password'],
    'pconf'         => ['name' => 'Confirmation mot de passe',  'type' => 'password'],
];
