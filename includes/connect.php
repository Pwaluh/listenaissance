<?php

try {
    $dbg = new PDO('mysql:host=localhost;dbname=naissance;charset=utf8', 'root', 'root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    echo 'Erreur !: '.$e->getMessage().'<br/>';
    die();
}
