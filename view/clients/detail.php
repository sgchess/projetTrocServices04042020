<?php

$lien_liste = "<a href=\"index.php?controller=client&action=displayAll\"> liste des clients</a>";
echo "Client demandé :<br>";
echo $clt->nomClient.", ".$clt->prenomClient.", ".$clt->email;
echo "<br>";
echo $lien_liste;

?>