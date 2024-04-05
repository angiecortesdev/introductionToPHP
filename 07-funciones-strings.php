<?php include 'includes/header.php';

//Conocer cantidad de caracteres
$nombreCliente = 'Angie Mayoli ';
echo strlen($nombreCliente);
echo '<br />';

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;
echo '<br />';

//Convertir todo a mayúscula
echo strtoupper($nombreCliente);

echo '<br />';

//Convertir todo a minuscula
echo strtolower($nombreCliente);
echo '<br />';

echo str_replace('Angie', 'A', $nombreCliente); //Reemplazar una cadena por
echo '<br />';

$tipoCliente = 'Premium';

echo strpos($nombreCliente, 'Angie');
echo '<br />';

echo 'El cliente ' . $nombreCliente . 'es: ' . $tipoCliente;


include 'includes/footer.php';