<?php
$host = 'localhost';
$dbname = 'Salle_sport';
$username = 'root';
$password = '12345';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>