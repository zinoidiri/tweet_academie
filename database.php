<?php
try {
    $database = new pdo("mysql:host=localhost;dbname=common-database;charset=UTF8", "heisenberg", "jjjj", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
die("Erreur : " . $e->getMessage());
}