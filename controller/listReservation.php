<?php

require_once "./../../model/Management.class.php";
require_once "./readController.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des reservations</title>
</head>

<body>

    <h1>Liste des reservations</h1>

    <ul>
        <?php foreach ($recupReservation as $reservation) : ?>
            <li>
                Nom : <?php echo $reservation["nom"]; ?><br>
                Prénom : <?php echo $reservation["prenom"]; ?><br>
                Email : <?php echo $reservation["email"]; ?><br>
                Téléphone : <?php echo $reservation["n_tel"]; ?><br>
                Date : <?php echo $reservation["jour"]; ?><br>
                Couverts : <?php echo $reservation["nbre_couverts"]; ?><br>
                Service : <?php echo $reservation["service"]; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>