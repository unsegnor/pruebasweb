<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "controlador.php";
        
        //Si está logueado pasa al menu
        if(isset($_SESSION['logedin']) && $_SESSION['logedin']){
            redirect(direcciones::principal);
        }else{
            redirect(direcciones::weblogin);
        }
        ?>
    </body>
</html>
