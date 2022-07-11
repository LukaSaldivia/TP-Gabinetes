<?php 
$id = -1;
$Ram = "";
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $conn = mysqli_connect("localhost", "root","","test");
  if ($conn-> connect_error) {
    die("Conexión fallida: ".$con);
  }

$sql = "SELECT * from computadoras WHERE ID =".$id;

$result = $conn-> query($sql);

if ($result-> num_rows > 0){
    if  ($row = $result-> fetch_assoc()){
        $Ram = $row["RAM"];
        $gabinete = $row["NumSerie"];
        $ps2 = $row["DisponibilidadPS2"];
        $motherboard = $row["Motherboard"];
        $procesador = $row["Procesador"];
        $RamSocalo = $row["RAMSocalo"];
        $discoDuro = $row["DiscoDuro"];
        $laboratorio = $row["Laboratorio"];
        $funciona = $row["Funciona"];
    }

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="title">
        <h1>
            <ion-icon name="grid"></ion-icon> Insertar computadora</h1>
    </div>
    <form class="content" method="post" action="index.php">
        <input type="hidden" name="id" value="<?=$id;?>">
        <!-- <div class="row">
            <span class="columna">ID</span>
            <input type="text" class="data">
        </div> -->
        <div class="row">
            <span class="columna">Número de Gabinete<span class="required">*</span></span>
            <input type="text" class="data" name="gabinete" required value="<?=$gabinete?>">
        </div>

        <div class="row">
            <span class="columna">Disponibilidad PS2<span class="required">*</span></span>
            <input type="checkbox" class="data" name="ps2" value="<?=$ps2?>">
        </div>
        <div class="row">
            <span class="columna">Motherboard</span>
            <input type="text" class="data" name="motherboard" value="<?=$motherboard?>">
        </div>
        <div class="row">
            <span class="columna">Procesador</span>
            <input type="text" class="data" name="procesador" value="<?=$procesador?>">
        </div>
        <div class="row">
            <span class="columna">Memoria de disco duro</span>
            <input type="text" class="data" name="discoDuro" value="<?=$discoDuro?>">
        </div>
        <div class="row">
            <span class="columna">Memoria RAM</span>
            <input type="text" class="data" name="ram" value="<?=$Ram?>">
        </div>
        <div class="row">
            <span class="columna">Sócalos de RAM</span>
            <input type="text" class="data" name="socalosRAM" value="<?=$RamSocalo?>">
        </div>
        <div class="row">
            <span class="columna">Laboratorio<span class="required">*</span></span>
            <input type="text" class="data" name="laboratorio" required value="<?=$laboratorio?>">
        </div>
        <div class="row">
            <span class="columna">Funciona</span>
            <input type="checkbox" class="data" name="funciona" value="<?=$funciona?>">
        </div>
        <div class="row">
            <p>Los campos marcados con * son obligatorios</p>
        </div>
        <div class="row">
            <button type="submit">Enviar</button>
        </div>


    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>