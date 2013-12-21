<?php

include "conexionbdd.php";

function redirect($nombre_pagina) {
    header("location:$nombre_pagina");
}


function getVista($nombre){
    
    $consulta = "SELECT * FROM ".escape($nombre);
    
    $resultado = ejecutar($consulta)->resultado;
    
    $campos = $resultado->fetch_fields();
    
    $datos = $resultado->fetch_assoc();
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

