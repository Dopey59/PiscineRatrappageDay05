<?php
function my_add_to_cookie($key , $value){
    $valueModif = $value . "Toto";
    setcookie($key, $valueModif, time()+3600*24, '/', '', false, false);
}

my_add_to_cookie("Max", "test");
var_dump($_COOKIE);
?>