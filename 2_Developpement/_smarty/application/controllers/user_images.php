<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/** Fonction permettant d'ajouter une image dans le front
	* @param int $id identifiant bdd de l'événement
	*/

	public function user_addEdit()
	{

		 /*
		 	var $id par défault à -1 les id étant toujours positifs,
		 	c'est comme cela que l'on vérifie si on est sur page de création ou modification
		 	-1 = page de création | 1+ = page de modification
		 */

	
		 // Création d'un objet event qu'on utilisera tout au long de la fonction
		$objImage = new Images_class();
			
		// On vérifie si la page a un id, on l'hydrate en récupérant les infos dans la bdd
		if($id >= 0) {

			$objImage->hydrate($this->Images_manager->findOne($id));
		}

		// on vérifie si il y des choses qui ont été envoyés par le formulaire ($_POST)
		if(!empty($this->input->post())){
		
			// on hydrate avec ce qu'il y dans $_POST
			$objImage->hydrate($this->input->post());

			// on vérifie si une image a été envoyée
			if($_FILES['img']['size'] > 0){

				//  on configure l'upload de l'image
				$config['upload_path']      = './uploads/album/';
				$config['allowed_types']    = 'gif|jpg|jpeg|png';
				$config['max_size']        	= 2048;

				// l'upload de l'image est lancé  ici
				$this->upload->initialize($config);
				$this->upload->do_upload('img'); // <- c'est qu'on indique où on récupére l'image, img correspond à $_FILES['img'], le <input> dans le views avec le name='img'

				// si il y a un problème sur l'image on envoi une erreur
				if (!$this->upload->do_upload('img'))
				{
					$data['ERROR'] = $this->upload->display_errors();

				} else {

					// si tout c'est bien passé on indique le nom de l'image dans l'objet
					$upload_data = $this->upload->data();
					$objImage->setSrc($upload_data['file_name']);

				}

			}	

	/*		if($_FILES['img']['size'] <= 0 && $id < 0) {
				/*
				si on dans la page de création et qu'il n'y pas d'image uploadé on assigne une image par défault,
				attention ce n'est pas valable partout, pour la galerie par exemple il faudra refuser la création si il n'y pas d'image
				
				$objImage->setId('album/photos-1.jpg');        

			}

 	*/
			// crée ou on modifie une image selon si on est dans la page de création ou modification
			if($id < 0){
				$insertId = $this->Images_manager->new($objImage); // on crée et récupère l'id sur event
				$this->session->set_flashdata("success", "L'image' <b>{$objImage->getId()}</b> a été ajouté"); // on crée et envoi un message de succes sur la prochaine page

				redirect('images/user_AddEdit/'.$insertId, 'refresh'); // redirection sur la page modification

			} else {

				$insertId = $this->Images_manager->update($objImage);
				$data['SUCCESS'] = "L'image' <b>{$objImage->getId()}</b> a été modifié";
			}
		}


		$data['objImage']	= $objImage;

		if ($id > 0) { // modification de l'affichage selon on se trouve

			$data['TITLE'] 		= "Modifier l'image :".$objImage->getLibelle();
			$data['buttonSubmit']  = "Modifier";
			$data['buttonCancel']  = "Revenir à la liste";

		} else {

			$data['TITLE'] 	= "Ajouter une nouvelle image";
			$data['buttonSubmit']  = "Ajouter l'image";
			$data['buttonCancel']  = "Annuler";

		}

		$data['CONTENT'] = $this->smarty->fetch('front/user_AddImg.tpl', $data);
		$this->smarty->display('front/templates/content.tpl', $data);


	}