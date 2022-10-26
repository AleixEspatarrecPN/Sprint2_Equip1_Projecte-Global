<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                    <input type="text" name="login" id="correu" placeholder="Usuari" /><br><br>
                    <input type="password" name="pass" id="contra" placeholder="Contrasenya" /><br><br>
                    <input type="checkbox" name="recordar" id="recordar"><label for="recordar">Recorda'm</label>
                    <br><br>
                    <input class="button-change" type="button" value="Entra" onclick="document.location.href = '/HTML/Home/index.php'"/>
                </div>
            </div>
        </div>
    <!--    <script src="javascript.js"></script> -->

</body>

</html>