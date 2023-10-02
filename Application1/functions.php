<?php 


function dd($value){
    echo "<pre>";
    var_dump($_SERVER['REQUEST_URI']);
    echo "</pre>";

    die();
}
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

?>