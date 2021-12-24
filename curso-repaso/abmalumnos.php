<?php

function alumnos($mysqli){
    return mysqli_query($mysqli, "SELECT * FROM alumnos;");
}

function agregarAlumno($mysqli, $alumno){
    $sentenciaBase = 'INSERT INTO alumnos (';
    $sentenciaValores = ') VALUES (';
    foreach ($alumno as $clave => $valor){
        if ($sentenciaBase == 'INSERT INTO alumnos (')
            $sentenciaBase = $sentenciaBase.$clave;
        else
            $sentenciaBase = $sentenciaBase.",".$clave;
        if ($sentenciaValores == ') VALUES (')
            $sentenciaValores = $sentenciaValores."$valor";
        else
            $sentenciaValores = $sentenciaValores.","."$valor";
    }
    $sentenciaFinal = $sentenciaBase.$sentenciaValores.")";
    echo "<br>";
    echo $sentenciaFinal;
    return mysqli_query($mysqli, $sentenciaFinal);
}
?>

