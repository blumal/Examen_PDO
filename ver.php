<?php
include 'conexion.php';

$query=$dbh->prepare("SELECT * FROM tbl_alumnos");
$query->execute();
$datas=$query->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
echo "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
echo "<tr>";
    echo "<th>email</th>";
    echo "<th>nombre</th>";
    echo "<th>apellido</th>";
    echo "<th>edad</th>";
    echo "<th>actualizar</th>";
    echo "<th>borrar</th>";
echo "</tr>";
foreach($datas as $dato){
    echo "<tr>";
        echo "<td>".$dato['email_alu']."</td>";
        echo "<td>".$dato['nombre_alu']."</td>";
        echo "<td>".$dato['apellido_alu']."</td>";
        echo "<td>".$dato['edad_alu']."</td>";
        echo "<td><a href='./actualizar.php?email_id=".$dato['email_alu']."'>Actualizar</a></td>";//Se pasa la variable por url
        echo "<td><a href='./borrar.php?email_id=".$dato['email_alu']."'>Eliminar</a></td>";
    echo "</tr>";
}

echo "</table>";