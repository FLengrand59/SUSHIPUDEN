<!DOCTYPE html>
    <html lang="fr" >

<?php
    $titre = 'Restaurant Sushipuden | Gestion';
?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Meta -->
            <title><?php echo $titre; ?></title>
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
                <h1 class="text-primary d-flex my-4 justify-content-center">
                    <img src="./../../public/img/sushipuden.svg" alt="Logo" height="200">
                </h1>
                
                <div class="list-group rounded-0" id="list-tab" role="tablist">
                    <a href="index.php" class="list-group-item list-group-item-action active border-0 d-flex">
                        <span><i class="iconoir-graph-up icme"></i></span>
                        <span class="ml-2">Vue d'ensemble</span>
                    </a>
                    <a href="resa.php" class="list-group-item list-group-item-action  border-0 d-flex">
                        <span><i class="iconoir-calendar icme"></i></span>
                        <span class="ml-2">Réservations</span>
                    </a>

                    <a href="menu.php" class="list-group-item list-group-item-action border-0 d-flex">
                        <span><i class="iconoir-clutery icme"></i></span>
                        <span class="ml-2">Menu</span>                        
                    </a>

                    <a href="newsletter.php" class="list-group-item list-group-item-action border-0 d-flex">
                        <span><i class="iconoir-percentage icme"></i></span>
                        <span class="ml-2">Newsletter</span>
                    </a>

                    <a href="contact.php" class="list-group-item list-group-item-action border-0 d-flex">
                        <span><i class="iconoir-send-mail icme"></i></span>
                        <span class="ml-2">Contact
                        </span>
                    </a>

                    <a href="rs.php" class="list-group-item list-group-item-action border-0 d-flex">
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
                            <a class="dropdown-item" href="./login.php">Se déconnecter</a>
                        </div>
                    </div>
                </nav>