<?php 


$titre = 'Gestion des réservations';

include './common/menu.php'; 

?>

<title><?php echo $title; ?></title>

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
        </div>
    </main>
</div>

<?php include './common/footer.php'; ?>