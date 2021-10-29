<?php
include 'conexion.php';

$email = $_REQUEST['email_id'];

$query=$dbh->prepare("SELECT * FROM tbl_alumnos where email_alu = ?");
$query->bindParam(1, $email);
$query->execute();
$datas=$query->fetchAll(PDO::FETCH_ASSOC);

echo "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
echo "<tr>";
    echo "<th>email</th>";
    echo "<th>nombre</th>";
    echo "<th>apellido</th>";
    echo "<th>edad</th>";

    $email = "";
    $name = "";
    $surname = "";
    $age = "";

foreach($datas as $dato){
    echo "<tr>";
        echo "<td>".$dato['email_alu']."</td>";
        $email = $dato['email_alu'];
        echo "<td>".$dato['nombre_alu']."</td>";
        echo "<td>".$dato['apellido_alu']."</td>";
        echo "<td>".$dato['edad_alu']."</td>";
      
    echo "</tr>";
}

echo "</table>";

?>
  <form action="./actualizar.proc.php" method="POST">
        <p>Email:</p> 
        <input type="text" id="email" name="email" value= "<?php echo $email ?>" ><br>
        <p>Nombre:</p> 
        <input type="text" id="name" name="name" value= "<?php echo $name ?>"><br>
        <p>Apellido:</p> 
        <input type="text" id="surname" name="surname" value= "<?php echo $surname ?>"><br>
        <p>Edad:</p> 
        <input type="number" id="age" name="age" value= "<?php echo $age ?>"><br><br>
        <input type="submit" value="Actualizar">
    </form>



