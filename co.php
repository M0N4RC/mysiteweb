<?php 
$fichier = "cont.txt";
$compteur  = file_get_contents($fichier); 

echo$compteur;
?>