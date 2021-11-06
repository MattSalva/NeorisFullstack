<?php

function alumnos($mysqli){
    return mysqli_query($mysqli, "SELECT * FROM alumno");
}

function agregarAlumno($mysqli, $unAlumno){
    return mysqli_query($mysqli, "INSERT INTO alumno (nombre) VALUES ($unAlumno)");
}
