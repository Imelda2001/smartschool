<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme d'Aide à la Décision pour Universités</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php

    session_start();

    include_once('connexion.php');

    if ($_POST) {

        $result = $database->query("select * from contact");

        $nom = $_POST['nom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sqlmain = "select * from contact where email=?;";
        if ($result->num_rows == 1) {
            $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Already have an account for this Email address.</label>';
        } else {
            $database->query("insert into contact(nom_con,telephone_con,email_con,message_con) 
            values('$nom','$telephone','$email','$message');");

            header('Location: index.php');
            $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;"></label>';
        }
    } ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-warning" href="#">SmartSchool</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" style="font-weight: bold;">
                    <li class="nav-item active">
                        <a class="nav-link text-warning" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#etablissement">Etablissement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="./login.php" class="btn btn-warning text-primary" style="font-weight: bold;">Login</a>
    </nav>

    <!-- Slider -->
    <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/2.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="assets/images/5.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="assets/images/R.jpeg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>

    <!-- Contenu principal -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Bienvenue sur notre plateforme d'aide à la décision pour trouver la meilleure université !</h2>
                <p>Découvrez les critères de sélection, explorez les options et prenez une décision éclairée pour votre avenir académique.</p>
                <a href="./sign_in.php" class="btn btn-warning text-primary" style="font-weight: bold;">Commencer</a>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rechercher une université</h5>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom de l'université">
                            </div>
                            <button type="submit" class="btn btn-outline-warning btn-block">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- ################# Our Departments Starts Here#######################--->


        <section id="services" class="key-features department">
            <div class="container">
                <div class="inner-title">

                    <h2 class="text-center">Metier du futur</h2>
                    <p class="text-center">Take a look at some of our key features</p>
                </div>

                <div class="row bg-white" style="height: 300px;">
                    <br><br>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-brain text-primary" style="font-size: 30px;"></i>
                            <h5>Interligence Artifficiel</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-chart-line text-primary" style="font-size: 30px;"></i>
                            <h5>Data Science</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-procedures text-primary" style="font-size: 30px;"></i>
                            <h5>Neurologie</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-dollar-sign text-primary" style="font-size: 30px;"></i>
                            <h5>Ingenieur en Blockchain</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-seedling text-primary" style="font-size: 30px;"></i>
                            <h5>Agriculture</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-key">
                            <i class="fas fa-robot text-primary" style="font-size: 30px;"></i>
                            <h5>Roboticien</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>


        <!-- Nouvelle Section -->
        <div id="etablissement" class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Quelques Etablissements</h2>
                <div class="row row-cols-1 row-cols-md-3 g-3 p-4">
                    <div class="col">
                        <div class="card text-center">
                            <img src="assets/images/Siantou.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SIANTOU</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="sign_in.php" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <img src="assets/images/Soa2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SOA</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="sign_in.php" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <img src="assets/images/Localhost1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Localhost ACADEMY</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="sign_in.php" class="btn btn-warning text-primary" style="font-weight: bold;">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de Contact -->
        <div id="contact" class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center">Contactez-nous</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="phone" class="form-control" id="name" placeholder="Votre numero de Téléphone" name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Votre message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning text-primary btn-block" style="font-weight: bold;">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-light text-center py-3 mt-5" style="width: 100%;">
            <p class="text-warning" style="font-weight: bold;">&copy; SmartSchool, Une solution de DataMaster. Tous droits réservés.</p>
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>