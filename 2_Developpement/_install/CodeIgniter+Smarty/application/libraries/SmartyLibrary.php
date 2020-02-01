<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'third_party/smarty/libs/Smarty.class.php');

class SmartyLibrary extends Smarty {

    function __construct() {
        parent::__construct();

        // Define directories, used by Smarty:
        $this->setTemplateDir(APPPATH . 'views');
        $this->setCompileDir(APPPATH . 'cache/smarty_templates_cache');
        $this->setCacheDir(APPPATH . 'cache/smarty_cache');
    }


}