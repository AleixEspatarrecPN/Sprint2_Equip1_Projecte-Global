<?php
//include('../../php/ClassUsuari.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

<header class="header">
    <img src="../../assets/logo.svg" alt="Pymeshield"/>
    <h1>PymeShield</h1>
    <a class="button-user" href="../Perfil/index.php"><i class="fa fa-user"></i></a>
</header>
<nav class="navbar">
    <a href="../Home"><i class="fa fa-home"></i></a>
    <a href="../Usuaris">Llistat</a>
    <a href="#">Qüestionari</a>
    <a href="#">Informes</a>
</nav>
<div id="foto-perfil">
    <div id="basic-info">
        <img src="../../demo_img/bot.png" alt="profile image" id="profile-img">
        <span id="name">name</span>
        <span id="last-name">last name</span>
        <span id="dni">dni</span>
        <span id="empresa">empresa</span>
    </div>
</div>

<div>
    <?php
    
include_once('../../php/MostrarUsuari.php');

    if($sql = MostrarUsuari()){
        if($sql->num_rows > 0){
            while($obj = $sql->fetch_object()){
            echo "<p> $obj->Nom </p>";
           }
        }
    }?>
</div>




<div id="perfil-container">
    <div id="full-info">
        <div id="dades-container">
            <h3>DADES</h3>
            <div id="username-container">
                <div class="input-container">
                    <label for="username">Nom d'usuari</label>
                    <input type="text" name="username" id="username" value="my username" disabled>
                </div>
            </div>
            <div id="email-container">
                <div class="input-container">
                    <label for="email">Correu electrònic</label>
                    <input type="email" name="email" id="email" value="myemail@from.me" disabled>
                </div>
            </div>
            <div id="phone-container">
                <div class="input-container">
                    <label for="phone">Telèfon</label>
                    <input type="text" name="phone" id="phone" value="643543456" disabled>
                </div>
            </div>
            <div>
                <button id="change-data" class="button-change">Editar Perfil</button>
                <button id="change-data" class="button-change">Canvia Contrasenya</button>
            </div>
        </div>


    </div>
</div>
<script src="./script.js"></script>
</body>
</html>