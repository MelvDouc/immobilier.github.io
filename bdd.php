<?php

    $host = 'localhost';
    $db = 'immobilier';
    $user = 'root';
    $password = '';

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . '; charset=utf8', $user, $password);

?>