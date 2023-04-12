<!doctype html>
<html lang="Fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="logo" href="images/e-black-logo.ico" />

        <title>E-black | 🛒Vente d’articles et accessoires de mode.</title>
        

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/e-black.css" rel="stylesheet">
        
        
 
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="images/e-black-logo.ico" class="navbar-brand-image img-fluid" alt="e-black">
                        <span class="navbar-brand-text">
                            E-Black
                            <small>Vente d’articles et accessoires de mode.</small>
                        </span>
                    </a>

                     
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Acceuil</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">A propos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contacts</a>
                            </li>

                             
                        </ul>

                         
                    </div>
                </div>
            </nav>

             
 

            

            


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12">
                            <form action="traitement.php" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Contact E-BLACK</h2>
                                
                                <?php

// Connexion à la base de données
$host = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'e-black';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Validation des données
if (empty($name) || empty($email) || empty($message)) {
    die("Tous les champs sont obligatoires.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Adresse e-mail invalide.");
}

// Insertion des données dans la base de données
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Message envoyé avec succès $name.";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

?>



                                 
                            </form>

                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="contact-info mt-5">
                                <div class="contact-info-item">
                                    <div class="contact-info-body">
                                        <strong>Abidjan, Côte d'Ivoire</strong>

                                        <p class="mt-2 mb-1">
                                            <a href="tel: 014-155-4655" class="contact-link">
                                                (0225) 
                                                014-155-4655
                                            </a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="mailto:e-black@gmail.com" class="contact-link">
                                                e-black@gmail.com
                                            </a>
                                        </p>
                                    </div>

                                     
                                </div>

                                <img src="images/WorldMap.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.php">
                            <img src="images/e-black-logo.ico" class="navbar-brand-image img-fluid" alt="">
                            <span class="navbar-brand-text">
                                E-Black
                                <small>Vente d’articles et accessoires de mode.</small>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Rejoingnez nous via nos réseaux </h5>

                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Lundi-Ven</span>
                            8:00 - 22:00 
                        </p>

                        <p class="d-flex me-lg-3">
                            <span>Sam-Dim</span>
                            10:00 - 21:00 
                        </p>
                        <br>
                        <p class="copyright-text">Copyright © 2023 <strong>E-BLACK. Tous droits réservés.</strong></p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/eblack_1"  class="social-icon-link bi-instagram"></a>
                                </li>

                                

                                <li class="social-icon-item">
                                    <a href="https://wa.me/+2250141554655" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                            <p class="copyright-text">Design by: <a rel="nofollow" href="https://www.instagram.com/ymas777_/" target="_blank">Ymas⁷⁷⁷</a></p>
                            
                        </div>

                </div>
            </div>

            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(61 64 91)" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>


