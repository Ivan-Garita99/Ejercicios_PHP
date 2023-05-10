<?php

    if($_POST){
    //Recibir información del formaulario HMTL ( Método POST)
    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];

    echo "Hola ".$txtNombre." ".$txtApellido;          //Contatenar es la union entre 2 puntos como el string de hola y las variables de nombre para ello se usa -> . <- 


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ejercicio5.php" method="post">   <!--Get muestra los datos atra vez de la url y POST los oculta y los recepciona-->
                                                              
            Nombre:
            <input type="text" name="txtNombre" id="">
            <br/>

            Apellido:
            <input type="text" name="txtApellido" id="">
            <br/>

            <input type="submit" value="Enviar">
    </form>
</body>
</html>