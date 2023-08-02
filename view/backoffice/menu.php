<?php 

include './common/menu.php'; 

?>
    <!-- main content -->
    <main class="p-4 mh-100">
    
    <div class="row">
        <div class="col-lg-4">    
                <div class="card shadow mb-4  bg">
                    <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true"  >
                        <h6 class="m-0 ic">Ajouter un plat</h6>
                    </a>
                    <div class="collapse show"  >
                        <div class="card-body">
                            <div class="container"  >
                                <div class="row">
                                    <div class="col-12">      
                                        <!-- form ajout d'un plat -->
                                        <form action="" enctype="multipart/form-data" method="POST" id="addForm" role="form">
                                            <div class="form-group row mb-3">
                                                <div class="col-lg-12 col-12 pb-2">
                                                    <input class="form-control mb-4" name="nom" type="text" placeholder="Nom du plat">
                                                </div>  
                                                <div class="col-lg-12 col-12 pb-2">
                                                    <textarea class="form-control mb-4" id="brt" rows="4" placeholder="Description du plat"></textarea>
                                                </div>  
                                                <div class="col-lg-12 col-12 pb-2">
                                                    <input class="form-control mb-4" name="text" type="text" placeholder="Prix">
                                                </div>   
                                                <div class="col-lg-6 text-center">                                             
                                                </div> 
                                                <div class="col-lg-6 text-right">                                            
                                                    <input type="submit" class="btn btndash" value="Ajouter un plat">   
                                                </div>                                                             
                                            </div>
                                        </form>     
                                        <!-- End form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-4">    
                <div class="card shadow mb-4 h-100 bg">            
                    <a href="# " class="d-block card-header py-3" role="button" aria-expanded="true">
                        <h6 class="m-0 ic">Gestion du menu</h6>
                    </a>

                    <div class="table-responsive table-striped"> 
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr">
                                <th scope="col">Nom du plat</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prix</th>
                                <th scope="col">État</th>
                                <th scope="col">Options</th>
                                </tr>
                                </tr>
                            </thead>
                                <tbody>

                                    <tr>
                                        <td>GYOZAS VAPEUR POULET</td>
                                        <td>6 pièces.</td>
                                        <td>7.90€</td>
                                        <td>
                                            <span class="badge badge-pill badge-danger">Rupture</span
                                        ></td>

                                        <td>
                                            <div class="dropdown ml-auto">
                                                <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="iconoir-more-vert icme pb-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                    <a class="dropdown-item" href="#">Éditer</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>CREVETTE TEMPURA </td>
                                        <td>Crevettes tempura, servi avec un bol de riz vinaigré.</td>
                                        <td>6.80€</td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Disponible</span>
                                        </td>

                                        <td>
                                            <div class="dropdown ml-auto">
                                                <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="iconoir-more-vert icme pb-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                <a class="dropdown-item" href="#">Éditer</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>ASSORTIMENT MAKI  </td>
                                        <td>Saumon, thon, concombre, sauce soja, 10 pièces</td>
                                        <td>14.90€</td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Disponible</span
                                        ></td>
                                        <td>
                                            <div class="dropdown ml-auto">
                                                <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="iconoir-more-vert icme pb-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                                                <a class="dropdown-item" href="#">Éditer</a>
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
    </main>
</div>

<?php include './common/footer.php'; ?>