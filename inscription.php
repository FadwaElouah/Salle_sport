<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $stmt = $pdo->prepare("INSERT INTO membre (Nom, Prenom, Email, telephone) VALUES (?, ?, ?, ?)");

        $stmt->execute([
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['telephone'],
            // $_POST['activite_id']
        ]);

        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        header("Location: index.php?error=1");
        exit();
    }
}
// ?>