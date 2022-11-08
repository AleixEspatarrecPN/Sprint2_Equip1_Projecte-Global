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
    <div class="overflow-hidden text-center m-4 p-2 rounded-3 " style="background-color:#ffffff">
                <h3 id="title-footer">DADES USUARI</h3>
    <div class="card border-0" style="background-color: #dcdcdc">
        <div class="d-flex justify-content-around" id="title-footer">
                    <div class="d-flex align-items-center" >
                        <img class="mx-3" src="../../demo_img/bot.png" style="height: 100px; width: 100px">
                    </div>
                    <div  class=" d-flex align-items-start flex-column">
                        <span class="p-lg-3" >Nom:</span>
                        <span class="p-lg-3">Cognoms:</span>
                        <span class="p-lg-3">DNI:</span>
                        <span class="p-lg-3">Empresa: </span>
                    </div>
                    <div class=" d-flex align-items-start flex-column">
                        <span class="p-lg-3" id="name"> Sergio</span>
                        <span class="p-lg-3" id="last-name">Blanco Tena</span>
                        <span class="p-lg-3" id="dni">98765432H</span>
                        <span class="p-lg-3" id="empresa">DripSuply</span>
                    </div>

                    <div class="vr"></div>

                    <div class=" d-flex align-items-start flex-column">
                            <span class="p-lg-3">Nom d'usuari:</span>
                            <span class="p-lg-3">Correu electrònic:</span>
                            <span class="p-lg-3">Telèfon:</span>
                    </div>
                    <div class=" d-flex align-items-start flex-column">
                            <span class="p-lg-3" name="username" id="username">Mdeserg </span>
                            <span class="p-lg-3"  name="email" id="email">sergioblanco@iesmontsia.org </span>
                            <span class="p-lg-3" type="text" name="phone" id="phone">654317543 </span>
                    </div>
                </div>
        </div>
        <div class="p-2">
            <a href="../UpdatePerfil/updateperfil.php"><button  class="btn">Editar Perfil</button></a>
            <a href="../UpdatePerfil/updateperfil.php"><button  class="btn">Canvia Contrasenya</button></a>
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