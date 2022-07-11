<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";
$con=mysqli_connect($hostname,$username,$password,$db);
// die("fu: ".$_POST["funciona"]);
$NombreLab = $_POST["laboratorio"];


//$con = mysqli_connect("localhost/phpmyadmin/index.php?route=/table/change&db=tp5&table=computadoras");
$query = mysqli_query($con, "INSERT INTO `laboratorio` (`ID`, `Nombre_Lab`) VALUES (NULL, '${NombreLab}');")
or die (mysqli_error($con))
 ?>
</body>
</html>