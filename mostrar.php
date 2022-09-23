<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1px'>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Borrar</th>
        <th>Modificar</th>
        
    </thead>
    <tbody>
        <?php
        require_once "leer.php";
        foreach ($listaAlumnos as $alumno) {
            echo "<tr>";
            echo "<td>";
            echo $alumno['id'];
            echo "</td>";
            echo "<td>";
            echo $alumno['nombre'];
            echo "</td>";
            echo "<td>";
            echo $alumno['edad'];
            echo "</td>";
            echo "<td>";
            echo "<a href='./borrar.php?id={$alumno['id']}'>borrar</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='./modificar.php?id={$alumno['id']}'>modificar</a>";
            echo "</td>";
            echo "</tr>";
            
        }
        ?>
    </tbody>



    </table>
    
</body>
</html>