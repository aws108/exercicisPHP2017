<?php 

echo "Els següents dos talls de codi fan exactament el mateix: ";
echo "<br/>";
echo "<br/>";
echo "for each: ";


$a = array( 1,1,2,3,5,8,13);
foreach( $a as $v ) {
    echo $v . " ";
}

echo "<br/>";

echo "for: ";

$a = array( 1,1,2,3,5,8,13);
for( $i = 0; $i < count( $a ); $i++ ) {
    echo $a[$i] . " ";
}

?>