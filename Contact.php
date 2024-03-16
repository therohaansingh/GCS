<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gwalior Cambridge School</title>

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/Style.css" rel="stylesheet">

</head>
    
<body id="section_1">
    <header class="site-header">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Deen Dayal Nagar, Gwalior, (M.P.)
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:gwaliorcambridgeschool@gmail.com">
                            gwaliorcambridgeschool@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">

                        <!-- Facebook Page -->
                        <li class="social-icon-item">
                            <a href="https://www.facebook.com/GwaliorCambridgeSchool" class="social-icon-link bi-facebook"></a>
                        </li>

                        <!-- Instagram Page -->
                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/gwaliorcambridgeschool/" class="social-icon-link bi-instagram"></a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity"> -->
                    <span>
                        Gwalior Cambridge School
                        <!-- <small>Non-profit Organization</small> -->
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-link">
                            <a class="nav-link " href="index.html">Home</a>
                        </li>
                        <li class="nav-link">
                            <a class="nav-link" href="About.html">About</a>
                        </li>

                        <li class="nav-link" >
                            <a class="nav-link active" href="Contact.php">Contact Us</a>
                        </li>

                        <li class="nav-link">
                            <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Let's Learn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="donate-section">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form contact-form" action="" method="post" role="form">
                                <h2>Contact form</h2>

                                <p class="mb-4">Or, you can just send an email:
                                    <small><a href="#">gwaliorcambridgeschool@gmail.com</a></small>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="first" id="first-name" class="form-control" placeholder="first-name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="last" id="last-name" class="form-control" placeholder="last-name" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="gwaliorcambridgeschool@gmail.com" required>

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" name="send" class="form-control">Send Message</button>
                            </form>
                        </div>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
require 'PHPMailer\Exception.php';




if(isset($_POST['send']))
{
    $last = $_POST['last'];
    $first = $_POST['first'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gwaliorcambridgeschool@gmail.com';                     //SMTP username
    $mail->Password   = 'ojnklhjcqzljlxkx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to

    //Recipients
    $mail->setFrom('gwaliorcambridgeschool@gmail.com', 'Mailer');
    $mail->addAddress('rhn.sin01@gmail.com', 'Test User');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Website Contact form';
    $mail->Body    = "sender Name - $first $last <br/> Sender - $email <br/> message - $message";

    $mail->send();
    echo "<div class='custom-form contact-form'>Message Sent!</div>";
} catch (Exception $e) {
   // echo "<div class='custom-form contact-form'>Message could not Send!</div>";
}
}
?>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4">
                        <a class="navbar-brand" href="index.html">
                            <span>
                                Gwalior Cambridge School
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                            <!-- <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li> -->

                            <!-- <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li> -->

                            <!-- <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>
                            <a href="tel: 120-240-9600" class="site-footer-link">
                                +91-992-660-4010
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>
                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                gwaliorcambridgeschool@gmail.com
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            Deen Dayal Nagar, Airport Road, Gwalior,(M.P.)
                        </p>

                        <a href="https://maps.app.goo.gl/rNeNe8Qdb84TFnRJ6" target="_blank" class="custom-btn btn mt-3" onclick="getDirections()">Get Direction</a>

                        <script>
                            function getDirections() {
                                // Check if Geolocation is supported
                                if (navigator.geolocation) {
                                    // Get the user's current position
                                    navigator.geolocation.getCurrentPosition(function(position) {
                                        var latitude = position.coords.latitude;
                                        var longitude = position.coords.longitude;
                    
                                        // Set the destination name and coordinates
                                        var destinationName = "Gwalior Cambridge School";
                                        var destinationLatitude = "26.26438571348686";
                                        var destinationLongitude = "78.21306341944346";
                    
                                        // Create the Google Maps directions URL
                                        var directionsURL = "https://www.google.com/maps/dir/?api=1&destination=" + encodeURIComponent(destinationName) + "&destination_place_id=" + destinationLatitude + "," + destinationLongitude + "&origin=" + latitude + "," + longitude;
                    
                                        // Open a new tab or window with the directions URL
                                        window.open(directionsURL, '_blank');
                                    }, function(error) {
                                        // Handle errors, such as the user denying location access
                                        console.error('Error getting user location:', error.message);
                                    });
                                } else {
                                    // Geolocation is not supported
                                    alert('Geolocation is not supported by your browser.');
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2024 <a href="#">Rudra Consultancy.</a>
                        	Design: <a href="#" target="_blank">Rudra-IT</a></p>
                        </div>
                        
                        <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <!-- Facebook Page -->

                                <li class="social-icon-item">
                                    <a href="https://www.facebook.com/GwaliorCambridgeSchool" class="social-icon-link bi-facebook"></a>
                                </li>

                                <!-- Instagram Page -->

                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/gwaliorcambridgeschool/" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>