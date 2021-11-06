<?php

echo "1) Se tiene dos variables con valores numéricos, calcular la suma de
ellos, la multiplicación y la resta<br><br>";

$unNumero = 10;
$otroNumero = 5;

echo "Suma de $unNumero mas $otroNumero = " .($unNumero + $otroNumero);
echo "<br>";
echo "Resta de $unNumero menos $otroNumero = " .($unNumero - $otroNumero);
echo "<br>";
echo "Multiplicacion de $unNumero por $otroNumero = " .($unNumero * $otroNumero);
echo "<br>";
echo "Resta de $unNumero por $otroNumero = " .($unNumero / $otroNumero);
echo "<br><br>";

echo "2) Se tiene tres variables con valores numéricos, estas representan
las notas de un alumno. Se necesita obtener el promedio de un
estudiante a partir de sus tres notas parciales.<br><br>";

echo "<br>";

$unaNota = 7;
$otraNota = 9;
$otraNotaMas = 10;

echo "El promedio del estudiante es: " .(($unaNota + $otraNota + $otraNotaMas) / 3);
echo "<br>";
echo "<br>";

echo "3) Dado un número ingresado en una variable determinar si el mismo
es IMPAR.<br><br>";
echo '
<form action="index.php" method="post">
Numero: <input type="number" name="numero"><br>
<input type="submit">
</form> ';

if ($_POST["numero"] % 2 == 0)
    $paridad = "par";
else
    $paridad = "impar";
echo "El numero $_POST[numero] es $paridad <br>";


echo "4) Dados 10 valores numéricos en variables separadas, informar cual
es el mayor. Investigar el concepto de ARRAY, como puede
cambiar el ejercicio con la utilización del mismo.<br><br>";

$array = array(3, 4, 9, 5, 2, 10, 23, 9, 10, 2);
$mayor = $array[0];
for ($i = 0; $i < 10; $i++){
    if ($array[$i] > $mayor){
        $mayor = $array[$i];
    }
}
echo "El array es";
echo "<br>";
var_dump($array);
echo "<br>";
echo "<br>";
echo "El mayor es $mayor <br>";

echo "5) Utilizando el concepto de ARRAY, dados 50 números enteros,
informar el promedio de los mayores que 100 y la suma de los
menores que –10.<br><br><br>";

echo "6) Dado un valor numérico X, imprimir los X primeros múltiplos de 3
que no sean múltiplos de 5.<br><br><br>";

echo "7) Define las variables \$tipo, \$grosor, \$diametro y \$marca. Establece
que el tipo sea “Rueda de camión”, el grosor 0.23, el diámetro
1.35 y la marca “Kimashuki”. Crea el código PHP donde a través
de condicionales if realices la siguiente comprobación: si el
diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje
“La rueda es para un vehículo grande”. Si es menor o igual a 1.4
debe mostrarse por pantalla el mensaje “La rueda es para un
vehículo pequeño”. En otro caso, debe mostrarse “No existe un
tamaño de rueda válido”. Modifica los valores de diámetro y
comprueba que los resultados obtenidos por pantalla sean
correctos.";