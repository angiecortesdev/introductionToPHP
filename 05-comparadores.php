<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = '30';

//Compara si es mayor
var_dump($numero1 > $numero2); //False
echo '<br />';

//Compara si es menor
var_dump($numero1 < $numero2); //True
echo '<br />';

//Compara si es mayor o igual a 
var_dump($numero1 >= $numero2); //False
echo '<br />';

//Compara si es menor o igual a 
var_dump($numero1 <= $numero2); //True
echo '<br />';

//Igualdad
var_dump($numero2 == $numero3); //True
echo '<br />';


var_dump($numero2 == $numero4); //True
echo '<br />';

var_dump($numero2 === $numero4); //True
echo '<br />';



var_dump($numero1 <=> $numero2); 
echo '<br />';

var_dump($numero2 <=> $numero3); 
echo '<br />';


var_dump($numero2 <=> $numero1); 
echo '<br />';





include 'includes/footer.php';