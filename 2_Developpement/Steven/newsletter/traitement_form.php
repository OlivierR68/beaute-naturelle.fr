<?php 
    
    include 'newsletter.php';

    if (isset($_GET['mail']))
{
    echo 'Votre adresse ' . $_GET['mail'] . ' est bien inscrite à la Newsletter';
} else 

{
    echo 'Entrez une adresse mail';
}