<?php 


echo "<pre>";
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

$heading = 'Contact Us';

require "views/contact.view.php";
?>