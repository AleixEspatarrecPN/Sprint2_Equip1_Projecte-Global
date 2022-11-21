<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="funcio.js">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../scripts/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/brands.min.css" rel="stylesheet">
    <link href="../css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="../scripts/checkbox.js"></script>
    </script>

    <title>Login</title>
</head>

<body class="body">


        <div class="logintot">

            <div class="login">
                <div class="logfoto" align="center">
                    <img src="../../assets/logo.svg" width="50px" height="50px"></img>
                    <H1 id="titul">PymeShield</H1>
                </div>

                <div class="login2" align="center">

                    <H2 id="title">Inicia sessió</H2><br />
                    <form action="./validar.php" method="post">
                    <input type="text" name="login" id="correu" placeholder="Usuari" /><br><br>
                    <input type="password" name="pass" id="contra" placeholder="Contrasenya" /><br><br>
                    <input type="checkbox" name="recordar" id="recordar"><label for="recordar">Recorda'm</label>
                    <br><br>
                    <input class="button-change" type="submit" value="Entra" />
                    </form>
                </div>
            </div>
        </div>
    <!--    <script src="javascript.js"></script> -->
    <!-- Redirecció pagina: document.location.href = '../home/index.php' -->
</body>

</html>