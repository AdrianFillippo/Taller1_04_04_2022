<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];
    
    if(($_DATA->num1 == $_DATA->num2) && ($_DATA->num1 == $_DATA->num3)){
        $_DATA->respuesta = (string) "Los Valores son iguales ingrese valores distintos";
    }
    elseif($_DATA->num1 == $_DATA->num2){
        $_DATA->respuesta = (string) "Dos valores son iguales ingrese valores distintos";
    }
    elseif($_DATA->num2 == $_DATA->num3){
        $_DATA->respuesta = (string) "Dos valores son iguales ingrese valores distintos";
    }
    elseif($_DATA->num1 == $_DATA->num3){
        $_DATA->respuesta = (string) "Dos valores son iguales ingrese valores distintos";
    }
    elseif(($_DATA->num1 > $_DATA->num2) && ($_DATA->num1 > $_DATA->num3)){
        if($_DATA->num2 < $_DATA->num3){
        $_DATA->respuesta = (string) "La variable A '$_DATA->num1' es mayor y la variable B '$_DATA->num2' es menor";
        }
        else{
        $_DATA->respuesta = (string) "La variable A '$_DATA->num1' es mayor y la variable C '$_DATA->num3' es menor";
        }
    }
    elseif(($_DATA->num2 > $_DATA->num1) && ($_DATA->num2 > $_DATA->num3)){
        if($_DATA->num1 < $_DATA->num3){
        $_DATA->respuesta = (string) "La variable B '$_DATA->num2' es mayor y la variable A '$_DATA->num1' es menor";
        }
        else{
        $_DATA->respuesta = (string) "La variable B '$_DATA->num2' es mayor y la variable C '$_DATA->num3' es menor";
        }
    } 
    elseif(($_DATA->num3 > $_DATA->num1) && ($_DATA->num3 > $_DATA->num2)){
        if($_DATA->num1 < $_DATA->num2){
        $_DATA->respuesta = (string) "La variable C '$_DATA->num3' es mayor y la variable A '$_DATA->num1' es menor";
        }
        else{
        $_DATA->respuesta = (string) "La variable C '$_DATA->num3' es mayor y la variable B '$_DATA->num2' es menor";
        }
    }
    
    
    



    
    print_r(json_encode($_DATA, JSON_PRETTY_PRINT));
    
    
?>