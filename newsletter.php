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

             

              

             


            <section class="section-bg-image">
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="section-bg-image-block">
                                <h2 class="mb-lg-3">Newsletter</h2>

                                <p>Vous pouvez également vous abonner à la newsletter afin d'être avertis pour un nouvel article de disponible</p>

                                <form action="newsletter.php" method="post" class="custom-form mt-lg-4 mt-2" role="form">
                                <?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "e-black";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération de l'adresse e-mail
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Vérification si l'adresse e-mail existe déjà dans la base de données
$sql = "SELECT * FROM newsletter WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Vous êtes déjà abonné à notre newsletter.";
} else {
    // Insertion de l'adresse e-mail dans la base de données
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Merci de vous être abonné à notre newsletter.";

        // Envoi d'un e-mail de confirmation
        $to = $email;
        $subject = "Confirmation de l'abonnement à notre newsletter";
        $message = "Bonjour,\n\nMerci de vous être abonné à notre newsletter. Vous recevrez prochainement nos dernières actualités.\n\nCordialement,\nL'équipe E-BLACK";
        $headers = "From: webmaster@e-black.com" . "\r\n" .
                   "Reply-To: webmaster@e-black.com" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        mail($to, $subject, $message, $headers);
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>



                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgb(61 64 91)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgb(61 64 91)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgb(61 64 91)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgb(61 64 91)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgb(61 64 91)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
            </section>


            


   

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


