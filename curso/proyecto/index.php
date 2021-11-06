<?php

require 'abm_alumnos.php';

$mysqli = mysqli_connect("127.0.0.1:3307", "root", "", "curso");

$resultado = alumnos($mysqli);

while ($unaFila = mysqli_fetch_assoc($resultado)){ // Traer array asociativo
    print_r($unaFila);
    echo "<br>";
}

$pudoInsertar = agregarAlumno($mysqli, "Jorge");

if ($pudoInsertar){
    echo "Se inserto correctamente el registro";
    echo "<br>";
    echo "El id del ultimo registro insertado es: ".mysqli_insert_id($mysqli); // Trae el ID del ultimo registro insertado
}

else echo "No se pudo insertar el registro";
echo "<br>";


mysqli_close($mysqli);


/*
// Arrays

$nombres = ["Jorge", "Juan", "Pedro", "Banana", "Martin"]; // Arr simple
// $nombres2 = array();

array_push($nombres, "Pablo"); // Arr simple push

print_r($nombres);
echo "<br>";
print_r($nombres[2]);

echo "<br>";
$datos_personales = [
    "nombre" => "Jorge",
    "apellido" => "Peperino",
    "edad" => "25"
];

print_r($datos_personales);

$datos_personales['email'] = 'pedroj@outloo.com';
echo "<br>";
print_r($datos_personales);
echo "<br>";

foreach ($nombres as $nombre){
    echo $nombre;
    echo "<br>";
}

foreach ($datos_personales as $clave => $valor){
    echo "$clave : $valor";
    echo "<br>";
}
*/
?>