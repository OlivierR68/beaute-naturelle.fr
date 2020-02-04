<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Newsletter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("footer");
	}
    function index() {
        $this->load->view('front/templates/footer');
	public function add_new(){
    
    $email = $this->input->post('email');
    footer (string: 'Content-type: application/x-jaon; charset=utf-8')
    $this->db->set('newsletter',"$newsletter");
    $this->db->insert('newsletter');
    $insert = $this->db->insert_id();
    echo(json_encode($insezrt));
}
}
    