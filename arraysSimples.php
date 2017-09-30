<?php

//Un array a PHP és realment un mapa ordenat.
//En aquest exercici crearem un array, afegirem valors, en treurem i el pintarem:


// creo un array amb 3 elements
$a = array(5,7,11);
print_r( $a ); //Pinta la variable
echo "<br>";

//afegeixo més elements a l'array
$a[] = 13;  //Manera 1 de añadir un elemento al array
$a[] = 17;
print_r( $a );
echo "<br>";

//encara un altre
array_push ($a, 23); //Manera 2 de añadir un elemento al array
print_r( $a );
echo "<br>";

//pinto elements de l'array
echo "El valor de del tercer element de l'array és " . $a[2];
echo "<br>";

unset($a[0]); //unset — Destruye una variable especificada
unset($a[1]); // el valor 7 seguia a la possició 1
print_r( $a );


echo "<br>";
$variable = gettype($a);
echo "Si li prenem el tipus a l'array amb la funció gettype(), quin tipus obtenim?, el tipus es: ";
echo $variable;

//Eliminar un elemento del array
echo "<br>";
echo "Eliminar un elemento del array: se elimina el elemento num 3";
unset($a[3]);
print_r($a);

?>