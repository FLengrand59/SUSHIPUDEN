<?php 

include './common/menu.php'; 

?>
    <!-- main content -->
    <main class="p-4 mh-100">

        <div class="row">
            <div class="col-lg-12">    
                <div class="card shadow mb-4  bg">
                    <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true"  >
                        <h6 class="m-0 ic">Modifier les réseaux sociaux</h6>
                    </a>
                    <div class="collapse show"  >
                        <div class="card-body">
                            <div class="container-fluid"  >
                                <div class="row">
                                    <div class="col-12">      
                                        <!-- form ajout d'une réservations -->
                                        <form action="" enctype="multipart/form-data" method="POST" id="addForm" role="form">
                                            <div class="form-group row mb-3">
                                                <div class="col-lg-6 col-12 pb-2">
                                                    <input class="form-control mb-4" name="nom" type="text" placeholder="Facebook">
                                                </div>  
                                                <div class="col-lg-6 col-12 pb-2">
                                                    <input class="form-control mb-4" name="prenom" type="text" placeholder="Instagram">
                                                </div>   
                                                <div class="col-lg-6 text-center">                                             
                                                </div> 
                                                <div class="col-lg-6 text-right">                                            
                                                    <input type="submit" class="btn btndash" value="Modifier">   
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
        </div>
    </main>
</div>

<?php include './common/footer.php'; ?>