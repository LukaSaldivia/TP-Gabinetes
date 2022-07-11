<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="tablaComputadora.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="container" style="overflow-y:scroll;max-height:600px;">
    <table >
        <tr>
            <th>Id</th> 
            <th>Número de gabinete</th>
            <th>NumSerie</th>
            <th>DisponibilidadPS2</th>
            <th>Motherboard</th>
            <th>Procesador</th>
            <th>RAM Sócalo</th>
            <th>Disco Duro</th>
            <th>Funciona</th>
        </tr>
        <?php

        $conn = mysqli_connect("localhost", "root","","test");

        if ($conn-> connect_error) {
            die("Conexión fallida: ".$con);
        }

$sql = "SELECT ID, NumSerie, DisponibilidadPS2, Motherboard, Procesador, RAMSocalo, RAM, DiscoDuro, Funciona from computadoras";

$result = $conn-> query($sql);

if ($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["ID"]."</td><td>". $row["NumSerie"]."</td><td>". $row["DisponibilidadPS2"]."</td><td>". $row["Motherboard"]."</td><td>". $row["Procesador"]."</td><td>". $row["RAMSocalo"]."</td><td>". $row["RAM"]."</td><td>". $row["DiscoDuro"]."</td><td>". $row["Funciona"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0";
}

$conn-> close();

        ?>
</div>
    <!-- </table> -->
    
</body>

</html>