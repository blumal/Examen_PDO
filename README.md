# Examen_PDO
## Para que funcione el programa debes añadir conexion.php aquí te dejo el code
```
$user = "root";
$password = "";
$dbname = "bd_escuela";

//La conexión siempre debe ir entre try-catch

try {
    $dsn = "mysql:host=localhost;dbname=$dbname"; //Tipo BBDD, host, db a conectar
    $dbh = new PDO($dsn, $user, $password); //PDO + $dsn
    //$dbh->setAttribute(PDO::ATTRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>alert('Conexión establecida')</script>";
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "<script>alert('Conexión fallida')</script>";
}

```