<?php

$heading = 'Home';

echo "<pre>";
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

require "views/index.view.php";

function urlIs($value){
    $_SERVER['REQUEST_URI'] === $value;
}



?>

