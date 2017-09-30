<?php
$m = array( "AlibabaClave" => "y los cuarenta ladronesValor",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

//Accedim a un element (mostrem només un element)
print_r($m["Alibaba"]);
	//print( $m["Alibaba"]);
print( "<br>");

//Esborrem un element
unset( $m["Harry Potter"]);

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

?>