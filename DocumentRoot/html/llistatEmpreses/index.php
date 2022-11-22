<?php
include_once '../../php/securitySession.php';
include_once "../../php/ClassEmpresa.php"
?>
<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Informe</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="../scripts/checkbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:#dcdcdc">
<header class="sticky-top">
    <div class="navbar navbar-expand-sm p-0" id="header-logo">
        <div class="container-fluid d-flex flex-row justify-content-between navbar-nav ">
            <div class="p-2" id="logo">
                <li class="nav-item"><a class="nav-link" href="../home/index.php"><img src="../images/logo_pymeshield.png"
                                                                       alt="Logo"
                                                                       class="d-inline-block align-text-middle">
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
                                <li><a class="dropdown-item" href="../infoPerfil/perfil.php"><i class="fa-solid fa-address-card"></i>Perfil Personal</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-language"></i>Idioma</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette"></i>Tema</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../../php/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a>
                                <li>
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
                    <li class="nav-item"><a class="nav-link" href="../llistatUsuaris/index.php"><i
                                class="fa-solid fa-list"></i>Listado Usuarios</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!--Header Menu-->

</header>

<div class="container overflow-hidden text-center col-lg-9">
    <div class="overflow-hidden text-center m-4 p-2 rounded-3 " style="background-color:#ffffff">
        <div class="d-flex justify-content-end">
            <button class="btn btn-dark mx-1 noubtn" data-bs-toggle="modal" data-bs-target="#modal-nova-empresa">Nova Empresa</button>
            <button class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#modal-unhabilited-empresa">Empreses Baixa</button>
        </div>



        <div class="d-flex justify-content-around">
            <table class="table table-striped align-middle container overflow-hidden text-center py-3">
                <thead>
                    <tr class="">
                        <th class="">Nom</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>CIF</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = Empresa::llistatEmp();
                        while($mostrar = mysqli_fetch_array($result)){

                    ?>
                    <tr>
                        <td hidden id="id_company"><?php echo $mostrar['id_company'] ?></td>
                        <td id="name_company"><?php echo $mostrar['name_company'] ?></td>
                        <td id="email"><?php echo $mostrar['email'] ?></td>
                        <td id="phone"><?php echo $mostrar['phone_number'] ?></td>
                        <td id="cif"><?php echo $mostrar['cif'] ?></td>
                        <td><button  type="button" class="btn btn-warning editbtn" data-bs-toggle="modal" data-bs-id="<?= $mostrar['id_company'];?>" data-bs-target="#modal">Editar</a></button></td>
                        <form action="unhabiliteEmp.php" method="post">
                            <td><a href="unhabiliteEmp.php?id_company=<?= $mostrar['id_company'];?>" class="btn btn-danger" value="<?= $mostrar['id_company'];?>">Eliminar</a></td>
                        </form>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--MODAL USUARIOS DESHABILITADOS-->

<div class="modal modal-lg fade " id="unhabilitedmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edita l'Empressa </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-around">
                <table class="table table-striped align-middle container overflow-hidden text-center py-3">
                    <thead>
                    <tr class="">
                        <th class="">Nom</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>CIF</th>
                        <th>Editar</th>
                        <th>Alta</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result = Empresa::llistatEmpUnhabilited();
                    while($mostrar = mysqli_fetch_array($result)){

                        ?>
                        <tr>
                            <td hidden id="id_company"><?php echo $mostrar['id_company'] ?></td>
                            <td id="name_company"><?php echo $mostrar['name_company'] ?></td>
                            <td id="email"><?php echo $mostrar['email'] ?></td>
                            <td id="phone"><?php echo $mostrar['phone_number'] ?></td>
                            <td id="cif"><?php echo $mostrar['cif'] ?></td>
                            <td id="type_cpmpany"><?php echo $mostrar['hidden'] ?></td>
                            <td><button  type="button" class="btn btn-warning editbtn" data-bs-toggle="modal" data-bs-id="<?= $mostrar['id_company'];?>" data-bs-target="#modal">Editar</a></button></td>
                            <form action="habiliteEmp.php" method="post">
                                <td><a href="habiliteEmp.php?id_company=<?= $mostrar['id_company'];?>" class="btn btn-success" value="<?= $mostrar['id_company'];?>">Donar d'Alta</a></td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<!--MODAL EDIT-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edita l'Empressa </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form action="updateEmp.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="id_company" value="13" id="id">

                    <div class="form-group mb-3">
                        <label> Nom </label>
                        <input type="text" name="name_company" id="name" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Email </label>
                        <input type="text" name="email" id="email" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Teléfon </label>
                        <input type="text" name="phone_number" id="phone" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label> CIF </label>
                        <input type="text" name="cif" id="cif" class="form-control"
                               placeholder="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tanca</button>
                    <button type="submit" name="updatedata" class="btn btn-success" value="Validate" onclick="return validateEmail()">Guarda Canvis</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!--MODAL NOVA EMPRESSA-->
<div class="modal fade" id="modalnousuari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Afegeix l'empresa </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form action="createEmp.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="id_company" id="id">

                    <div class="form-group mb-3">
                        <label> Nom </label>
                        <input type="text" name="name_company" id="name" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Email </label>
                        <input type="text" name="email" id="mail" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Teléfon </label>
                        <input type="text" name="phone_number" id="phone" class="form-control"
                               placeholder="">
                    </div>

                    <div class="form-group">
                        <label> CIF </label>
                        <input type="text" name="cif" id="cif" class="form-control"
                               placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tanca</button>
                    <button type="submit" name="createEmp" class="btn btn-success" value="Validate" onclick="return validateEmail()">Guarda Canvis</button>
                </div>
            </form>

        </div>
    </div>
</div>



<script type="text/javascript">
    function validateEmail(){

        // Get our input reference.
        var emailField = document.getElementById('mail');
        var borde = document.getElementById("mail");

        // Define our regular expression.
        var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

        // Using test we can check if the text match the pattern
        if( validEmail.test(emailField.value) ){
            return true;
        }else{
            alert('El Email No Es Valid');
            borde.style.borderColor = "red";
            return false;
        }
    }
</script>

<!--FUNCIO OBRI MODAL NOU USUARI-->
<script>
    $(document).ready(function () {

        $('.noubtn').on('click', function () {

            $('#modalnousuari').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#mail').val(data[2]);
            $('#phone').val(data[3]);
            $('#cif').val(data[4]);
        });
    });
</script>


<!--FUNCIO OBRI MODAL USUARIS DESHABILITATS-->
<script>
    $(document).ready(function () {

        $('.deletebtn').on('click', function () {

            $('#unhabilitedmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#mail').val(data[2]);
            $('#phone').val(data[3]);
            $('#cif').val(data[4]);
        });
    });
</script>

<!--FUNCIO OBRI MODAL EDITAR USUARI-->
<script>
    $(document).ready(function () {

        $('.editbtn').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#mail').val(data[2]);
            $('#phone').val(data[3]);
            $('#cif').val(data[4]);
        });
    });
</script>


<footer class="bg-black text-center text-lg-center mt-auto">
    <div class="text-center p-3">
        <div class="fluid-container">
            <div class="row">
                <div id="logo-footer" class="col-6 col-md-3">
                    <a class="text-light" href="index.html"><img src="../images/logo_pymeshield_black.png"
                                                                 alt="Logo" width="50px" style="margin-right: 5px;"
                                                                 class="d-inline-block align-text-middle"><i
                                class="fa-solid fa-copyright"></i>pymeshield
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
