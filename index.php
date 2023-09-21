<?php include './view/common/header.php'; ?>

<!-- Header -->
<div class="container-fluid mt-4">
    <div class="row">

        <div class="col-6 mb-5">
            <img src="./public/img/header_img.png" alt="Image gauche" class="img-fluid">
            <div class="btndev col-11 text-center">
                <a href="#menu" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="banniere col-6">
            <img src="./public/img/Bannheader.png" alt="Image droite" class="img-fluid">
        </div>
    </div>

</div>
</header>

<!-- Section presentation -->
<section id="presentation" class="container mt-5">
    <div class="row">

        <div class="col-12 col-md-6">
            <img src="./public/img/AuthenticTaste.png" alt="Image" class="img-fluid">
        </div>

        <div class="col-12 col-md-6 text-white text-center">
            <div class="text-container">
                <h2>Des produits frais, de qualité.</h2>
                <p>
                    Nos mets sont préparés et cuisinés à la commande sur
                    place, pour vous assurer une expérience gustative unique.
                </p>
            </div>

            <div class="text2-container mt-5 text-center">
                <h2>Entre tradition et innovation</h2>
                <p>
                    Notre chef s’inspire de vos envies pour confectionner une
                    carte qui répond à vos attentes mais peut aussi vous
                    surprendre. Notre équipe a développé un véritable
                    savoir-faire dans l’art des sushi pour vous proposer une
                    cuisine simple et savoureuse.
                </p>
            </div>
        </div>
</section>

<!-- Menu Entrees plats desserts -->

<section class="container">
    <main class="row">
        <div class="col-12 col-md-6 mt-5 text-white p-3">
            <img src="./public/img/groupe28.png" alt="Image 1" class="img-fluid mb-3">
            <div id="menu">
                <h2 class="text-center">Menu</h2>
                <h3>Entrées</h3>
                <p class="text-uppercase">gyoza saveur poulet.......................................................................7.90€</p>
                <p>lot de 3 pièces ou 6 pièces au choix</p>

                <p class="text-uppercase">crevette tempura....................................................................................7.90€</p>
                <p>Crevettes tempura, servi avec un bol de riz vinaigré</p>
                <hr>

                <h3>Plats</h3>
                <p class="text-uppercase">assortiments maki............................................................................14.90€</p>
                <p>Saumon, thon, concombre, sauce soja, 10 pièces</p>

                <p class="text-uppercase">assortiments sushi...........................................................................7.90€</p>
                <p>Saumon, thon, daurade, crevette, 10 pièces</p>
                <hr>

                <h3>Desserts</h3>
                <p class="text-uppercase">mochis glacés................................................................................................8.90€</p>
                <p>Pâte de riz à l'extérieur fourrée d'une crème glacée saveur fraise,
                    vanille, mangue, 2 pièces.</p>

                <p class="text-uppercase">doryaki................................................................................................6.80€</p>
                <p>Gâteau d’haricot rouge, 4 pièces</p>
                <hr>

                <p class="text-uppercase">Des produits frais, de qualité.</p>
                <p>Notre carte, élaborée à partir de produits nobles, vous propose de
                    déguster les traditionnels sushi, mais aussi de découvrir nos créations et
                    plats cuisinés. Inspirée par vos goûts, aussi différents soient-ils, elle ravira
                    vos papilles.</p>

            </div>
        </div>

        <div class="col-12 col-md-6 mt-5 d-flex align-items-end justify-content-end">
            <img src="./public/img/imgmenu.png" alt="Image 2" class="img-fluid">
        </div>
    </main>
</section>

