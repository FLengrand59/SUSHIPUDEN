<?php

require_once "./../../model/Management.class.php";
require_once "./readController.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste du formulaire de contact</title>
</head>

<body>

    <h1>Liste du formulaire de contact</h1>

    <ul>
        <?php foreach ($recupFormContact as $contact) : ?>
            <li>
                Nom : <?php echo $contact["nom"]; ?><br>
                Prénom : <?php echo $contact["prenom"]; ?><br>
                Email : <?php echo $contact["email"]; ?><br>
                Téléphone : <?php echo $contact["n_tel"]; ?><br>
                Message : <?php echo $contact["message"]; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>