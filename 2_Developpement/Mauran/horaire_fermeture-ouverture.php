<?php
date_default_timezone_set('Europe/Paris'); //evite le decalage horraire
 
        /*HEURE D'OUVERTURE ET FEMETURE*/
function isWebsiteOpen()
{
    $heure = date('Gi');
 
    // de 9h30 à 18h00
    if($heure >= 900 && $heure < 1800)
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
    echo "<font color='#FFF'>ouvert</font>";
}
else
{
    echo "<font color='#FFF'>fermé</font>";
}
?>