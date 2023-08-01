<!DOCTYPE html>
    <html lang="fr" >
        <head>
            <meta charset="UTF-8">
            <title>Restaurant Sushipuden | Gestion</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap -->
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
            <!-- icons Library -->
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/iconoir/6.10.0/css/iconoir.css'>
            <!-- Stylesheet -->
            <link rel="stylesheet" href="./../../public/css/backoffice.css">
            <!-- Script Js -->
            <script src="./../../public/js/project.js"></script>
        </head>
        <body>

            <div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"></div>

            <!-- sidebar -->
            <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 sidebar" id="sidebar">
                <h1 class="text-primary d-flex my-4 justify-content-center"><img src="./../../public/img/sushipuden.svg" alt="Logo" height="200"></h1>
                <div class="list-group rounded-0">

                    <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
                        <span><i class="iconoir-graph-up icme"></i></span>
                        <span class="ml-2">Vue d'ensemble</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                        <span><i class="iconoir-calendar icme"></i></span>
                        <span class="ml-2">Réservations</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
                        <span><i class="iconoir-clutery icme"></i></span>
                        <span class="ml-2">Menu</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                        <span><i class="iconoir-percentage icme"></i></span>
                        <span class="ml-2">Newsletter</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
                        <span><i class="iconoir-send-mail icme"></i></span>
                        <span class="ml-2">Contact</span>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                        <span><i class="iconoir-star icme"></i></span>
                        <span class="ml-2">Réseaux sociaux</span>
                    </a>

                </div>
            </div>
            <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">

            <!-- top nav -->
            <nav class="w-100 d-flex px-4 py-2 mb-4 nv">
                <!-- close sidebar -->
                <button class="btn py-0 d-lg-none" id="open-sidebar">
                    <span><i class="iconoir-menu icme"></i></span>
                </button>
                <div class="dropdown ml-auto">
                    <button class="btn d-flex align-items-center btnlog" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="iconoir-log-out icme pb-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                        <a class="dropdown-item" href="#">Se déconnecter</a>
                    </div>
                </div>
            </nav>
            <!-- main content -->
            <main class="p-4 mh-100">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="bgcard">
                            <div class="p-3 pt-4 d-flex ">
                                <span><i class="iconoir-calendar icme"></i></span>
                                <h5 class="ml-2">Réservations</h5>
                            </div>
                            <p class="pl-3 pb-4 pc">Vous avez 5 réservations aujourd'hui.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="bgcard">
                            <div class="p-3 pt-4 d-flex">
                                <span><i class="iconoir-send-mail icme"></i></span>
                                <h5 class="ml-2">Contact</h5>
                            </div>
                            <p class="pl-3 pb-4 pc">Vous avez reçu 12 messages.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="bgcard">
                            <div class="p-3 pt-4 d-flex">
                                <span><i class="iconoir-percentage icme"></i></span>
                                <span class="ml-2">Newsletter</span>
                            </div>
                            <p class="pl-3 pb-4 pc">45 Emails dans la base de données.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mb-4">    
                        <div class="card shadow mb-4 h-100 bg">            
                            <a href="# " class="d-block card-header py-3" role="button" aria-expanded="true">
                                <h6 class="m-0 ic">Réservations</h6>
                            </a>
                            <div class="collapse show" >
                                <div class="card-body">
                                        <!-- calendar -->
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var calendarEl = document.getElementById('calendar');
                                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                                // Requete Ajax qui recupere toutes les reservations
                                                events : 
                                                    {
                                                        // Appelle mon controlleur
                                                        url:  '../controller/', 
                                                        contentType: "application/json; charset=utf-8",
                                                        // renvoi les infos au format JSON
                                                        dataType: 'json',
                                                        type: 'POST',
                                                        data: {
                                                            libelle:'libelle',
                                                            date:'date',
                                                        },
                                                        // si requete envoyé affiché ce message
                                                        success: function(data) {
                                                            console.log('XHR success callback');
                                                        },
                                                        // sinon
                                                        failure: function(data) {
                                                            console.error('XHR failure callback');
                                                        }                                        
                                                    },     
                                                    eventClick: function(info) {
                                                        var eventObj = info.event;
                                                        console.log(eventObj.extendedProps.description);
                                                    },
                                                    // affiche le libelle dans une popUp
                                                    eventDidMount: function(info) {
                                                        $(info.el).tooltip({
                                                            title: info.event.title,
                                                        });
                                                    },
                                                // Options FullCalendar
                                                initialView: 'dayGridMonth',
                                                locale: 'fr',
                                                themeSystem: 'bootstrap',
                                                buttonText: { 
                                                    today:    'Aujourd\'hui',
                                                    month:    'Mois',
                                                    week:     'Semaine',
                                                    day:      'Jour',
                                                    list:     'Liste' 
                                                            },
                                                // Affiche les numeros de semaine
                                                weekNumbers : true,
                                                weekNumberFormat: { week: 'numeric' },                         
                                                });
                                                calendar.render();
                                            });
                                        </script>

                                        <div id='calendar'></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">    
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


    

            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <!-- Full calendar -->
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

        </body>
    </html>
