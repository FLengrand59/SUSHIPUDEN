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
                                                    <td>Lengrand</td>
                                                    <td>Florian</td>
                                                    <td>Demande d'informations</td>
                                                    <td>02/08/2023</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-danger">Non lu </span
                                                    ></td>
                                                    <td>
                                                        <div class="dropdown ml-auto">
                                                            <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="modal" data-target="#exampleModal" aria-expanded="false">
                                                                <i class="iconoir-eye-empty icme pb-1"></i>
                                                            </button>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Ceci est un message envoyé depuis le formulaire du front, une fois qu'il auras été ouvert le statut passera alors en lu.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btndash" data-dismiss="modal">Fermer</button>
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
                                                                <a class="dropdown-item" href="#">Marquer comme non-lu</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                            </tr>

                                            <tr>
                                                    <td>Boudjadja Samira</td>
                                                    <td>Samira</td>
                                                    <td>Candidature</td>
                                                    <td>06/07/2023</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-success">Lu </span
                                                    ></td>
                                                    <td>
                                                        <div class="dropdown ml-auto">
                                                            <button class="btn d-flex align-items-center" id="logout-dropdown" data-toggle="modal" data-target="#exampleModal2" aria-expanded="false">
                                                                <i class="iconoir-eye-empty icme pb-1"></i>
                                                            </button>
                                                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at turpis justo. Mauris volutpat posuere ex, eu lacinia justo varius id. Integer congue euismod purus, quis eleifend velit mattis ac. Sed consectetur efficitur ipsum, eu ultricies dui facilisis ut. Nam laoreet tellus nec ligula viverra rhoncus. Pellentesque ultrices finibus lacus in rutrum. Nulla a enim quis nunc dignissim pharetra. Maecenas bibendum magna at massa semper tristique. Fusce eleifend congue eros at efficitur. Fusce ipsum ex, dapibus id odio vitae, consectetur vehicula metus. Phasellus in viverra erat. Praesent auctor feugiat elit, ac sollicitudin enim sollicitudin in. Aliquam erat volutpat. Phasellus aliquet arcu in porta porta. Donec dui nulla, commodo ac bibendum molestie, cursus quis metus. Vestibulum fermentum ultricies facilisis.

                                                                    Donec sodales efficitur pharetra. Ut convallis risus lacus, nec convallis enim imperdiet et. Ut dignissim aliquam euismod. Maecenas dignissim non libero sed tristique. Donec nisl ipsum, feugiat vitae diam mattis, vulputate hendrerit tortor. Maecenas vel mollis leo, sit amet euismod felis. Mauris odio risus, porttitor vitae elit sed, viverra luctus lorem. Sed et dignissim elit, quis egestas magna. Proin egestas velit id dignissim luctus. Quisque a interdum orci, ac euismod metus. Duis fringilla consequat purus. Quisque congue felis sed erat euismod fringilla. Maecenas odio erat, ullamcorper sit amet accumsan sed, ultricies sit amet nisi. Nam vitae orci in orci ullamcorper pellentesque.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btndash" data-dismiss="modal">Fermer</button>
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
                                                                <a class="dropdown-item" href="#">Marquer comme non-lu</a>
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