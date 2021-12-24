<?php

require "abmalumnos.php";
require_once 'Persona.php';
require_once 'Hogar.php';

$mysqli = mysqli_connect("127.0.0.1", "root", "Billypilgrim42", "curso", "3306");

$leer = mysqli_query($mysqli, "SELECT * FROM alumnos;");

while ($unaFila = mysqli_fetch_assoc($leer)){
    print_r($unaFila);
}

$pudoInsertar = mysqli_query($mysqli, 'INSERT INTO alumnos (nombre, edad, mail) VALUES ("Pedro", 25, "mattsalva@falso.com")');
if ($pudoInsertar){
    echo "Se inserto correctamente el registro";
    echo "<br>";
    echo "El ID del ultimo registro insertado es ".mysqli_insert_id($mysqli);
}
else
    echo "No se pudo insertar";
echo "<br>";

if (agregarAlumno($mysqli, [
    "nombre" => 'Carlos',
    "edad" => 19
])){
    echo "<br>";
    echo "Se ha ingresado con agregarAlumno";
}
    /*
// Arrays

$nombre = [];
$nombre2 = array();

$nombre3 = ["Carlos", "Juan", "Domingo"];
$carlos = $nombre3[0];
print_r($nombre3);

array_push($nombre3, "Juanito");
$nombres4 = [
    "id" => "1",
    "nombre" => "Carlos",
    "edad" => 19
];

$nombres4['email'] = "carlos@mailfalso.com";

print_r($nombres4);

echo "<br>";

foreach ($nombre3 as $nombre){
    echo $nombre;
    echo "<br>";
}

foreach ($nombres4 as $clave => $valor ){
    echo $clave.": ".$valor;
    echo "<br>";
} */

// Objetos

$unaPersona = new Persona("Pedro", "Dorrego", "perro@gmail.com");


$unaPersona ->setNombre("Carlos");
$unaPersona->setApellido("Perez");
$unaPersona->setEmail("falsomail@hotmail.com");

$nombre = $unaPersona ->getNombre();
$apellido = $unaPersona->getApellido();
$email = $unaPersona->getEmail();


$unHogar = new Hogar("Antartida Argentina 4377");

$unHogar->agregarPersona($unaPersona);


echo $unHogar->cantHabitantes();

isset($_POST["nombre"]) ? $nombre_form = $_POST["nombre"] : $nombre_form = "";
isset($_POST["apellido"]) ? $apellido_form = $_POST["apellido"] : $apellido_form = "";
isset($_POST["correo"]) ? $correo_form = $_POST["correo"] : $correo_form = "";

$personaForm = new Persona($nombre_form, $apellido_form, $correo_form);

?>

<!DOCTYPE HTML>
<html lang="en_US">
<head>
    <link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
    <form action="index.php" method="post">
        <label>Name: </label><input type="text" name="name"><br>
        <label>E-mail: </label><input type="text" name="email"><br>
        <button type="submit">Enviar</button>
    </form>

    <h1><?php isset($_POST["name"]) ? print $_POST["name"] : ""; ?></h1>
    <h3><?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?></h3>

    <p>Ingrese datos de la persona</p>
    <form action="index.php" method="post">
        Nombre: <input name="nombre" type="text"><br>
        Apellido: <input name="apellido" type="text"><br>
        Email: <input name="correo" type="email"> <br>
        <button type="submit">Enviar</button>
    </form>

    <h2>Datos de persona</h2>
    <table>
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Correo
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php print $personaForm ->getNombre(); ?></td>
                <td><?php print $personaForm ->getApellido();?></td>
                <td><?php print $personaForm ->getEmail();?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>

