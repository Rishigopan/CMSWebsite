<?php

include './MAIN/Dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BUV - Other Videos</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css"> -->

    <!-- Icon Font Stylesheet -->
    <link href="lib/icofont/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200&family=Italiana&family=Josefin+Sans&family=Nova+Round&family=Rosarivo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?ver=4.0" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="./assets/js/jquery.hoverplay.min.js"></script>
  <script type="text/javascript" src="./assets/js/jquery.hoverplay.js"></script> -->

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="./dist/magnific-popup.css">

    <style>
        #gallery .Folder {
            border-radius: 5px;
            background-color: none;
            border: 1px solid black;
        }

        #gallery .VideoClientSideRow .VideoCientSide {
            background-color: red;
            position: relative;
        }

        #gallery .VideoClientSideRow .videoOverlay {
            background-color: transparent;
            position: absolute;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #gallery .VideoClientSideRow .videoOverlay img {
            height: 70px;
            width: 70px;
        }
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top bg-white">
        <div class="container d-flex align-items-center justify-content-center">
            <a href="index.php" class="logo d-lg-none me-auto"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <!-- <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#team">Team</a></li> -->
                    <a href="index.php" class="logo d-none d-lg-block"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
                    <li class="drop-down active"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="ImageGallery.php">Projects</a></li>
                            <li class="drop-down"><a href="#">Presentations</a>
                                <ul>
                                    <li><a href="./VideoProjects.php">Projects Presentation</a></li>
                                    <li class="active"><a href="./VideoMaterials.php">Material Presentation</a></li>
                                    <li><a href="./VideoGalleryOthers.php">Others</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li> -->
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="d-lg-none"><a href="login.php">Login</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="login.php" class="get-started-btn scrollto d-none d-lg-flex">Login</a>

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- Page Header Start -->
        <!-- <div class="container-fluid page-header5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2">
            <h1 class="display-3 text-white animated slideInRight">Others</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   
                    <li class="breadcrumb-item active" aria-current="page">Others</li>
                </ol>
            </nav>
        </div>
    </div> -->

        <div class="page-headers">
            <div class="nave-view">
                <ol class="breadcrumb animated slideInRight  mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Material Presentation</li>
                </ol>
            </div>
            <div class="page-header-image">
                <img class="img-fluid" src="./img/ProductsMainBg.jpg" alt="">

            </div>
        </div>
        <!-- Page Header End -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-6 mb-3 px-lg-5">
                        <a href="VideoMaterialDetails.php?MID=1">
                            <div class="card-body Folder">
                                <img src="./img/folder.jpg" class="img-fluid">
                                <h6 class="text-center">BUV 4 Layer Water Proofing</h6>
                            </div>
                        </a>
                    </div> -->

                    <?php

                    $ListFolders = mysqli_query($con, "SELECT id,folderName FROM folder_table WHERE categoryId = 1");
                    foreach ($ListFolders as $ListFoldersResults) {
                        echo '
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6 mb-3">
                                <a href="VideoSubFolders.php?CID=1&FID=' . $ListFoldersResults["id"] . '&SFID=">
                                    <div class="card-body Folder">
                                        <img src="./img/folder.jpg" class="img-fluid">
                                        <h6 class="text-center">' . $ListFoldersResults["folderName"] . '</h6>
                                    </div>
                                </a>
                            </div>';
                    }


                    ?>
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-6 mb-3 px-lg-5">
                        <a href="VideoMaterialDetails.php?MID=2">
                            <div class="card-body Folder">
                                <img src="./img/folder.jpg" class="img-fluid">
                                <h6 class="text-center">BUV Tile Adhesives</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6 mb-3 px-lg-5">
                        <a href="VideoMaterialDetails.php?MID=4">
                            <div class="card-body Folder">
                                <img src="./img/folder.jpg" class="img-fluid">
                                <h6 class="text-center">BUV Waterproofing Material</h6>
                            </div>
                        </a>
                    </div> -->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-6 mb-3 px-lg-5">
                        <a href="VideoMaterialDetails.php?MID=3">
                            <div class="card-body Folder">
                                <img src="./img/folder.jpg" class="img-fluid">
                                <h6 class="text-center">BUV App Mineral Membrane Water Proofing</h6>
                            </div>
                        </a>
                    </div> -->

                </div>

                <div class="row VideoClientSideRow mt-4">
                    <?php
                    $FetchVideos = mysqli_query($con, "SELECT * FROM video_table WHERE videoCategory = 1 AND videoFolder = 0 AND videoSubFolder = 0");
                    foreach ($FetchVideos as $FetchVideoResults) {
                        echo '<div class="col-xl-3 col-lg-3 col-12 mb-4">
                                <a class="VideoCientSide" href="VideoPlay.php?ID=' . $FetchVideoResults["videoId"] . '&VCat=1&VFol=0&VSFol=0">
                                    <img class="img-fluid ThumbnailImage" src="./THUMBNAILS/' . $FetchVideoResults["videoThumbnail"] . '" alt="event">
                                    <div class="videoOverlay"> <img src="img/play.png"> </div>
                                </a>
                                <h6 class="mt-3 ps-3"> ' . $FetchVideoResults['videoHeader'] . ' </h6>
                                <p class="mt-2 ps-3">' . substr($FetchVideoResults['videoDescription'], 0, 25) . ' .....</p>
                            </div>';
                    }
                    ?>
                </div>




            </div>
        </section><!-- End Gallery Section -->
    </main><!-- End #main -->

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
                    <a class="btn btn-link" href="products.php">Products</a>
                    <a class="btn btn-link" href="ImageGallery.php">Projects</a>
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
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="index.html">BUV CHEMICALS</a>, All Right Reserved.
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

    <script>

    </script>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="./dist/jquery.magnific-popup.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>