<?php
date_default_timezone_set('Europe/Paris'); //evite le decalage horraire
 
    /*HEURE D'OUVERTURE ET FEMETURE*/
function isWebsiteOpen()
{
    //date ('Gi') --> heure --> ex : 900 = 9h00min
    //date('N') --> jour --> ex : 6 = samedi
     
    // de 9h00 à 18h00
    if(date('Gi') >= 900 && date('Gi') < 1800 || date('N') > 6 && date('Gi') >= 000 && date('Gi') < 001)
    {
        return true;
    }
    else
    {
        return false;
    }
}
 
if(isWebsiteOpen() === true)
{
    echo "<font color='#4CD4B0'>Ouvert</font>";
}
else
{
    echo "<font color='#F24D16'>Fermé</font>";
}
?>