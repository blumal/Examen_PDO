<?php

include 'conexion.php';

//$email_id = $_REQUEST['email_id'];
//echo $email_id;
//die;

$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];

echo $email;

$query = $dbh->prepare("UPDATE tbl_alumnos SET email = :$email, name = :$name, surname = :$surname, age = :$age where email_alu = :$email");
//Bind
$query->bindParam(1, $email); //Primer interrogante contiene age, que tambien se podría recoger de un formulario $_post['example']
$query->bindParam(2, $name);
$query->bindParam(3, $surname);
$query->bindParam(4, $age);
//$query->bindParam(':email_id', $email_id);
//Execute, quién envía los datos a la BBDD, si no se llama... petará todo
$query->execute();