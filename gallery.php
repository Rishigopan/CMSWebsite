<?php include './MAIN/Dbconfig.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUV- Projects</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span class="pe-2">Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/people/BUV-Chemicals-Adhesives/100076154022812/?paipv=0&eav=AfaJyxVLqpAqtuMP0V8bzuOXc-i8AGlZhp99TpDu9lzUA_I4xhNq4J9OI1qjd94f2Os&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/buvchemicals/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="https://www.youtube.com/watch?v=MxGILzo-0F8"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <a class="fs-5 fw-bold" href="tel:+917034311555">+91 7034311555</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top pb-0 px-lg-5 pt-1">
        <a href="index.html" class="navbar-brand">
            <img src="img/buv-logo.png" alt="" class="img-fluid d-lg-none" style="width: 135px; height: 75px;">
            <!-- <h1 class="navbar-head m-0 d-none d-md-flex wow fadeInDown d-none d-lg-none d-xl-flex fs-2">BUV CHEMICALS & ADHESIVES</h1>
            <h1 class="navbar-head m-0 d-none d-md-flex wow fadeInDown d-none d-md-none d-lg-flex d-xl-none fs-2">BUV CHEMICALS</h1> -->
        </a>
        <button type="button" class="navbar-toggler me-2 border-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav mx-auto py-2 px-4 p-lg-0">

                <a href="index.html" class="nav-item nav-link mx-3">Home</a>
                <a href="about.html" class="nav-item nav-link mx-3">About</a>
                <a href="products.html" class="nav-item nav-link mx-3">Products</a>
                <img src="img/buv-logo.png" alt="" class="img-fluid d-none d-md-flex mx-5" style="width: 150px; height: 75px;">
                <!-- <a href="gallery.php" class="nav-item nav-link text-end mx-3">Gallery</a> -->
                <!-- <a href="services.html" class="nav-item nav-link">Services</a> -->

                <div class="nav-item dropdown mx-3">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu m-0 px-1 border-0">
                        <a href="gallery.php" class="dropdown-item">Projects</a>
                        <a href="videofinal.php" class="dropdown-item text-end">Product Presentation</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link mx-3">Contact</a>
                <div class="text-end mt-3 mb-4 mt-lg-4 mx-3">
                    <a href="login.php" class="px-4 py-1 navloginBtn">Login</a>
                </div>
            </div>
            <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> -->
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header3 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <h1 class="display-3 text-white animated slideInRight">Projects</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid galleryBg px-0" id="gallery">
        <!-- <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 text-dark mb-5">See Our Gallery</h1>
        </div> -->


        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <?php
            $ImageName = 1;
            $FetchImages = mysqli_query($con, "SELECT * FROM item_master");
            foreach ($FetchImages as $FetchImageResults) {
            ?>
                <a class="project-item" href="">
                    <img class="img-fluid" src="./IMAGES/<?= $FetchImageResults['item_image'] ?>" alt="">
                    <!-- <img src="./IMAGES/<?= $FetchImageResults['item_image'] ?>" class="img-fluid" alt=""> -->
                    <div class="project-title">
                        <h5 class="text-primary mb-0"><?php echo ''; ?></h5>
                    </div>
                </a>

            <?php
                $ImageName++;
            }
            ?>
            <!-- <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 2</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 3</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 4</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 5</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-9.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 6</h5>
                </div>
            </a> -->
        </div>


    </div>
    <!-- Gallery End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <!-- <h4 class="text-white mb-4">Our Address</h4> -->
                    <img src="img/buv-logo.png" alt="" class="img-fluid" style="width: 150px; height: 80px;">
                    <h5 class="mb-3 text-white fs-5">BUV Chemicals and Adhesives</h5>
                    <p class="mb-2 text-white">Kannur, Newbustand, First floor,near Sheen bakery, Thavakkara, Kerala-670001</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-1"></i>+91 7034311555, +91 75949 21555</p>
                    <p class="mb-2"><i class="fa fa-envelope me-2"></i>info@buvchemicals.com</p>
                    <div class="d-flex pt-3">
                        <!-- <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a> -->
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.facebook.com/people/BUV-Chemicals-Adhesives/100076154022812/?paipv=0&eav=AfaJyxVLqpAqtuMP0V8bzuOXc-i8AGlZhp99TpDu9lzUA_I4xhNq4J9OI1qjd94f2Os&_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.instagram.com/buvchemicals/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.youtube.com/@bbstotalhomesolution4342/videos"><i class="fab fa-youtube"></i></a>
                        <!-- <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="products.html">Products</a>
                    <a class="btn btn-link" href="gallery.php">Projects</a>
                    <!-- <a class="btn btn-link" href="gallery.php">Product Presentation</a> -->
                    <a class="btn btn-link" href="contact.html">Contact</a>
                    <!-- <a class="btn btn-link" href="">Support</a> -->
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Saturday</p>
                    <h6 class="text-light">09:00 am - 07:30 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                    <!-- <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6> -->
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="text-white mb-4">Branches</h4>
                        </div>
                        <div class="instagram-gellay">
                            <ul class="insta-feed">
                                <li>
                                    <a href="" class="text-white">Palakkad</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Punnachery</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Nadapuram</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Kannur</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Koothuparambu</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Kallikandy</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Panoor Arayakool</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Mahi (Chokli)</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Peravoor</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Payangadi</a>
                                </li>
                                <li>
                                    <a href="" class="text-white">Mattannur, Irikkur Road.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">BUV CHEMICALS</a>, All Right Reserved.
            </p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Designed By <a class="fw-semi-bold" href="http://techstas.com/">Techstas Info Solutions</a> </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <a href="tel:+917034311555" class="btn btn-lg btn-primary btn-lg-square btnToptoBtm"><i class="ri-phone-line"></i></a>
    <a href="https://wa.me/+917594921555/?text=hello" target="_blank" class="btn btn-lg btn-primary btn-lg-square btnToptoBtm2"><i class="ri-whatsapp-line"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>