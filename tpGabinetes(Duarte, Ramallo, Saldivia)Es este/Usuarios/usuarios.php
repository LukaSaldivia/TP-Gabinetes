<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="inicioUser.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- <div class="container">
        <div class="title">
            <h1>
                <ion-icon name="person-add"></ion-icon> Crear cuenta</h1>
        </div>
        <form  method="post" class="formulario">
            <div class="row">
                <p class="name">Nombre</p>
                <input type="text" name="name" class="data">
            </div>
            <div class="row">
                <p class="aviso" style="display:none">Ya existe un usuario con ese nombre</p>
                <p class="name">Usuario</p>
                <input type="text" name="user" class="data" placeholder="16 carácteres máximo">
            </div>
            <div class="row">
                <p class="name">Contraseña</p>
                <input type="password"  placeholder="8 carácteres máximo" id="password" name="password" class="data">
            </div>
            <div class="row">
                <p class="name">Confirmar contraseña</p>
                <input type="password"  id="confPassword" name="confPassword" class="data">
            </div>
            <div class="row">
            <span class="columna">Administrador</span>
            <input type="checkbox" class="data" name="admin" value="1">
        </div>

            <div class="row">
                <p class="name">Foto</p>
                <img class="image" id="image" src="">
                <input onchange="loadFile(event)" accept="image/*" type="file" name="photo" class="file-input" multiple>

            </div>


            <div class="row">
                <input type="submit"  id="send" value="Enviar" class="data">
            </div>
        </form>

    </div> -->


<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";

if(isset($_POST['user']) && !empty($_POST['user'] && $_POST['password']) && !empty($_POST['password'])){
$con=mysqli_connect($hostname,$username,$password,$db);

$usuario = $_POST['user'];
$dato =  mysqli_query($con, "SELECT Usuario FROM `usuarios` WHERE Usuario = '".$usuario."'");

$duplicado = mysqli_num_rows($dato);

if($duplicado==0){
$contraseña =$_POST['password'];
$nombre=$_POST['name'];
$carpeta_destino='./Fotos/';

    if(isset($_FILES['photo']) && !empty($_FILES['photo'])){
        $nombreimg= $_FILES['photo']['name'];

        move_uploaded_file($_FILES['photo']['tmp_name'], $carpeta_destino.time().$nombreimg);
        $destino = $carpeta_destino.time().$nombreimg;
       // echo $destino;
    }else{$destino = $carpeta_destino.'default.jpg';}


    $query = mysqli_query($con, "INSERT INTO `usuarios` (`ID`, `Usuario`, `Contraseña`, `Nombre`, `Foto`) VALUES (NULL, '$usuario', '$contraseña', '$nombre', '$destino');")
    or die (mysqli_error($con));


}else{
    echo "Ya existe un usuario con ese nombre";
 
}

// 

// 



}





?>
    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>