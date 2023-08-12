<?php 

include './common/menu.php'; 
include './../../controller/readResaBackController.php';

?>
    <!-- main content -->
    <main class="p-4 mh-100">
        <div class="row">
            <div class="col-lg-12">    
                <div class="card shadow mb-4  bg">
                    <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true"  >
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
                                            <th scope="col">N° Tel</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Couverts</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">État</th>
                                            <th scope="col">Options</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($recupResa as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['prenom']; ?></td>
                                            <td><?php echo $row['telephone']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <!-- Formatage de la date -->
                                            <td><?php echo date("d/m/Y", strtotime($row['date'])); ?></td>
                                            <td><?php echo $row['couverts']; ?></td>
                                            <td>
                                            <?php if ($row['service'] === "0") { ?>
                                                    <?php echo "Midi"; ?>
                                            <?php } else { ?>
                                                <?php echo "Soir"; ?>
                                            <?php } ?>
                                            </td>
                                            <td>
                                        <!-- Selon l'etat on affiche un badge différent -->
                                            <?php if ($row['etat'] === "0") { ?>
                                                <span class="badge badge-pill badge-warning">
                                                    <?php echo "En attente"; ?>
                                                </span>
                                            <?php } elseif ($row['etat'] === "1") { ?>
                                                <span class="badge badge-pill badge-success">
                                                    <?php echo "Confirmé"; ?>
                                                </span>
                                                <?php } elseif ($row['etat'] === "2") { ?>
                                                <span class="badge badge-pill badge-danger">
                                                    <?php echo "Annulé"; ?>
                                                </span>
                                            <?php } ?>
                                            </td>
                                            <td>
                                            <div class="dropdown ml-auto">
                                                    <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="iconoir-more-vert icme pb-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                        <a class="dropdown-item" href="#">Confirmer la réservation</a>
                                                        <a class="dropdown-item" href="#">Annuler la réservation</a>
                                                        <a class="dropdown-item" href="#">Mettre en attente</a>
                                                        <a class="dropdown-item" href="./../../controller/deleteResaController.php?id_reservation=<?php echo $row['id_reservation'] ?>">Supprimer</a>
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