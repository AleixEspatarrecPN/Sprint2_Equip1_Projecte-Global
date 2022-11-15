<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

//Métode
function MostrarUsuari(){
<<<<<<< HEAD:DocumentRoot/proves_php/MostrarUsuari.php
  include_once 'dbconn.php';
    include_once 'ClassUsuari.php'
  $consulta2 =  "SELECT * FROM Usuari WHERE id= 1";
=======
  include_once 'dbconn.php'; 
  include_once 'ClassUsuari.php'
 $consulta =  "SELECT * FROM Publicacio WHERE id=1";
>>>>>>> 81d53014db7c3154c0b12de6ab2103ac1b7e3a4d:DocumentRoot/PHP/MostrarUsuari.php

        if ($result = $connexioDB->query($consulta)) {
            if ($result->num_rows > 0) {
                while ($obj = $result->fetch_object()) {
                    echo "<tr>";
                    echo "<td> $obj->Id </td>";
                    echo "<td> $obj-> </td>";
                    echo "</tr>";
                }
            }
        }

  return $result;

}
$usuari = new User(1);
$usuari->MostrarUsuari(1); 

?>
</body>
</html>