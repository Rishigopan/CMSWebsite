<?php require_once './MAIN/Dbconfig.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUV CHEMICALS & ADHESIVES</title>
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css?ver=4.0" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
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
            <a href="index.html" class="logo d-lg-none me-auto"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <!-- <li><a href="#portfolio">Gallery</a></li>
                <li><a href="#team">Team</a></li> -->
                    <a href="index.html" class="logo d-none d-lg-block"><img src="./img/buv-logo.png" alt="" class="img-fluid"></a>
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


    <!-- Carousel Start -->
    <!-- <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Carousel1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 text-end">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight carouselText1 pt-5">GET THE BEST <br>WATERPROOFING SOLUTION</h1>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Carousel2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 text-end pt-5">             
                                    <h1 class="display-1 text-white mb-5 animated slideInRight carouselText2">The Waterproof <br>Expert</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <!-- Carousel End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn page-headers" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="" muted autoplay loop width="100%">
                        <source src="./img/web video1.mp4">
                    </video>
                    <!-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <h2 class="display-2 text-light mb-4 animated slideInDown">Best Desert Ride In Qatar
                                    </h2>
                                    <h5 class="text-primary text-uppercase mb-2">Al Rashidiya Quad Bikes</h5>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5 my-md-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <!-- <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-us-img-1.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-us-img-2.jpg">
                        </div> -->
                        <div class="col-12 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <video class="video-js" width="100%" controls preload="auto" id="my-video">
                                <source src="./img/BUVLogoVideo.mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <h3 class="fw-medium text-uppercase text-primary mb-2">About Us</h3> -->
                    <!-- <p class="fw-bold text-uppercase text-primary mb-2 fs-4">About Us</p> -->
                    <h4 class="display-5 mb-4 fs-2">THE LAST WORD FOR WATERPROOFING AND BONDING</h4>
                    <p class="mb-4">BUV(British Universal Vision) Chemicals And Adhesives is one of the leading Importers of water proofing & construction chemicals company in Kerala.
                    </p>
                    <p class="">We are into Waterproofing and Construction industry since 2021</p>
                    <div class="mt-5">
                        <a class="readMoreBtn px-4 text-white" href="about.html">Read More <i class="ri-arrow-right-s-fill"></i><i class="ri-arrow-right-s-fill"></i></a>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">25</h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Power & Energy</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Civil Engineering</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Chemical Engineering</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Mechanical Engineering</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Oil & Gas Engineering</p>
                        </div>
                    </div> -->
                    <!-- <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">info@example.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Call us</p>
                                    <h5 class="mb-0">+012 345 6789</h5>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <!-- <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->


    <!-- ======= Facts Section ======= -->
    <section id="fixedBg" class="fixedBg">
        <div class="container">

            <div class="row gy-4 wow zoomIn">

                <div class="col-12 my-2">
                    <div class="my-lg-5 mx-5">
                        <h2 class="text-white text-center fs-2 mb-0 mt-4">We Deal With All Kinds of Construction Chemicals and Adhesives Including All Water Proofing Materials, Tile Gums, Emulsions, Primers etc.</h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Facts Section -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/founderImg.jpg" alt="">
                        <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/MxGILzo-0F8" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p> -->
                    <h2 class="display-5 mb-5 fs-1 text-center">BRITISH UNIVERSAL VISION</h2>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p> -->
                    <div class="row gy-4">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!-- <h4>BINOY BALAKRISHNAN</h4> -->
                                    <span class="fs-5">BUV chemicals and adhesives is a partnership company founded by three friends who were willing to take the challenges in the construction industry. The name BUV is derived from the first letter of its partners name which shows their unity and dedication towards the business industry.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <!-- <h4>UDAYAN A.P</h4> -->
                                    <span class="fs-5 pb-4 fw-bold">Our Sister Concerns :-</span> <br><br>
                                    <p class="fs-4"><i class="ri-arrow-right-s-fill"></i> Skywings Builders <br></p>
                                    <p class="fs-4"><i class="ri-arrow-right-s-fill"></i> Greenleaf Home Decor <br></p>
                                    <p class="fs-4"><i class="ri-arrow-right-s-fill"></i> Buildcare Fix <span class="spanFirst">Waterproofing</span> <span class="spanSecond">Solutions</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Projects Start -->
    <!-- <div class="container-xxl py-5" id="products">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Products</h1>
            </div>
            
            <div class="row g-4 portfolio-container">
                <div class="col-lg-3 col-md-6 product-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/1.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/2.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/3.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/3.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/4.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/4.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/Product6.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/Product6.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/Product3.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/Product3.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/Product4.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/Product4.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 product-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/Product5.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/Product5.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4 text-center">
                            <a class="btn btn-light rounded-pill" href="">Read More</a>
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Projects End -->


    <!-- Products Start -->
    <div class="container-xxl py-5" id="products">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-5 mb-5">Our Products</h2>
                <!-- <h1 class="display-5 mb-4">We Provide The Best Waterproofing Services</h1> -->
            </div>
            <div class="row gy-5 gx-4">
                <?php


                    $ListProducts = mysqli_query($con, "SELECT *,products.id AS PID FROM products INNER JOIN producttable ON products.id = producttable.imageId WHERE activeStatus='YES' ORDER BY products.id ASC LIMIT 4");
                    foreach ($ListProducts as $ListProductsResult) {
                        ?>

                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid" src="./THUMBNAILS/PRODUCTS/<?php echo $ListProductsResult['imageName'] ?>" alt="">
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">
                                        <?= $ListProductsResult['title'] ?>
                                    </h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                </div>
                            </div>
                            <div class="text-center pt-2 pb-5">
                                <h5 class="mb-0">
                                    <?= $ListProductsResult['title'] ?>
                                </h5>
                            </div>
                            <a class="btn btn-light border" href="ProductDetail.php?PId=<?= $ListProductsResult["PID"]; ?>">Read More</a>
                        </div>
                    </div>

                    <?php
                    }

                ?>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <div class="container">
        <div class="text-end">
            <a href="products.html" class="text-dark pe-5 fs-5">View More <i class="ri-arrow-right-s-fill"></i><i class="ri-arrow-right-s-fill"></i></a>
        </div>
    </div>


    <!-- Gallery Start -->
    <!-- <div class="container-fluid galleryBg pt-1 my-5 px-0" id="gallery">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 text-dark mb-5">See Our Gallery</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="img/gallery-img-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Image 1</h5>
                </div>
            </a>
            <a class="project-item" href="">
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
            </a>
        </div>
    </div> -->
    <!-- Gallery End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Branches</p>
                <h1 class="display-5 mb-5">See Our Branches</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Rob Miller</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Adam Crew</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-bold text-uppercase text-primary mb-2 fs-4">Testimonial</p>
            <h2 class="display-5 mb-5">WHAT OUR HAPPY CLIENTS SAY!!!</h2>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonials/testimonial-man.png" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Aditya Arun</h4>
                        
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    We're highly satisfied with the product and service.
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonials/testimonial-man.png" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Aashik S R</h4>
                        
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Excellent product, timely completion and great customer service. I'm so much impressed by their work.
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonials/testimonial-women.png" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Ananya Sidharth</h4>
                        
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    They makes sure everything is delivered as promised. Thank you so much buv for the promising service.
                </div>
            </div>
        </div>
    </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials pt-5">

        <div id="carouselExampleIndicators" class="carousel slide mx-2" data-bs-ride="true">
            <div class="carousel-indicators d-none d-md-flex">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active dotButton" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="dotButton" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="dotButton" aria-label="Slide 3"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="dotButton" aria-label="Slide 4"></button> -->
            </div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="fw-bold text-uppercase text-primary mb-2 mt-5 fs-4">Testimonial</p> -->
                <h2 class="display-5 mb-3 text-white pt-4">What Our Happy Clients Say !!!</h2>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="p-3 testContain text-center">
                        <img src="img/testimonials/testimonial-man.png" alt="" style="width: 70px; height: 70px;">
                        <h3 class="testHead">Aditya Arun</h3>
                        <div class="testIcon">
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                        </div>
                        <p class="testPara text-white"><i class="ri-double-quotes-l quoteStyle"></i>We're highly satisfied with the product and service.
                            <i class="ri-double-quotes-r quoteStyle"></i></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="container p-3 testContain text-center">
                        <img src="img/testimonials/testimonial-man.png" alt="" style="width: 70px; height: 70px;">
                        <h3 class="testHead">Aashik S R</h3>
                        <div class="testIcon">
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                        </div>
                        <p class="testPara text-white"><i class="ri-double-quotes-l quoteStyle"></i>Excellent product, timely completion and great customer service. I'm so much impressed by their work.<i class="ri-double-quotes-r quoteStyle"></i></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="container  p-3 testContain text-center">
                        <img src="img/testimonials/testimonial-women.png" alt="" style="width: 70px; height: 70px;">
                        <h3 class="testHead">Ananya Sidharth</h3>
                        <div class="testIcon">
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                            <i class="ri-star-s-fill"></i>
                        </div>
                        <p class="testPara text-white"><i class="ri-double-quotes-l quoteStyle"></i>They makes sure everything is delivered as promised. Thank you so much buv for the promising service.<i class="ri-double-quotes-r quoteStyle"></i></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
        </div>
    </section>
    <!-- ======= Testimonials Section ======= -->


    <!-- BUV Outlets Start -->
    <div class="container-xxl py-5 d-none">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-5 mb-5">BUV Outlets</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i> -->
                            <h5 class="mb-3">PUNNACHERI</h5>
                            <p>BUV Master Counter, KSTP Highway, Payanagdi, Thavam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-globe text-primary mb-4"></i> -->
                            <h5 class="mb-3">KANNUR</h5>
                            <p>Green Leaf Home Decor, Near Sheen Bakery, New Bus Stand, Kannur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-home text-primary mb-4"></i> -->
                            <h5 class="mb-3">CHERUKUNNU</h5>
                            <p>Bini Traders, Near Kannapuram Police station, Cherukunnu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">PALAKKAD</h5>
                            <p>Das Capital, Harisree Complex, Kappilapara, Mundoor, Palakkad </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">MAHE</h5>
                            <p>Mahima Construction, Mahe, Chokli</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">PANOOR</h5>
                            <p>Ansi Tradelink, Near Chothavoor HSS, Arayakool, Champad</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">NADAPURAM</h5>
                            <p>Meta Material</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="outlet-item text-center pt-3 h-100">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">MATTANNUR</h5>
                            <p>Floor Tech Solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="outlet-item text-center pt-3">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">PERAVOOR</h5>
                            <p>Floor Tech Solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="outlet-item text-center pt-3">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">KALLIKANDY</h5>
                            <p>Ozone Water Proofing Solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="outlet-item text-center pt-3">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">ANJARAKANDY</h5>
                            <p>Builders Pathiriyadu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="outlet-item text-center pt-3">
                        <div class="p-4">
                            <!-- <i class="fa fa-3x fa-book-open text-primary mb-4"></i> -->
                            <h5 class="mb-3">KATHIROOR</h5>
                            <p class="fs-small">Verizon, Coorg Road, Kathiroor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUV Outlets End -->


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
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.facebook.com/people/BUV-Chemicals-Adhesives/100076154022812/?paipv=0&eav=AfaJyxVLqpAqtuMP0V8bzuOXc-i8AGlZhp99TpDu9lzUA_I4xhNq4J9OI1qjd94f2Os&_rdr"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.instagram.com/buvchemicals/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2 footerLinks" href="https://www.youtube.com/@bbstotalhomesolution4342/videos"><i
                                class="fab fa-youtube"></i></a>
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
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="products.php">Products</a>
                    <a class="btn btn-link" href="ImageGallery.php">Projects</a>
                    <!-- <a class="btn btn-link" href="gallery.php">Product Presentation</a> -->
                    <a class="btn btn-link" href="contact.html">Contact</a>
                    <!-- <a class="btn btn-link" href="">Support</a> -->
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <a href="tel:+917034311555" class="btn btn-lg btn-primary btn-lg-square btnToptoBtm"><i
                class="ri-phone-line"></i></a>
    <a href="https://wa.me/+917594921555/?text=hello" target="_blank" class="btn btn-lg btn-primary btn-lg-square btnToptoBtm2"><i class="ri-whatsapp-line"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
    <script>
        var player = videojs('my-video', {
            fluid: true,
            poster: "img/videobackround.png",
        })
    </script>
</body>

</html>