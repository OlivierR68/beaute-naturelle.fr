<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function index()
    {
        $data['TITLE'] = "J'ai la patate!";


        $data['CONTENT'] = $this->smarty->fetch('home.tpl', $data);
        $this->smarty->display('structure.tpl', $data);
    }
}
