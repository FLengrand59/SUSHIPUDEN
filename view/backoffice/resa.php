<?php 

include './common/menu.php'; 

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
                                            <tr>
                                                    <td>Lengrand</td>
                                                    <td>Florian</td>
                                                    <td>0686166432</td>
                                                    <td>mail@mail.com</td>
                                                    <td>02/08/2023</td>
                                                    <td>3</td>
                                                    <td>Soir</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-danger">Annulé</span
                                                    ></td>
                                                    <td>
                                                        <div class="dropdown ml-auto">
                                                            <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="iconoir-more-vert icme pb-1"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                                <a class="dropdown-item" href="#">Confirmer la réservation</a>
                                                                <a class="dropdown-item" href="#">Annuler la réservation</a>
                                                                <a class="dropdown-item" href="#">Mettre en attente</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                            </tr>

                                            <tr>
                                                    <td>Boudjadja</td>
                                                    <td>Samira</td>
                                                    <td>0612589635</td>
                                                    <td>hello@mail.com</td>
                                                    <td>06/08/2023</td>
                                                    <td>8</td>
                                                    <td>Midi</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-warning">En attente</span
                                                    ></td>
                                                    <td>
                                                        <div class="dropdown ml-auto">
                                                            <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="iconoir-more-vert icme pb-1"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                                <a class="dropdown-item" href="#">Confirmer la réservation</a>
                                                                <a class="dropdown-item" href="#">Annuler la réservation</a>
                                                                <a class="dropdown-item" href="#">Mettre en attente</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                            </tr>

                                            <tr>
                                                    <td>Fantin</td>
                                                    <td>Christelle</td>
                                                    <td>0617985635</td>
                                                    <td>holla@mail.com</td>
                                                    <td>10/09/2023</td>
                                                    <td>4</td>
                                                    <td>Soir</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-success">Confirmé</span
                                                    ></td>
                                                    <td>
                                                        <div class="dropdown ml-auto">
                                                            <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="iconoir-more-vert icme pb-1"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                                <a class="dropdown-item" href="#">Confirmer la réservation</a>
                                                                <a class="dropdown-item" href="#">Annuler la réservation</a>
                                                                <a class="dropdown-item" href="#">Mettre en attente</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            
                                    
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