<?php 

include './common/menu.php'; 
include './../../controller/listNewsletter.php';

?>
    <!-- main content -->
    <main class="p-4 mh-100">
        <div class="row">
            <div class="col-lg-12">    
                <div class="card shadow mb-4  bg">
                    <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true"  >
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
                            <?php foreach ($recupNewsletter as $row){  ?>
                                <tr>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($row['date'])); ?></td>
                                        <td>
                                            <?php if ($row['etat'] === "0") { ?>
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
                                                    <a class="dropdown-item" href="#">Ré-envoyer le mail de réduction</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
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