<?php 

include './common/menu.php'; 

?>
    <!-- main content -->
    <main class="p-4 mh-100">
        <div class="row">
            <div class="col-lg-12">    
                <div class="card shadow mb-4  bg">
                    <a href="#" class="d-block card-header py-3" role="button" aria-expanded="true"  >
                        <h6 class="m-0 ic">Ajouter une reservation</h6>
                    </a>
                    <div class="collapse show"  >
                        <div class="card-body">
                            <div class="container"  >
                                <div class="row">
                                    <div class="col-12">      
                                        <form action="../controller/createActionController.php" enctype="multipart/form-data" method="POST" id="addForm" role="form">
                                            <div class="form-group row mb-3">
                                                <div class="col-lg-7 pb-2">
                                                    <input class="form-control mb-4" name="libelle" type="text" placeholder="Nom et prénom">
                                                </div>  
                                                <br>
                                                <br>
                                                <div class="col-lg-5 pb-2 mb-4">
                                                    <input class="form-control" type="date" name=date>
                                                </div>     
                                                <br>
                                                <br>     
                                                <div class="col-lg-12 text-center">                                            
                                                    <input type="submit" class="btn btndash" value="Ajouter">   
                                                </div>                                                             
                                            </div>
                                        </form>                                                                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php include './common/footer.php'; ?>