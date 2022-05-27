<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    session_start();?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Syro-Malabar Youth Movement</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script language="javascript" type="text/javascript" >
        window.history.forward();
    </script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>SMYM</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>



                    </li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="forane.php">Forane</a></li>
                    <li><a class="nav-link scrollto" href="parishsample.php">Parish</a></li>
                    <li class="dropdown"><a href="#recent-blog-posts"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                    
                    <ul>
                <li><a href="payment.php">Donations</a></li>
                <?php      
                    $username = "root";
                    $servername = "localhost";
                    $password = "";
                    $db = "smymdb";
                    $con = mysqli_connect($servername, $username, $password, $db); 
                    $id=$_SESSION['userid'];
                    $sql="SELECT * from registration where id='$id'";
                    $res = mysqli_query($con, $sql) or die (mysqli_error($con));
                    $build = mysqli_fetch_array($res);
                    if($build['donate']=="yes"){
                ?>
                            <li><a href="bbdms/index.php">Blood Bank</a></li>
                        <?php } ?>
                <li><a href="parishevents.php">Parish Events</a></li>
                <li><a href="foraneevents.php">Forane Events</a></li>
                </ul>
                </li>
                <li><a class="nav-link scrollto" href="makepdf2.php">ID</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    
                    <li class="dropdown"><a href="#"><?php echo $_SESSION['fname'];?>  <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="notification.php">Notification</a></li>
                            <li><a href="requeststatus.php">Request Status</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Syro Malabar Youth Movement</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Syro Malabar church is blessed with youth. There are more than 14 lakhs of youth in ..</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/jesus.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <p>Syro Malabr Youth Movement(SMYM) is the official youth movement of the Syro Malabar Chruch. SMC has more than 1.6 millon catholic youth scattered all over the world. Although we have been working hand in hand with movements like ICYM in the past years, we had always longed for a youth movements for our Mother Chruch. The Laity Commision of the Syro Malabarf Chruch took up the initiatives in 2011 to coordinate the different youth movements in our chruch and to bring our youth together.Efforts were continued for many years and as an outcome, we now have the Syro Malabar Youth Movement (SMYM), with the approval of the Synod of Bishops. This official Youth Movement of the Syro Malabar Church, officially commenced on the 30th day of August 2014. The Syro Malabar Youth Commission was also constituted in the first session of the Synod of Bishops, 2015.
                            </p>


                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <p>
                        The SMYM is in its infancy, but is flourishing with a decisive presence in all the 29 dioceses and four major mission centers of the Syro Malabar Church in India and abroad. The SMYM champions and lives out its mission to follow the tradition and beliefs of the Syro Malabar Church for the Kingdom of God and Society, to strive for the integral development of the youth and to bind together the youth of the SMC. SMYM has started out with various programmes and activities for the holistic development of youth aligning its members with the religious and social causes of the Church. Some of the programmes designed by the SMYM are as follows: Nurturing families living in the railway colonies and slums in different parts of India. Leadership formation and trainings for future leaders of the church. Helping the youth with continuous guidance and support on faith formation. Active promotion of the life, values and church teachings using the social media. Support and guidance for the professional development of the youth.
                        </p>
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->






        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Portfolio</h2>
                    <p>Check our latest work</p>
                </header>


                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-38-55.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/photo_2021-12-06_11-38-55.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-39-34.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/photo_2021-12-06_11-39-34.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-39-39.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/photo_2021-12-06_11-39-39.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" ><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-39-48.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/photo_2021-12-06_11-39-48.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-39-43.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/photo_2021-12-06_11-39-43.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/photo_2021-12-06_11-39-51.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enlarge</h4>

                                <div class="portfolio-links">
                                    <a href="asset/img/portfolio/photo_2021-12-06_11-39-51.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Portfolio Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our Team</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team_1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pope Francis</h4>
                                <span>Head of the Catholic Church</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team_2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Mar George Alenchery</h4>
                                <span>Major Archbishop of the Syro-Malabar Church</span>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team_3.jpg" class="img-fluid" alt="">
                                <div class="social">

                                    <a href=><i class="bi bi-facebook"></i></a>
                                    <a href=><i class="bi bi-instagram"></i></a>

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Mar Jose Pulickal</h4>
                                <span>Bishop of kanjirappally</span>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team_4.jpg" class="img-fluid" alt="">
                                <div class="social">

                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Rev.Fr.Varghese Kochupurackal</h4>
                                <span>Director</span>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Team Section -->



        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Events</h2>
                    <p>Recent Events</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog_1.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Sun, August 15</span>
                            <h3 class="post-title">Civil Station Cleaning</h3>
                            <a href="event_registration.php" class="readmore stretched-link mt-auto"><span>Register</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog_2.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Fri, August 28</span>
                            <h3 class="post-title">Covid Task Force at Mar SLeeva Chruch Chellarcovil</h3>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog_3.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Mon, August 22</span>
                            <h3 class="post-title">ELROI Convention at St Mary's Chruch Elangulam</h3>

                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>SMYM <br>SYRO MALABAR YOUTH MOVEMENT <br>PASTORAL CENTER<br>PIN: 686505</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+91 9961430120<br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>smymkanjirappallydiocese@gmail.com <br><br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>SMYM</span>
                        </a>
                        <p>SMYM Kanjirappally Rupatha</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>

                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#recent-blog-posts">Events</a></li>

                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                           Pastoral Center<br> Kanjirappally<br>Kottayam <br><br>
                            <strong>Phone:</strong> +91 9961430120<br>
                            <strong>Email:</strong> smymkanjirappallydiocese@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SMYM KPLY</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->

            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
