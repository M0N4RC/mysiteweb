<?php

// Variables de la fonte <font></font> :

$couleur = "coral";
$police = "Verdana";
$taille = "2";

// On ouvre le fichier et on extrait les données :

$fichier = "cont.txt";
//$myfile=fopen('cont.txt','r+');
//flock($myfile,LOCK_SH);
$compteur  = file_get_contents($fichier); 
//if(!$fp) echo "Impossible d'ouvrir le fichier ".$fichier;
//$compteur = fgets($fp, 20);

// On vérifie le nombre de hits pour le pluriel et on affiche le compteur :
$compteur+=1; 
if($compteur == 1)
{
echo "<font color=$couleur size=$taille face=$police><b>$compteur</b></font> <font face=$police size=$taille color=#000000>visite au total.</font>";
}
else
{
echo "<font color=$couleur size=$taille face=$police><b>$compteur</b></font> <font face=$police size=$taille color=#000000>visites au total.</font>";
}

// On ferme le fichier :

//fclose($fp);

// On incrémente de 1 le compteur :



// On ecrit dans le fichier :
$ab=file_put_contents($fichier, $compteur);
//$fp2 = fopen($fichier, "a");
/*if($ab) {echo 'oui';}
else { echo 'non!';}*/

// On ferme le fichier :

//fclose($fp2);

?>
