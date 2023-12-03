<?php require_once './MAIN/Dbconfig.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUV- Product Details</title>
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
    <link href="lib/icofont/icofont.min.css" rel="stylesheet">
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

    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="css/lg-thumbnail.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.es5.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.umd.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-autoplay.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-comments.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-fullscreen.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-medium-zoom.min.css">


    <style>
        #portfolio-flters {
            height: 500px;
            overflow: scroll;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        #portfolio-flters::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        #portfolio-flters {
            -ms-overflow-style: none;
           
            scrollbar-width: none;
            
        }

        @media only screen and (max-width:770px) {
            #portfolio-flters {
                display: flex;
                height: 120px;
                overflow-y: scroll !important;
              
            }
        }
    </style>


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


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top bg-white">
        <div class="container d-flex align-items-center justify-content-center">
            <a href="index.php" class="logo d-lg-none me-auto"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="active"><a href="products.php">Products</a></li>
                    <!-- <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#team">Team</a></li> -->
                    <a href="index.php" class="logo d-none d-lg-block"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
                    <li class="drop-down"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="ImageGallery.php">Projects</a></li>
                            <li class="drop-down"><a href="#">Presentations</a>
                                <ul>
                                    <li><a href="./VideoProjects.php">Projects Presentation</a></li>
                                    <li><a href="./VideoMaterials.php">Material Presentation</a></li>
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



    <!-- Page Header Start -->
    <div class="page-headers">
        <div class="nave-view">
            <ol class="breadcrumb animated slideInRight  mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </div>
        <div class="page-header-image">
            <img class="img-fluid" src="./img/ProductsMainBg.jpg" alt="">

        </div>
    </div>
    <!-- Page Header End -->

    <?php

    $ProductId = $_GET['PId'];

    ?>


    <!-- Products Start -->
    <div class="container-xxl py-5 productDetails">
        <div class="container">

            <?php
            $FindProductMainDetails = mysqli_query($con, "SELECT *,products.id AS PID FROM products INNER JOIN producttable ON products.id = producttable.imageId WHERE activeStatus='YES' AND products.id = '$ProductId'");
            foreach ($FindProductMainDetails as $FindProductMainDetailsResult) {
                $ProductName = $FindProductMainDetailsResult['title'];
                // $ProductName = $FindProductMainDetailsResult[''];
            }

            ?>


            <div class="row g-4">
                <div class="col-lg-4 col-md-4 wow slideInRight mt-0 first" data-wow-delay="0.1s">
                    <div class="product-item position-relative overflow-hidden p-5 pe-0">
                        <div class="bg-light text-center overflow-hidden">
                            <img class="img-fluid w-100" id="ViewBigImage" src="./THUMBNAILS/PRODUCTS/<?= $FindProductMainDetailsResult['imageName'] ?>">
                            <h5 class="p-4 text-secondary"><?= $ProductName ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 text-center slideInRight">
                    <div class="d-md-inline-block bg-dark-radial text-center">
                        <ul class="list-inline mb-0" id="portfolio-flters">

                            <?php

                            $FindOtherImages = mysqli_query($con, "SELECT * FROM producttable WHERE imageId = '$ProductId'");
                            foreach ($FindOtherImages as $FindOtherImagesResult) {
                                echo '<li class="btn listOutline bg-white p-2 active mx-2 mb-4">
                                        <img src="./THUMBNAILS/PRODUCTS/' . $FindOtherImagesResult['imageName'] . '" style="width: 80px; height: 60px;" onclick="ViewImage(this);">
                                      </li>';
                            }

                            ?>

                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item bg-light">
                        <div class="overflow-hidden position-relative overflow-hidden pe-0">
                            <img class="img-fluid" src="img/gp-bond-gold.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">BUV GP BOND GOLD</h5>
                            
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded px-4 py-3 mt-4 mt-md-0">
                        <h4><?= $ProductName ?></h4>
                        <!-- <p class="mb-0">High Performance polymer modified tile Adhesive</p> -->
                    </div>
                    <div class="ps-4">
                        <?php 
                        if( trim($FindProductMainDetailsResult['description']) != ''){
                            echo '
                            <h6 class="pt-4">DESCRIPTION</h6>
                            <p>'.nl2br($FindProductMainDetailsResult['description']).'</p>';
                        }else{

                        } 
                        ?>

                        <?php 
                        if( trim($FindProductMainDetailsResult['advantage']) != ''){
                            echo '
                            <h6>ADVANTAGES</h6>
                            <p class="mb-0">'.nl2br($FindProductMainDetailsResult['advantage']).'</p>';
                        }else{

                        } 
                        ?>
                       
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ps-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="pt-4">
                        <?php 
                        if( trim($FindProductMainDetailsResult['compliance']) != ''){
                            echo '
                            <h6>STANDARDS COMPLIANCE</h6>
                            <p>'.nl2br($FindProductMainDetailsResult['compliance']).'</p>';
                        }else{

                        } 
                        ?>
                    </div>
                    <div class="pt-4">
                        <?php 
                        if( trim($FindProductMainDetailsResult['instruction']) != ''){
                            echo '
                            <h6>INSTRUCTION FOR USE</h6>
                            <p>'.nl2br($FindProductMainDetailsResult['instruction']).'</p>';
                        }else{

                        } 
                        ?>
                        
                    </div>
                    <div class="">
                        <?php 
                        if( trim($FindProductMainDetailsResult['application']) != ''){
                            echo '
                            <h6>APPLICATION</h6>
                            <p>'.nl2br($FindProductMainDetailsResult['application']).'</p>';
                        }else{

                        } 
                        ?>
                       
                    </div>
                    <div class="">
                        <?php 
                        if( trim($FindProductMainDetailsResult['pacakge']) != ''){
                            echo '
                            <h6>PACKAGING & STORAGE</h6>
                            <p>'.nl2br($FindProductMainDetailsResult['pacakge']).'</p>';
                        }else{

                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <script src="js/lightgallery.umd.js"></script>
    <!-- lightgallery plugins -->
    <script src="js/plugins/lg-thumbnail.umd.js"></script>
    <script src="js/plugins/lg-zoom.umd.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
        function ViewImage(imgs) {
            var BigImage = document.getElementById("ViewBigImage");
            BigImage.src = imgs.src;
            // expandImg.parentElement.style.display = "block";
        }
    </script>



</body>

</html>