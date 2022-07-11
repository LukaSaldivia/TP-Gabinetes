<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form/inicioUser.css">
    <title>Document</title>
</head>
<body>
    <?php
     $conn = mysqli_connect("localhost", "root","","test");

     if ($conn-> connect_error) {
         die("Conexión fallida: ".$con);
     }

     $xd='1';

    ?>
<div class="container">
        <div class="title">
            <h1>
                <ion-icon name="pencil"></ion-icon> Editar cuenta</h1>
        </div>
        <form action="usuarios.php" method="get" class="formulario">
            <div class="row">
                <p class="name">Nombre</p>
                <input type="text" name="name" class="data">
            </div>
            <div class="row">
                <p class="name">Usuario</p>
                <input type="text" name="user" class="data" placeholder="16 carácteres máximo">
            </div>
            <div class="row">
                <p class="name">Contraseña</p>
                <input type="password" onclick="check()" placeholder="8 carácteres máximo" id="password" name="password" class="data">
            </div>
            <div class="row">
                <p class="name">Confirmar contraseña</p>
                <input type="password" onclick="check()" id="confPassword" name="confPassword" class="data">
            </div>

            <div class="row">
                <p class="name">Foto</p>
                <img class="image" id="image" src="">
                <input onchange="loadFile(event)" accept="image/*" type="file" name="photo" class="file-input" multiple>

            </div>


            <div class="row">
                <input type="submit" onclick="check()" id="send" value="Enviar" class="data">
            </div>
        </form>

    </div>

    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>