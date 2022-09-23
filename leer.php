<?php

require_once "./config.php";
require_once "./conexion.php";

$sentencia= $pdo->prepare("SELECT * fROM tbl_alumno");
$sentencia -> execute();
$listaAlumnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// print_r($listaAlumnos);