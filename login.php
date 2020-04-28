<?php
include_once("heat.html");
?>
<head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
</head>
   
    <form action="iniciar.php" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
         Tipo de ingreso: 
            <select name="Opcion"> 
              <option value="value1">Cliente</option> 
              <option value="value2">Administrador</option>
            </select>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="user"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
        <p> No tiene cuenta <a href="registrar.php"> registrarse aqu&iacute;</a></p>
    </form>

