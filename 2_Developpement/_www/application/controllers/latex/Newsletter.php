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

	public function Subscribe()
	
    {
        subscribe(get_email(), $_GET['id']);
        display_items('Subscribed List',
                     get_subscibed_lists(get_email()),
                     'information', 'show-archive', 'unsubscribe');
     
        ($email, $listid) {
         if((!$email) || (!$listid) || (!list_exists($listid))
            || (!subscriber_exists($email))) {
             return false;
         
     }
         if(subcribed($email, $listid)) {
             return false;
         }
         if(!($conn=db_connect())){
             return false;
         }
         
         $query = "insert into sub_lists values ('".$email."',$listid)";
         
         $result = $conn->query($query);
         return $result;
        }
    }