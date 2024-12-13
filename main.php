<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1> Affichage des données saisies</h1>
    <table>
        <tr>
            <td>id :</td> <td><?php echo $_GET['id'] ?> </td>
        </tr>
      <tr>
        <td>Nom :</td> <td><?php echo $_GET['nom']?> </td>
      </tr>
      <tr>
        <td>Prénom :</td> <td><?php echo $_GET['prénom']?></td>
      </tr>
      <tr>
         <td>activitée</td> <td><?php echo $_GET['activitée']?></td>
      </tr>
      <tr>
        <td>Email :</td><td><?php echo $_GET['email']?></td>
      </tr>
      <tr>
        <td>Téléphone :</td><td><?php echo $_GET['téléphone']?></td>
      </tr>

    </table>
</body>
</html>