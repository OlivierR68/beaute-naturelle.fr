<?php

class Contact extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules(
                    'name', 'Name',
                    'trim|required|min_length[2]|max_lenght[20]',
                /*    array(
                            'required'  => 'ERREUR %s.',
                            'is_unique' => 'This %s existe déjà.'
                    ) */
                );
                $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[2]|max_lenght[20]');
                $this->form_validation->set_rules('inputaddress', 'Inputaddress', 'trim|required|valid_email');
                $this->form_validation->set_rules('inputaddress2', 'Inputaddress2', 'required');
                $this->form_validation->set_rules('message', 'Message', 'required');

                // Si la requete est fausse
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('contact');
                }
                // Si la requete est bonne
                else
                {
                        $this->load->view('contactsuccess');
                }
        }
} 
