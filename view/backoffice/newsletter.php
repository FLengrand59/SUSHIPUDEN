<?php

include './common/menu.php';
include '../../controller/readNewsletter.php';
?>
<!-- main content -->
<main class="p-4 mh-100">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4  bg">
                <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true">
                    <h6 class="m-0 ic">Gestion des emails et coupons de réductions</h6>
                </a>

                <div class="row">
                    <div class="col-12 col-lg-12">

                        <div class="table-responsive table-striped">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr">
                                        <th scope="col">Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">État</th>
                                        <th scope="col">Options</th>
                                        </tr>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($readNewsletter as $row) {  ?>
                                        <tr>
                                            <td><?php echo $row['mail']; ?></td>
                                            <td><?php echo date("d/m/Y", strtotime($row['jour'])); ?></td>
                                            <td>
                                                <?php if ($row['etat'] === "1") { ?>
                                                    <span class="badge badge-pill badge-success">Envoyé</span>
                                                <?php } else { ?>
                                                    <span class="badge badge-pill badge-danger">non-envoyé</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <div class="dropdown ml-auto">
                                                    <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="iconoir-more-vert icme pb-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                        <?php if ($row['etat'] == 0) : ?>
                                                            <a class="dropdown-item" href="./../../controller/updateNewsletter.php?php echo $row['id_newsletter']; ?>&email=<?php echo $row['mail']; ?>">Envoyer l'e-mail de réduction</a>
                                                        <?php else : ?>
                                                            <a class="dropdown-item" href="./../../controller/updateNewsletter.php?id_newsletter=<?php echo $row['id_newsletter']; ?>&email=<?php echo $row['mail']; ?>">Réenvoyer l'e-mail de réduction</a>
                                                        <?php endif; ?>
                                                        <a class="dropdown-item" href="./../../controller/deleteNewsletter.php?id_newsletter=<?php echo $row['id_newsletter']; ?>">Supprimer</a>
                                                    </div>
                                                </div>
                                            </td>
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