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
		$this->load->model("User_manager");
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
    /// ajax post request
         
            $(document).ready(function() {
           }
            $("#newsletter").click(function(e) {
                e.preventDefault();
                var email = $("yurEmail").val();
                $.ajax({
                type: "POST",
                url: post_url,
                data : {"email" : email},
                dataType: "json",
                success: function (data) {
                console.log(data);}
                });
            });