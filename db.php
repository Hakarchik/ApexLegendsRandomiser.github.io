<?php

$pdo = new PDO('mysql:host=localhost;dbname=apex_db;charset=utf8', 'root', 'root', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
?>