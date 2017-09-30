<?php

//Fes un array on les claus siguin noms d'esports i els valors siguin, a la seva vegada, un array de jugadors d'aquell esport

//Array de jugadores
$jugadors_de_lacrosse = array( " Billy Bitter", " Chris Bocklet", " Jeremy Boltus" );
$jugadors_de_pilota_basca = array( " Iñaqui" );

//Arary de deportes
$esports = array();
$esports["Lacrosse"] = $jugadors_de_lacrosse;
$esports["Pilota Basca"] = $jugadors_de_pilota_basca;

foreach( $esports as $es => $jugadors ) { //Recorres la clave $esports almacenandolos en la variable $es y lo guardas como valor $jugadors
    echo "Els meu jugadors preferits de $es són ";
    foreach($jugadors as $jug => $jugadores){ 
    //Recorres el valor $jugadors que contiene el contenido de $esports y lo guardas como valor $jugadores
    	print_r($jugadores);
    }
    //jug te enmagatzemat "$esports["Lacrosse"] = $jugadors_de_lacrosse;", automàticament
    echo "<br>";
}

//Resumen: Debes concatenar unos datos con otros. Primero se ha concatenado en la variable $esports los jugadores se lacrosse y pelota basca.
//Luego recorres $esports para ir sacando los jugadores y finalmente recorres la variable con los deportes y los jugadores
?>