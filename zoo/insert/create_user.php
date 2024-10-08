<?php
require 'database/db.php'; // Inclure la connexion à la base de données

// Créer un utilisateur avec un mot de passe haché
$username = 'admin';
$password = password_hash('Admin123!', PASSWORD_BCRYPT); // Hachage du mot de passe
$role = 'admin';

$stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
if ($stmt->execute([$username, $password, $role])) {
    echo "Utilisateur créé avec succès.";
} else {
    echo "Erreur lors de la création de l'utilisateur.";
}
?>
