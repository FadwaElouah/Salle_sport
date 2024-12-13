<?php
include 'db_connection.php';

// Récupération des activités depuis la base de données
try {
    $stmt = $pdo->query("SELECT * FROM activités");
    $activites = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des activités : " . $e->getMessage();
    $activites = [];
}
?>
<!-- ----------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="container mx-auto p-6">
  <h1 class="text-2xl font-bold mb-4 text-center">Liste des Activités</h1>
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200 bg-white rounded-lg shadow-md">
      <thead>
        <tr class="bg-purple-900 text-white text-left">
          <th class="px-4 py-2">Id Activité</th>
          <th class="px-4 py-2">Nom Activité</th>
          <th class="px-4 py-2">Description</th>
          <th class="px-4 py-2">Capacité</th>
          <th class="px-4 py-2">Date Début</th>
          <th class="px-4 py-2">Date Fin</th>
          <th class="px-4 py-2">Disponibilité</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        
        <?php foreach ($activites as $activite): ?>
          <tr>
            <td class="px-4 py-2 text-gray-700"><?= htmlspecialchars($activite['id_activitée']) ?></td>
            <td class="px-4 py-2 text-gray-700"><?= htmlspecialchars($activite['Nom_activitée']) ?></td>
            <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($activite['Description']) ?></td>
            <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($activite['capacité']) ?></td>
            <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($activite['date_debut']) ?></td>
            <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($activite['date_fine']) ?></td>
            <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($activite['disponobilité']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<section id="reservation" class="py-16 bg-[#ec9624bf] mt-[5rem]">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8 text-black">Inscription</h2>
            
            <form class="max-w-xl mx-auto" action="inscription.php" method="post">
                <div class="mb-4">
                    <input type="text" name="nom" placeholder="Nom" class="w-full border-purple-300  p-3" required>
                </div>
                <div class="mb-4">
                    <input type="text" name="prenom" placeholder="Prénom" class="w-full border-purple-300 focus:border-purple-900 focus:ring focus:ring-purple-900 rounded p-3" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" class="w-full border-purple-300 focus:border-purple-900 focus:ring focus:ring-purple-900 rounded p-3" required>
                </div>
                <div class="mb-4">
                    <input type="tel" name="telephone" placeholder="N° de téléphone" pattern="[0-9]*" class="w-full border-purple-300 focus:border-purple-900 focus:ring focus:ring-purple-900 rounded p-3" required>
                </div>
                <div class="mb-4">
                    <select name="activite_id" class="w-full border-purple-300 focus:border-purple-900 focus:ring focus:ring-purple-900 rounded p-3" required>
                        <option value="">Veuillez choisir une activité</option>
                        <?php foreach ($activites as $activite): ?>
                            <option value="<?= htmlspecialchars($activite['id_activitée']) ?>"><?= htmlspecialchars($activite['Nom_activitée']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="bg-black hover:opacity-[0.8] text-white font-bold py-3 px-[16rem] rounded  transition ">Réserver</button>
            </form>
        </div>
    </section>


    <!-- <section>
       <div >
      
         <form class=" w-[26rem] h-[32rem]  text-white p-[1.9rem] ml-[30rem] mt-[2rem]" action="main.php" method="get">
            
             
              <input type="text" placeholder="Entrer id_membre" class="w-[20rem] mt-[1rem] p-[5px] border-b  text-black" name="id">
              <input type="text" placeholder="Entrer Le Nom"  class="w-[20rem] mt-[2rem] p-[5px] border-b text-black" name="nom">
              <input type="text" placeholder="Entrer Le Prénom"  class="w-[20rem] mt-[2rem] p-[5px] border-b text-black" name="prénom">
              <input type="text" placeholder="Entrer l'activitée"  class="w-[20rem] mt-[2rem] p-[5px] border-b text-black" name="activitée">
              <input type="text" placeholder="Entrer L'email"  class="w-[20rem] mt-[2rem] p-[5px] border-b text-black" name="email">
              <input type="text" placeholder="Téléphone"  class="w-[20rem] mt-[2rem] p-[5px] border-b text-black" name="téléphone">
               
              <button class="border border-white px-[8rem] py-[10px] mt-[2rem] font-bold hover:bg-fuchsia-600 hover:border-none translate-x-3 bg-fuchsia-900" type="submit">Réserver</button>
         </form>
       </div>
    </section> -->
   
  
   

</body>
</html>