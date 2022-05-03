<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];
    
    $num = (int) 1;
    for ($num=2; $num <=100 ; $num+=2) { 
        print_r("$num Es un par  ");
    }
    
   
   
    
    //print_r(json_encode($_DATA, JSON_PRETTY_PRINT));
    
    
?>