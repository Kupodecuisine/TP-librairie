<?php

    $database= new PDO('mysql:host=localhost;dbname=librairie', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $database->exec("set names utf8"); 

?>