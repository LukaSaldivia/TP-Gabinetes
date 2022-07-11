<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="tablaComputadora.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="align-items: center; display:flex;">
    <div class="container" style="overflow-y:scroll; max-height:600px;">
    <table>
        <tr>
            <th>Id</th> 
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Nombre</th>
            <th>Foto</th>
        </tr>
        <?php

        $conn = mysqli_connect("localhost", "root","","test");

        if ($conn-> connect_error) {
            die("Conexión fallida: ".$con);
        }

$sql = "SELECT ID, Usuario, Contraseña, Nombre, Foto from usuarios";

$result = $conn-> query($sql);

if ($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["ID"]."</td><td>". $row["Usuario"]."</td><td>". $row["Contraseña"]."</td><td>". $row["Nombre"]."</td><td>". $row["Foto"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0";
}

$conn-> close();

        ?>
        </div>
    
</body>

</html>