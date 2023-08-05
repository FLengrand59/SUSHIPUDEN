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
                <img src="./public/img/trouver.png" class="img-fluid alt="nous trouver>
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
    <section>
        <div class="container">
            <div class="row">
    
                <div class="col-md-6 mt-5 text-white" id="contact">
                    <h2 class="display-3">Contact</h2>
                    <div class="form p-3">
                    <p class="mt-5">Indiquez le nombre de convives, la date et l’heure souhaitée afin de
                        garantir votre table dans notre restaurant</p>
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
        
                            <div class="row">
                                <div class="col">
                                <label for="objet"></label>
                                <input type="text" class="form-control" id="objet" placeholder="Objet de votre message">
                            </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label"></label>
                                    <textarea class="form-control" id="message" placeholder="Message" name="message" rows="5" required></textarea>
                                </div>
            
                                <div class="row mt-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mr-5 fw-bold">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <img src="./public/img/Design sans titre (1).png" alt="rue temple et sushi" class="img-fluid h-75">
                    </div>
                </div>
            
                        </div>
                    </div>
        </section>
                            </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-6 text-white">
                                            <img src="./public/img/Groupe 5208.png" alt="coupon de reduction" class="img-fluid h-75">
                                        </div>
                            
                                        <div class="col-md-6 text-white">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="text-white">Bénéficier d'un coupon de réduction en vous abonnant à notre <br>
                                                            newsletter !</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="mail"></label>
                                                        <input type="text" class="form-control" id="mail" name="mail" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button type="submit" class="btn btn-primary">S'abonner</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


  <?php include('./view/common/footer.php'); ?>