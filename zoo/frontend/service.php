<?php
require '../database/db.php'; // Connexion à la base de données

// Récupération des services pour affichage
$stmt = $pdo->query("SELECT title, description, image FROM services");
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services du Zoo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Services du Zoo Arcadia</h1>

    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= htmlspecialchars($service['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($service['title']) ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($service['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($service['description']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <a class="btn btn-primary mt-3" href="../menu.php">Retour au menu</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
