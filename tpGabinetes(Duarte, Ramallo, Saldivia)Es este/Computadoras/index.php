<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <div class="title">
        <h1>
            <ion-icon name="grid"></ion-icon> Insertar computadora</h1>
    </div>
    <form class="content" method="post" action="">
        <div class="row" style="display:none;">
            <span class="columna">ID</span>
            <input type="text" class="data">
        </div>
        <div class="row">
            <span class="columna">Número de Gabinete<span class="required">*</span></span>
            <input type="text" class="data" name="gabinete" required>
        </div>

        <div class="row">
            <span class="columna">Disponibilidad PS2<span class="required">*</span></span>
            <input type="checkbox" class="data" name="ps2" value="1">
        </div>
        <div class="row">
            <span class="columna">Motherboard</span>
            <input type="text" class="data" name="motherboard">
        </div>
        <div class="row">
            <span class="columna">Procesador</span>
            <input type="text" class="data" name="procesador">
        </div>
        <div class="row">
            <span class="columna">Memoria de disco duro</span>
            <input type="text" class="data" name="discoDuro">
        </div>
        <div class="row">
            <span class="columna">Memoria RAM</span>
            <input type="text" class="data" name="ram">
        </div>
        <div class="row">
            <span class="columna">Sócalos de RAM</span>
            <input type="text" class="data" name="socalosRAM">
        </div>
        <div class="row">
            <span class="columna">Laboratorio<span class="required">*</span></span>
            <input type="text" class="data" name="laboratorio" required>
        </div>
        <div class="row">
            <span class="columna">Funciona</span>
            <input type="checkbox" class="data" name="funciona" value="1">
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

    <?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";



if(isset($_POST['gabinete']) && !empty($_POST['gabinete'] && $_POST['laboratorio']) && !empty($_POST['laboratorio'])){

    $id = $_POST["id"];
    $laboratorio = $_POST["laboratorio"]; 
    $gabinete = $_POST["gabinete"];
    $ps2 = $_POST["ps2"];
    $mother = $_POST["motherboard"];
    $procesador = $_POST["procesador"];
    $memoria = $_POST["discoDuro"];
    $RAM = $_POST["ram"];
    $socalosRAM = $_POST["socalosRAM"];
    $funciona = $_POST["funciona"]; 
    

if (!$ps2){$ps2="0";};
if (!$mother){$mother="0";};
if (!$procesador){$procesador="0";};
if (!$memoria){$memoria="0";};
if (!$RAM){$RAM="0";};
if (!$socalosRAM){$socalosRAM="0";}; 
if (!$funciona){$funciona="0";};

//$con = mysqli_connect("localhost/phpmyadmin/index.php?route=/table/change&db=tp5&table=computadoras");

if($id>-1){
$con=mysqli_connect($hostname,$username,$password,$db);
$query = mysqli_query($con, "INSERT INTO `computadoras` (`ID`, `NumSerie`, `DisponibilidadPS2`, `Motherboard`, `Procesador` ,`RAMSocalo`, `RAM`, `DiscoDuro`, `Laboratorio`, `Funciona`) VALUES (NULL, '${gabinete}', '${ps2}', '${mother}', '${procesador}' , '${socalosRAM}' , '${RAM}', '${memoria}','${laboratorio}', '${funciona}');")
or die (mysqli_error($con));
}else{
    $con=mysqli_connect($hostname,$username,$password,$db);
$query = mysqli_query($con, "UPDATE `computadoras` SET `Procesador` = '${procesador}' WHERE `computadoras`.`ID` = '${id}';")
or die (mysqli_error($con));
}

}

 ?>
</body>
</html>