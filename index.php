<?php
session_start();

if (!isset($_SESSION['arreglo'])) {
    $numeros = [];
    for ($i = 0; $i < 50; $i++) {
        $numeros[] = rand(1, 100);
    }
    $_SESSION['arreglo'] = $numeros;
} else {
    $numeros = $_SESSION['arreglo'];
}

echo "<h3>Arreglo Aleatorio:</h3>";
echo implode(", ", $numeros);
?>

<form method="post" style="margin-top: 20px;">
    <button type="submit" name="mostrar_maximos">Mostrar los 3 números más grandes</button>
</form>

<?php
if (isset($_POST['mostrar_maximos'])) {
    $copia_numeros = $numeros;
    rsort($copia_numeros); 
    $tres_mayores = array_slice($copia_numeros, 0, 3); 

    echo "<h4>Los 3 números más grandes son:</h4>";
    echo implode(", ", $tres_mayores);
}
?>