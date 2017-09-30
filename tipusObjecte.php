<?php

//En aquest exercici declararem una variable de tipus objecte
//instànciarem un objecte de la classe DateTime. 
//Després invocarem un métode de la classe datetime. 
//PHP utilitza la notació fletxa ( -> ) per a invocar mètodes:
//Observa que l'operador de concatenació de cadenes en php és el punt ( . ) 


$date = new DateTime();
$tipusDate = gettype( $date );
echo "La variable \$date 
      conté el valor " . $date->format( "d/m/Y").
      " i és del tipus $tipusDate";
echo "\n";
echo "El valor de \$date és " .$date->format("d/m/Y"). " ";

//Seria interessant, ara que sabem que la variable és de tipus objecte, conèixer de quina classe és aquell objecte (date)

$classeDate = get_class($date);
echo "La classe \$date és de tipus " .$classeDate. " ";

?>

