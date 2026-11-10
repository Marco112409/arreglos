<?php
$numeros = [];
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}

session_start();
$_SESSION['arreglo'] = $numeros;

echo "<h3>Arreglo Aleatorio:</h3>";
echo implode(", ", $numeros);
?>