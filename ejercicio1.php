<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];

    
    if($_DATA->num1 > $_DATA->num2){
        $_DATA->respuesta = (string) "El numero $_DATA->num1 es mayor que $_DATA->num2";
    }
    elseif($_DATA->num1 == $_DATA->num2){
        $_DATA->respuesta = (string)"El numero $_DATA->num1 es igual que $_DATA->num2";
    }
    else{
        $_DATA->respuesta = (string) "El numero $_DATA->num2 es mayor que $_DATA->num1";
    }
    print_r(json_encode($_DATA, JSON_PRETTY_PRINT));
    
    
?>