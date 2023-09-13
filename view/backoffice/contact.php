<?php

include './common/menu.php';
include "./../../controller/readController.php";

?>
<!-- main content -->
<main class="p-4 mh-100">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4  bg">
                <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true">
                    <h6 class="m-0 ic">Récapitulatif des réservations</h6>
                </a>
                <div class="row">
                    <div class="col-12">

                        <div class="table-responsive table-striped">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr">
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Objet</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">État</th>
                                        <th scope="col">Voir le message</th>
                                        <th scope="col">Option</th>
                                        </tr>
                                        </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        // on appele  la variable créer dans le controller qui va renvoyé les données
                                        foreach ($recupAllContact as $row) {
                                            $badgeClass = ($row['etat'] === "0") ? "badge-danger" : "badge-success";
                                            $badgeText = ($row['etat'] === "0") ? "Non lu" : "Déjà consulté";
                                            $idContact = htmlspecialchars($row['id_contact']);
                                            $escapedNom = htmlspecialchars($row['nom']);
                                            $escapedPrenom = htmlspecialchars($row['prenom']);
                                            $escapedEmail = htmlspecialchars($row['email']);
                                            $escapedMessage = htmlspecialchars($row['message']);
                                            $idModal = "modal-" . $idContact;
                                        ?>

                                    <tr>
                                        <td><?php echo $escapedNom; ?></td>
                                        <td><?php echo $escapedPrenom; ?></td>
                                        <td><?php echo $escapedEmail; ?></td>
                                        <td>
                                            <?php
                                            switch ($row['message']) {
                                                case 1:
                                                    echo 'Demande d\'infos';
                                                    break;
                                                case 2:
                                                    echo 'Candidature';
                                                    break;
                                                case 3:
                                                    echo 'Autres';
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo date("d/m/Y", strtotime($row['date'])); ?></td>
                                        <td><span id="badge" class="badge badge-pill <?php echo $badgeClass; ?>"><?php echo $badgeText; ?></span></td>
                                        <td>
                                            <div class="dropdown ml-auto">
                                                <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="modal" data-target="#<?php echo $idModal; ?>" aria-expanded="false">
                                                    <i class="iconoir-eye-empty icme pb-1"></i>
                                                </button>
                                                <div class="modal fade" id="<?php echo $idModal; ?>" value="<?php echo $idContact; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Message de <?php echo $escapedNom . ' ' . $escapedPrenom; ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Email de l'expéditeur : <?php echo $escapedEmail; ?><br><br>
                                                                Message : <?php echo $escapedMessage; ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btndash" data-id_contact="<?php echo $idContact; ?>" onclick="updateContactStatut(this)">
                                                                    <i class="fas fa-eye-alt"></i> Fermer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown ml-auto">
                                                <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="iconoir-more-vert icme pb-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                    <a class="dropdown-item" href="./../../controller/editStatutOpndContactController.php?id_contact=<?php echo $idContact; ?>">Marquer comme non-lu</a>
                                                    <a class="dropdown-item" href="./../../controller/deleteContactController.php?id_contact=<?php echo $idContact; ?>">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include './common/footer.php'; ?>