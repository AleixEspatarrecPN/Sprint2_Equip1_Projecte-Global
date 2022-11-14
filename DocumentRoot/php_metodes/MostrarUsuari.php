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
  include_once 'dbconn.php'; 
  $conn = conn();           
  $sql = "SELECT * FROM `Usuaris` WHERE 1";
  $result = mysqli_query($conn, $sql);
  $conn->close();
  echo 'Hola!';
  if($sql = MostrarUsuari()){
    if($sql->num_rows > 0){
        while($obj = $sql->fetch_object()){
        echo "<p> $obj->Nom </p>";
        }
      }
  }
  return $result;

}


?>
</body>
</html>