<?php
$dsn = 'mysql:dbname=spawn;host=localhost;charset=UTF8';
$user = 'root';
$password = 'root';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}