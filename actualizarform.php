<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/code.js"></script>
</head>

<body>
    <h1>Actualizar datos</h1>
    <form action="./actualizar.proc.php" method="POST">
        <p>Email:</p> 
        <input type="text" id="email" name="email"><br>
        <p>Nombre:</p> 
        <input type="text" id="name" name="name"><br>
        <p>Apellido:</p> 
        <input type="text" id="surname" name="surname"><br>
        <p>Edad:</p> 
        <input type="number" id="age" name="age"><br><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
