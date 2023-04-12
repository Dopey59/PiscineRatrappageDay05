<?php
function my_print_cookie(string $var){
    foreach($_COOKIE as $key => $value){
        if($key == $var){
            echo $value .= "_END\n";
        }
    }
};
?>