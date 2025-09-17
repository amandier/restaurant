<?php
$host = "localhost";
$dbname = "amandier";
$user = "root";  // à adapter selon ton hébergeur
$pass = "";      // à adapter selon ton hébergeur

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

