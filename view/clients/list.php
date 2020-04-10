<?php

//Util::affiche($res);

echo "<ul>";
foreach ($res as $i => $clt) {
	$lien_detail = "<a href=\"index.php?controller=client&action=display&nom=".$clt->nomClient."\">détails</a>";
	echo "<li>".$clt->nomClient.", ".$clt->prenomClient.", ".$clt->email." | ".$lien_detail."</li>";
}
echo "</ul>";

?>