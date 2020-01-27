<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Contact_manager");
		$this->load->model("Contact_class");
    }
}

public function index(){
    $data = $postData = array()

    // Si la requete est envoyée
    if($this->input->post('contactSubmit')){

        // Donnée du contact
        $formData = $this->input->post();

        // Regle du formulaire pour validation
        $this->form_validation->set_rules('name', 'Name', 'required')
        $this->form_validation->set_rules('name', 'Name', 'required')
        $this->form_validation->set_rules('email', 'Email', 'required')
        $this->form_validation->set_rules('tel', 'Tel', 'required')
        $this->form_validation->set_rules('message', 'Message', 'required')

        // Valider le formulaire du data
        if($this->form_validation->run() == true){

            // Definire email data
            $mailData = array(
                'name' => $formData['name'],
                'email' => $formData['email'],
                'tel' => $formData['tel'],
                'message' => $formData['message'],
            );

            // Envoyer l'email
            $send = $this->sendEmail($mailData);

            // Verifier le status de l'envoi
            if($send){
                $formData = array();

                $data['status'] = array(
                    'type' => 'reussi'
                    'msg' => 'Votre demande de contact a bien été envoyé.'
                );
            }else{
                $data['status'] = array(
                    'type' => 'erreur',
                    'msg' => 'Votre demande a échouée, veuillez réessayer.'
                );
            }
        }
    }
    
    // POST data vers view
    $data['postData'] = $formData;
    
    // Pass data vers view
    $this->load->view('contact/index', $data);
}

private function sendEmail($mailData){
    // Email library
    $this->load->library('email');
    
    // Mail config
    $to = 'stevenrobert08@gmail.com';
    $from = 'Mariejeanne@gmail.com';
    $fromName = 'Marie jeanne';
    $mailSubject = 'Demande de contact envoyée par '.$mailData['name'];
    
    // Mail contenu
    $mailContent = '
        <h2>Contact Request Submitted</h2>
        <p><b>Name: </b>'.$mailData['name'].'</p>
        <p><b>Email: </b>'.$mailData['email'].'</p>
        <p><b>Subject: </b>'.$mailData['tel'].'</p>
        <p><b>Message: </b>'.$mailData['message'].'</p>
    ';
        
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $this->email->to($to);
    $this->email->from($from, $fromName);
    $this->email->subject($mailTel);
    $this->email->message($mailContent);
    
    // Envoyer email & return status
    return $this->email->send()?true:false;
}

}