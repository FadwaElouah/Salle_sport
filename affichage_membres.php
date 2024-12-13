<?php
include 'db_connection.php';

// Récupération des activités depuis la base de données
try {
    $stmt = $pdo->query("SELECT * FROM membre");
    $membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des membres : " . $e->getMessage();
    $membres = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vos balises head actuelles restent identiques -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PowerMove - Salle de Sport</title>
</head>
<body class="text-gray-800">
<nav class="bg-blue-500 p-4">
  <div class="container mx-auto flex items-center justify-between">
    <!-- Logo -->
    <div class="text-white text-xl font-bold">
      Salle de Sport
    </div>
    <!-- Menu -->
    <ul class="flex space-x-6">
      <li>
        <a href="index.php" class="text-white hover:text-blue-200">Accueil</a>
      </li>
      <li>
        <a href="#" class="text-white hover:text-blue-200">Liste Membres</a>
      </li>
    </ul>
  </div>
</nav>
    
    <!-- ------------------------------------------ -->
    <div class="overflow-x-auto p-4 bg-white rounded-lg shadow-md">
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead class="bg-purple-700 text-white">
            <tr>
                <th class="px-4 py-2 border border-gray-300">ID Membre</th>
                <th class="px-4 py-2 border border-gray-300">Nom</th>
                <th class="px-4 py-2 border border-gray-300">Prénom</th>
                <th class="px-4 py-2 border border-gray-300">Email</th>
                <th class="px-4 py-2 border border-gray-300">Telephone</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($membres as $membre): ?>
            <tr class="odd:bg-purple-50 even:bg-purple-100 hover:bg-purple-200">
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['id_membre']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['Nom']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['Prenom']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['Email']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['telephone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <!-- ------------------------------------------ -->
    
    <!-- ------------------------------------------ -->
</body>
</html>