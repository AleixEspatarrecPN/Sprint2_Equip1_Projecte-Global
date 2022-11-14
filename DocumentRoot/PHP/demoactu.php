
<html> 
      <head>
         <title>Ejemplo de actualización de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
 
    include_once 'dbconn.php'; //Connexió a la base de dades

 
      if($_POST)
      {
         $queryUpdate = "UPDATE $tabla SET Nombre = '".$_POST['nombreForm']."',
                        Apellidos = '".$_POST['apellidoForm']."'
                        WHERE ID = ".$_POST['idForm'].";";
 
         $resultUpdate = mysqli_query($link, $queryUpdate); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$_POST['idForm']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }
 
      $query = "SELECT * FROM `Usuaris` WHERE 1";

      $result = mysqli_query($conn, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
         <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["Nombre"];
         echo "</td>";
         echo "<td>";
         echo $row["Apellidos"];
         echo "</td>";
         echo "<td>";
         echo "<a href=\"?id=".$row["ID"]."\">Actualizar</a>";
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      ?>
 
      </table>
      <hr>
 
      <?php
      if($_GET)
      {
         $querySelectByID = "SELECT ID, Nombre, Apellidos FROM $tabla WHERE ID = ".$_GET['id'].";";
 
         $resultSelectByID = mysqli_query($link, $querySelectByID); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      ?>
 
      <form action="" method="post">
         <input type="hidden" value="<?=$rowSelectByID['ID'];?>" name="idForm">
         Nombre: <input type="text" name="nombreForm" value="<?=$rowSelectByID['Nombre'];?>"> <br> <br>
         Apellidos: <input type="text" name="apellidoForm" value="<?=$rowSelectByID['Apellidos'];?>"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
 
      <?php
      }
      mysqli_close($link);
      ?>
      </body> 
      </html>