<!-- SectionReservation -->
<div class="container">
    <div class="row">

        <div class="col-md-4 mt-5" id="reservation">
            <img src="./public/img/Groupe 107.png" class="img-fluid w-auto h-75" alt="femme reservation">
        </div>

        <div class="col-md-7 mt-5 text-white">
            <h2 class="display-3">Reserve une table</h2>
            <div class="form p-3">
                <p class="mt-5">Indiquez le nombre de convives, la date et l'heure souhaitée afin de
                    garantir votre table dans notre restaurant.</p>
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>
                        <div class="col">
                            <label for="prenom"></label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <label for="tel"></label>
                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="N°Tel" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="date"></label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                        </div>
                        <div class="col">
                            <label for="couverts"></label>
                            <input type="number" class="form-control" id="couverts" name="couverts" placeholder="Couverts">
                        </div>
                        <div class="col">
                            <label for="service"></label>
                            <select class="form-control" id="service" name="service" placeholder="Services" required>
                                <option value="dejeuner">Déjeuner</option>
                                <option value="diner">Dîner</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mr-5 fw-bold">Réserver</button>
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


<!-- Section contact/map -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./public/img/map.png" alt="map de cambrai">
            </div>

            <div class="col-md-6">
                <img src="./public/img/trouver.png" class="img-fluid alt=" nous trouver>
                <p class="text-white">Place du centre-ville <br>
                    59400 Cambrai <br>
                    Tel : 032712345678</p>


                <p class="text-white">HORAIRES D’OUVERTURE <br>
                    Lundi – Samedi : 10:30-14:00/18:00-22:30 <br>
                    Dimanche : 18:00-22:30</p>

                <div class="mt-3">
                    <a href="https://www.facebook.com/" target="_blank"><img src="./public/img/reseaux.png" alt="Logo facebook et insta" width="80"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section contact -->
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-6 mt-5" id="contact">
            <h2 class="display-3 bigtitle pb-4" style="padding-top: 81px;">Contact</h2>
            <div class="form p-3">
                <p class="px-3 py-3">Contactez l'équipe Sushipuden pour vos questions et demandes. Nous vous répondrons dans les plus brefs délais.</p>
                <form class="px-4 py-2" action="./controller/createContact.php" method="POST" role="form">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select class="form-select mySelectArrow mt-4" name="id_categorie" id="id_categorie">
                                <option selected>Objet</option>
                                <option value="1">Demande d'infos</option>
                                <option value="2">Candidature</option>
                                <option value="3">Autres</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"></label>
                        <textarea class="form-control" id="brt" placeholder="Message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="row mt-3 pl-4">
                        <div class="col-12 text-right">
                            <input type="hidden" value="0" id="statut" name="statut">
                            <input type="submit" class="btn btndash" value="Ajouter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <img src="./public/img/Design sans titre (1).png" alt="rue temple et sushi" class="img-fluid">
        </div>
    </div>

</div>
</div>
</section>
</div>

<!-- Section coupon reduction -->
<div class="container mt-4 mb-4" style="padding-top: 82px;">
    <div class="row">
        <div class="col-md-6">
            <img src="./public/img/Groupe 5208.png" alt="coupon de reduction" class="img-fluid couponfoo">
        </div>
        <div class="col-md-6 p-6">
            <form action="./controller/createNewsletter.php" enctype="multipart/form-data" method="POST" role="form">
                <p class="">Bénéficier d'un coupon de réduction en vous abonnant à notre newsletter !</p>
                <br>
                <div class="d-flex">
                    <input type="text" class="form-control" id="mail" name="mail" placeholder="Email" required style="background:#383838;">
                    <input type="hidden" value="0" name="etat">
                    <input type="submit" class="btn btndash" value="S'abonner">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Afficher la notification en fonction du message disponible
    <?php if (!empty($notificationMessage2)) : ?>
        Toastify({
            text: "<?php echo $notificationMessage2; ?>",
            className: "success",
            style: {
                background: "#20c997",
                boxShadow: "none",
            }
        }).showToast();
    <?php elseif (!empty($notificationMessage3)) : ?>
        Toastify({
            text: "<?php echo $notificationMessage3; ?>",
            className: "danger",
            style: {
                background: "#dc3545",
                boxShadow: "none",
            }
        }).showToast();
    <?php endif; ?>
</script>


<?php include('./view/common/footer.php'); ?>