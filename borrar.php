<?php

require_once "./conexion.php";

$id= $_GET['id'];

$sentencia= $pdo->prepare("DELETE FROM `tbl_alumno` WHERE id = $id");
$sentencia -> execute();

