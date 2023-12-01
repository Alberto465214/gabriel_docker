<?php
$servename = 'db'; 
$username = 'root'; 
$password = 'test'; 
$dbname = 'dbname';

$pdo = mysqli_connect($servename, $username, $password, $dbname);

if (!$pdo) {
    die("la conexion esta mal:" . mysqli_connect_error());
}


?>
