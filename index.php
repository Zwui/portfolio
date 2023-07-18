<?php

/* --- Form sending mails --- */
// Checking input & safety
if(isset($_POST['send'])){
    if(isset($_POST['consentuser'])){
        if(isset($_POST['name']) AND !empty($_POST['name']) AND
            isset($_POST['email']) AND !empty($_POST['email'])AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND
            isset($_POST['tel']) AND !empty($_POST['tel']) AND
            isset($_POST['message']) AND !empty($_POST['message'])){

                // Data's securisation (stripslashes to Un-quotes a quoted string, html to check special char, trim to escape useless spaces)
                $name= stripslashes(htmlentities(trim($_POST['name'])));
                $mail= stripslashes(htmlentities(trim($_POST['email'])));
                $tel= stripslashes(htmlentities(trim($_POST['tel'])));
                $message= stripslashes(htmlentities(trim($_POST['message'])));
                $message= wordwrap($message, 70, "\r\n");
                $message.= "\r\n Ce mail à été envoyé via ton portfolio par ".$name." contact: (mail: ".$mail.", tel: ".$tel.")";
                $to="contact.al@anaislhomme.com";
                $subject= "Tu as reçu un mail de ".$name;
                $headers="Content-Type: text/plain;charset='utf-8'";

                    mail($to,$subject, $message, $headers);
                    $sendmail= true;

        }else{
        // Veuillez remplir tous les champs..
        }
    }else{
        $badconsent=true;
    }
}

