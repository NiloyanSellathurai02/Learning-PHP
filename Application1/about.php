<?php 


echo "<pre>";
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

$heading = 'About Us';

require "views/about.view.php"
?>