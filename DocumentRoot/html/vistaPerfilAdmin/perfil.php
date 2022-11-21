<?php 
    include_once '../../php/securitySession.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Informe</title>
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="style.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="../scripts/checkbox.js"></script>
    
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:#dcdcdc">
<header class="sticky-top">
    <div class="navbar navbar-expand-sm p-0" id="header-logo">
        <div class="container-fluid d-flex flex-row justify-content-between navbar-nav ">
            <div class="p-2" id="logo">
                <li class="nav-item"><a class="nav-link" href="#"><img src="../images/logo_pymeshield.png"
                                                                       alt="Logo" class="d-inline-block align-text-middle">
                        pymeshield</a></li>
            </div>

            <!--Ruptura del responsive en 576px a 575px-->
            <div class="p-2">
                <div class="container" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="menu-dropdown" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" id="menu-user">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card"></i>Editar
                                        Perfil</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-language"></i>Idioma</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette"></i>Tema</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../cliente/index.html"><i
                                            class="fa-solid fa-shield-halved"></i>Modo Usuario</a></li>
                            </ul>
                        </li>
                </div>
            </div>
        </div>
    </div>
    <!--Header Logo-->


    <nav class="navbar navbar-expand-lg p-0" id="main-navbar">
        <div class="container-fluid">
                <span class="p-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button></span>
            <div class="collapse navbar-collapse p-0" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-house"></i>Inicio</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fa-solid fa-clipboard"></i>Questionarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-book"></i>Informes</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fa-solid fa-graduation-cap"></i>Formación</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fa-solid fa-address-book"></i>Contacto</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!--Header Menu-->

</header>
<div class="container overflow-hidden text-center col-lg-12" >
    <div class="overflow-hidden text-center m-4 p-2 rounded-3 row bg-light p-2" style="background-color:#ffffff">
            <h3 id="title-footer">DADES USUARI</h3>

    <div class="card border-0 " style="background-color: #dcdcdc">
        <div class="d-flex justify-content-around " id="title-footer">
                    <div class="d-flex align-items-center" >
                        <img class="mx-3" src="../../demo_img/bot.png" style="height: 100px; width: 100px">
                    </div>

                    <?php
                    include_once'../../php/ClassUsuari.php';
                    $user = new User("joanpasqualalmudeve@iesmontsia.org");
                    $user->mostrarUsr();
                    ?>
                    

        </div>
    </div>

    <div class="d-flex align-items-end flex-column">
                    <button id="editaPerfil" type="button" class="btn" style="border-bottom: 1px solid black" data-bs-toggle="modal" data-bs-target="#modal-perfil">Editar Perfil</button>
                </div>
        <div class="p-2">
            
        </div>
    </div>
</div>

<div class="modal fade" id="modal-perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edita el Perfil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
                <form>
                    <div class="">
                        <div class="mb-1 flex-sm-column d-flex ">
                            <label for="recipient-name" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-1 flex-sm-column d-flex ">
                            <label for="recipient-last-name" class="col-form-label">Cognoms:</label>
                            <input type="text" class="form-control" id="recipient-last-name">
                        </div>
                        <div class="mb-1 flex-column d-flex align-items-start">
                            <label for="recipient-dni" class="col-form-label">DNI:</label>
                            <input type="text" class="form-control " id="recipient-dni">
                        </div>
                        <div class="mb-1 flex-column d-flex align-items-start">
                            <label for="recipient-empresa" class="col-form-label">Empresa:</label>
                            <input class="form-control " id="recipient-empresa">
                        </div>
                        <div class="mb-1 flex-column d-flex align-items-start">
                            <label for="recipient-user" class="col-form-label">Nom Usuari:</label>
                            <input class="form-control " id="recipient-user">
                        </div>
                        <div class="mb-1 flex-column d-flex align-items-start">
                            <label for="recipient-mail" class="col-form-label">Email:</label>
                            <input type="email" class="form-control " id="recipient-mail">
                        </div>
                        <div class="mb-1 flex-column d-flex align-items-start">
                            <label for="recipient-telefon" class="col-form-label">Teléfon:</label>
                            <input type="email" class="form-control" id="recipient-telefon">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tanca</button>
                <button type="button" class="btn btn-primary">Guarda Canvis</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-contrasenya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Canvia la Contrasenya</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./validacio.php" method="post" id=form>
                <script>
                    function validar(tx) 
                    { 
                        var nMay = 0, nMin = 0, nNum = 0 
                        var t1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ" 
                        var t2 = "abcdefghijklmnopqrstuvwxyz" 
                        var t3 = "0123456789"
                            if (tx.length < 8) {
                                        alert("La contrasenya, ha de tenir almenys 8 lletres");
                            } if (tx.length > 50) {
                                        alert("La contrasenya, ha de tenir menys de 50 lletres");
                            } else {
                                    //Aqui continua si la variable ya tiene mas de 5 letras
                            for (i=0;i<tx.length;i++) { 
                                if ( t1.indexOf(tx.charAt(i)) != -1 ) {nMay++} 
                                if ( t2.indexOf(tx.charAt(i)) != -1 ) {nMin++} 
                                if ( t3.indexOf(tx.charAt(i)) != -1 ) {nNum++} 
                            } 
                        if ( nMay>0 && nMin>0 && nNum>0 ) 
                        form.submit()
                        else 
                        { alert("La seva contrasenya a de contenir almenys 5 caracters alfanumerics"); form.passNew.focus(); return; }
                        }
                    }
                </script>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Contrasenya Actual:</label>
                        <input type="password" name="passCurrent" class="form-control" id="recipient-actual-password" required maxlength="50" required minlength="8">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nova Contrasenya:</label>
                        <input type="password" name="passNew" class="form-control" id="new-password" required maxlength="50" required minlength="8">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Confirma la Contrasenya:</label>
                        <input type="password" nem="passNewConfirmation" class="form-control" id="new-password-confirmation" required maxlength="50" required minlength="8">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tanca</button>
                <button type="button" value="valida" id="submit" class="btn btn-primary" onClick="validar(this.form.passNew.value)">Guarda Canvis</button>
            </div>
                </form>
        </div>
    </div>
</div>

<footer class="bg-black text-center text-lg-center mt-auto">
    <div class="text-center p-3">
        <div class="fluid-container">
            <div class="row">
                <div id="logo-footer" class="col-6 col-md-3">
                    <a class="text-light" href="index.html"><img src="../images/logo_pymeshield_black.png"
                                                                 alt="Logo" width="50px" style="margin-right: 5px;"
                                                                 class="d-inline-block align-text-middle"><i class="fa-solid fa-copyright"></i>pymeshield
                        by Pymeralia</a>
                </div>
                <div class="col-6 col-md-3">
                    <h6 id="title-footer">Acerca de Pymeralia</h6>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="text-light">Política de privacidad</a>
                        </li>
                        <li>
                            <a href="#" class="text-light">Política de cookies</a>
                        </li>
                        <li>
                            <a href="#" class="text-light">Aviso legal</a>
                        </li>
                        <li>
                            <a href="#" class="text-light">Ley de protección</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 id="title-footer">Contacto</h6>
                    <p><i class="fa-solid fa-phone"></i>682849274 <br> <i
                            class="fa-solid fa-envelope"></i>support@pymeralia.com</p>
                </div>
                <div class="col-6 col-md-3">
                    <h6 id="title-footer">RRSS</h6>
                    <ul class="list-unstyled mb-0" id="footer-rrss">
                        <li>
                            <a class="text-light" href="#"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="text-light" href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="text-light" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a class="text-light" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>