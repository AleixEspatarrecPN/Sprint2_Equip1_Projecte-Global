<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat Usuaris</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
</head>


<body>

    <header class="header">
        <img src="../../assets/logo.svg"/>
        <h1>PymeShield</h1>
        <a class="button-user" href="../Perfil/index.php"><i class="fa fa-user"></i></a>
    </header>

    <nav class="navbar">
        <a href="../Home"><i class="fa fa-home"></i></a>
        <a href="../Usuaris">Llistat</a>
        <a href="#">Qüestionari</a>
        <a href="#">Informes</a>
    </nav>



    <div class="tot">
        <div class="cercar">
            <i class="fa-solid fa-trash-can"></i>

            <div class="separar">
                <i class="fa-solid fa-user-plus"></i>

                <div class="cercardreta">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="taula">
            <table>
                <tr>
                    <th><input type="checkbox"></td>
                    <th>Nom usuari</td>
                    <th>Nom empresa</td>
                    <th>Correu</td>
                    <th>Tipus d'usuari</td>
                    <th colspan="2">Opcions</td>
                </tr>
                <tr class="color1">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Eduard Andrei</a></td>
                    <td>Google</td>
                    <td>eduardandrei@google.com</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <tr class="color2">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Aleix Escrihuela</a></td>
                    <td>Facebook</td>
                    <td>alexiescrihuela@facebook.com</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <tr class="color1">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Julia Krukonis</a></td>
                    <td>Telepizza</td>
                    <td>juliakrukonis@telepizza.es</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <tr class="color2">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Aleix Enrich</a></td>
                    <td>LaCava SL</td>
                    <td>aleixenrich@cargols.com</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <tr class="color1">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Eduard Andrei</a></td>
                    <td>Google</td>
                    <td>eduardandrei@google.com</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
                <tr class="color2">
                    <td><input type="checkbox"></td>
                    <td><a href="../VistaUsuari/">Aleix Escrihuela</a></td>
                    <td>Facebook</td>
                    <td>alexiescrihuela@facebook.com</td>
                    <td>Admin</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>

            </table>

        </div>
    </div>


</body>

</html>