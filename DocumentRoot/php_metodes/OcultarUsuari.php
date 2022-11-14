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

include_once 'dbconn.php'; //Connexió a la base de dades

if($_POST["employee_id"] != '')  
  {  
       $query = "  
       UPDATE employee, employee_company 
       SET employee_company.employee_id='$id',
       employee_company.company_id='$company',
       employee.name='$name'
       WHERE employee.employee_id='".$_POST["employee_id"]."'";  
       if(mysqli_query($connect,$query))
       $message = 'Data Updated';
       else
       echo mysqli_error($connect);  
  }


//     function ocultarUsuari(){
//         include_once 'dbconn.php'; //Connexió a la base de dades
//         $sql2 = "SELECT * FROM `Usuaris` WHERE 1";
//         $sql2 = "UPDATE `Usuaris` SET `Ocult` = '1' WHERE `Usuaris`.`Id` = 2";
      
        
        

//         }


function eliminarUsuari($id){
     include_once '../../connect.php';
     conectar();
     $query ="DELETE * from Usuari where id.Usuari = $id";
     desconetar();
 }
?>
</body>
</html>