// Envoi
//mail($to, $subject, $message, implode("\r\n", $headers));

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Anaïs Lhomme - Portfolio Développeur Web Junior</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-custom-blue text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Lhomme Anaïs</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-custom-blue text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">A propos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#training">Formation</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-custom text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets\img\avatar_2.png" alt="avatar_anais" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Hello !</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Je suis actuellement à la recherche d'un poste de développeur Web Junior</p>
            </div>
        </header>
        <!-- About Section-->
        <section class="page-section text-black mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-black">A propos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-12 me-auto"><p class="lead">Je me présente... Je m'appelle Anaïs, j'ai 29 ans et je suis développeuse Web Junior.</p></div>
                    <div class="col-lg-12 ms-auto"><p class="lead">Ancienne laborantine, je me suis reconvertis dans un domaine qui me passionne avec la CCI de Metz. Je suis très enthousiaste à l'idée de travailler dans un domaine en constante évolution et d'acquérir de nouvelles connaissances chaque jour. Mes précédentes expériences dans différents domaines seront à coup sûr un atout pour votre entreprise.</p></div>
                    <div class="col-lg-12 me-auto bg-custom-blue"><p class="lead fst-italic">« Le succès n'est pas final, l'échec n'est pas fatal. C'est le courage de continuer qui compte.», Winston Churchill.</p></div>
                    <div class="col-lg-12 me-auto"><p class="lead">Si mon profil vous interesse, contactez moi ici :)</p></div>
                </div>
                <!-- About Section Button-->
                <!-- remplacer txt par hr qui renvoi au formulaire de contact -->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark" href="#contact">
                        <i class="fas fa-envelope"></i>
                        
                    </a>
                </div>
                <!-- Soft Skills Section -->
                <div class="row">
                    <div class="col-lg-2 col-md-6 mx-auto mt-5 text-center">
                        <i class="skills fa-solid fa-people-group" style="color: #e9bbb5;"></i>
                        <h3 class="skills-txt" style="color: #e9bbb5;">Esprit d'équipe</h3>
                    </div>
                    <div class="col-lg-2 col-md-6 mx-auto mt-5 text-center">
                        <i class="skills fa-solid fa-magnifying-glass" style="color: #aad9cd;"></i>
                        <h3 class="skills-txt" style="color: #aad9cd;">Résolution de problèmes</h3>
                    </div>
                    <div class="col-lg-2 col-md-6 mx-auto mt-5 text-center">
                        <i class="skills fa-solid fa-sliders" style="color: #e8d595;"></i>
                        <h3 class="skills-txt" style="color: #e8d595;">Capacité d'adaptation</h3>
                    </div>
                    <div class="col-lg-2 col-md-6 mx-auto mt-5 text-center">
                        <i class="skills fa-solid fa-hourglass-half" style="color: #8FBC8F;"></i>
                        <h3 class="skills-txt" style="color: #8FBC8F;">Patience</h3>
                    </div>
                    <div class="col-lg-2 col-md-6 mx-auto mt-5 text-center">
                        <i class="skills fa-solid fa-share-nodes" style="color: #E7CBA9;"></i>
                        <h3 class="skills-txt" style="color: #E7CBA9;">Partage des connaissances</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section bg-custom portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-light mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/tendances_vegetales.png" alt="Site Tendances Végétales" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/Chicoboros.png" alt="Site E-commerce" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/snake.png" alt="Snake" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Timeline Section-->
        <section class="page-section" id="training">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formation</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container py-5">
                <div class="main-timeline-4 text-black">
                    <div class="timeline-4 left-4">
                        <div class="card gradient-custom">
                            <div class="card-body p-4">
                                <i class="fa-brands fa-amazon fa-2x mb-3"></i>
                                <h4>Amazon Augny</h4>
                                <p class="small text-black-50 mb-4">Novembre 2021 - Aujourd'hui</p>
                                <h5>Employée logistique</h5>
                                <p>Instructor: Formation des nouveaux arrivants et coaching des associés. Ecoute des associés face à leurs problèmes au sein de l’entreprise,  résolution de ces derniers et rapports aux managers des informations pertinentes.
                                <br>
                                Problems Solves: Résolution des problèmes de l’étage (articles non scannable, commandes difficile à terminer, …), respect du timing des colis urgents.
                                </p>
                                <h6 class="badge bg-light text-black mb-0">Formatrice</h6>
                                <h6 class="badge bg-light text-black mb-0">Stress managment</h6>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-4 right-4">
                        <div class="card gradient-custom-4">
                            <div class="card-body p-4">
                                <i class="fa-solid fa-graduation-cap fa-2x mb-3"></i>
                                <h4>CCI de Metz</h4>
                                <p class="small text-black-50 mb-4">Mai 2020 - Avril 2021</p>
                                <h5 class="font-weight-bold">Titre Pro: Développeur Web et Web Mobile (Niveau 5) - CCI de Metz </h5>
                                <p>Développement de sites internet et d'applications complètes, réactives et dynamiques depuis la base de données tout en respectant les bonnes pratiques et en veuillant à la sécurité.
                                </p>
                                <h6 class="badge bg-light text-black mb-0">HTML/CSS</h6>
                                <h6 class="badge bg-light text-black mb-0">PHP</h6>
                                <h6 class="badge bg-light text-black mb-0">Javascript</h6>
                                <h6 class="badge bg-light text-black mb-0">SQL</h6>
                                <h6 class="badge bg-light text-black mb-0">BDD</h6>
                                <h6 class="badge bg-light text-black mb-0">Bootstrap</h6>


                            </div>
                        </div>
                    </div>
                    <div class="timeline-4 left-4">
                        <div class="card gradient-custom">
                            <div class="card-body p-4 text-black">
                                <i class="fa-solid fa-leaf fa-2x mb-3"></i>
                                <h4>Saclay, Grenoble, Toulouse...</h4>
                                <p class="small text-black-50 mb-4"> De 2014 à 2021</p>
                                <h5>Technicienne de laboratoire</h5>
                                <p>Avant de m’intéresser au secteur de l’informatique, j’ai travaillé en tant que technicienne de laboratoire, principalement dans la recherche en biologie végétale.
                                </p>
                                <h6 class="badge bg-light text-black mb-0">Formatrice</h6>
                                <h6 class="badge bg-light text-black mb-0">Biologie moléculaire</h6>
                                <h6 class="badge bg-light text-black mb-0">Biologie végétale</h6>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-4 right-4">
                        <div class="card gradient-custom-4">
                            <div class="card-body p-4">
                                <i class="fa-solid fa-graduation-cap fa-2x mb-3"></i>
                                <h4>Ile de France</h4>
                                <p class="small text-black-50 mb-4">De 2012-2014</p>
                                <h5>BTS Biotechnologies</h5>
                                <p>Diplôme complet sur les techniques de biologie et de biochimie, permettant de travailler soit dans la recherche, soit dans l'industrie.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section bg-custom" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-light mb-0">Contactez moi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="#contact" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input name="name" id="name" class="form-control" type="text" placeholder="Enter your name..." maxlenght="20" required/>
                                <label for="name">Nom</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input name="email" id="email" class="form-control" type="email" placeholder="name@example.com" required/>
                                <label for="email">Adresse email</label>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input name="tel" id="tel" class="form-control" type="tel" placeholder="(+33) 1 23 45 67 89" min="10" max="20" required/>
                                <label for="tel">Télephone</label>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea name="message" id="message" class="form-control" type="text" placeholder="Veuillez écrire votre message ici..." style="height: 10rem" required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <!-- Privacy policy-->
                            <div class="mb-3">
                                <label for="consentuser">
                                    <input name="consentuser" id="consentuser" type="checkbox" id="consentuser">
                                    En soumettant ce formulaire, j'accepte que mes données personnelles soient utilisées pour me recontacter. Aucun autre traitement ne sera effectué avec mes informations. Pour connaitre et exercer vos droits, veuillez consulter la <a target="blank" href="includes/privacypolicy.php">Politique de confidentialité</a>.
                                </label>
                            </div>
                                                        <!-- Mail's message statut -->
                                                        <?php
                            // If the user didn't checked de Privacy policy
                            if(isset($badconsent)){
                            ?>
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div id="submitErrorMessage">
                                        <div class="text-center text-danger mb-3">Veuillez accepter les Politiques de Confidentialité pour envoyer votre mail.</div>
                                    </div>
                            <?php
                                }
                            //If there is a problem with mail's sending
                            if(isset($sendmail)){
                                if($sendmail == true){
                            ?>
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Votre message à bien été envoyé!</div>
                                </div>
                            </div>
                            <?php
                                }else{
                            ?>
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Une erreur est intervenue dans l'envoi de votre message</div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                            <!-- Submit Button-->
                            <button  type="submit" name="send" class="btn btn-light btn-xl">Envoyer</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <!-- 
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localisation</h4>
                        <p class="lead mb-0">
                            19 rue Clémenceau
                            <br />
                            54660 MOUTIERS
                        </p>
                    </div> -->
                    <!-- Footer Social Icons-->
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Restons en contact :)</h4>
                        <!-- Ajouter Gitlab -->
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://fr.linkedin.com/in/ana%C3%AFs-lhomme"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://github.com/Zwui"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Anaïs Lhomme 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tendances Végétales</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/tendances_vegetales.png" alt="Site Tendances végétales" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Majeur projet de ma formation: Le site pour le magasin Tendances Végétales de Metz. Réalisé durant mon stage d'un mois et demi. Le site devait être à l'image de la boutique, y présenter son magasin et ses produits de créateurs. Réalisé en HTML/CSS, JS, PHP et SQL. Completement responsive, avec un backoffice pour la gestion de la BDD.</p>
                                    <!-- <a class="custom-link" target="blank" href="https://anaislhomme.com/tendances_vegetales/index.php">
                                        <p>A visiter ici</p>
                                    </a> -->
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Site e-commerce</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Chicoboros.png" alt="Site E-commerce" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Dernier projet de formation: le site e-commerce avec panier et favoris. Il a été réalisé en HTML/CSS, JS, PHP et SQL. La gestion de la BDD est effectué via PHPMyAdmin.</p>
                                    <!-- <a class="custom-link" target="blank" href="../chicoboros/Chicoboros/index.php">
                                        <p>A visiter ici</p>
                                    </a> -->
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Snake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/snake.png" alt="snake" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Exercice tout en Javscript: le snake. La remise à ma façon du célèbre jeu sur 3310! </p>
                                    <a class="custom-link" target="blank" href="../Snake/index.html">
                                        <p>Jouez ici!</p>
                                    </a>
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Glossaire</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/glossaire.png" alt="glossaire" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Petit exercice d'introduction à la base de donnée et à Bootstrap: Le glossaire.</p>
                                    <a class="custom-link" target="blank" href="../tests/Exo_BDD/index.php">
                                        <p>A visiter ici</p>
                                    </a>
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Faire projet!</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/chat.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <a class="custom-link" target="blank" href="">
                                        <p>A visiter ici</p>
                                    </a>
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Maquette</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/playing.png" alt="maquette playing cards" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Maquette réalisée sur Adobe XD d'un site e-commerce de jeux de société.</p>
                                    <a class="custom-link" target="blank" href="">
                                        <p>Simulation ici</p>
                                    </a>
                                    
                                    <button class="btn btn-green" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
