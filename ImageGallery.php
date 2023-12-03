<?php

include './MAIN/Dbconfig.php';
$TodayDate = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title>BUV- Contact</title>
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
    <link href="css/style.css?ver=4.0" rel="stylesheet">



    <!-- USING A CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <style>
        /* .page-header-image{
            height: 300px;
        }
        .page-header-image img{
            height: 300px;
            width: 100%;
        } */
        body {
            background-color: #F0F2F5;
        }

        .ImageCard {
            border-radius: 10px;
        }

        .ImageCard .card-body {
            height: 450px;
        }

        .ImageCard .card-header {
            border-radius: 10px 10px 0px 0px;
            background-color: white;
        }

        .ImageCard .card-footer {
            border-radius: 10px 10px 0px 0px;
            background-color: white;
            color: black;
        }

        .ImageCard .card-footer {
            border-radius: 0px 0px 10px 10px;
            background-color: white;
        }

        .ImageCard .card-header p {
            font-size: 14px;
            color: black;
        }

        .ImageCard .card-body .ImageSingle {
            height: 450px;
            object-fit: fill;
            width: 100%;
        }

        .ImageCard .card-body .ImageDouble {
            height: 450px;
            object-fit: fill;
            width: 100%;
        }

        .ImageCard .card-body .ImageTriple {
            height: 225px;
            object-fit: fill;
            width: 100%;
        }

        .ImageCard .card-body .ImageQuadruple {
            height: 225px;
            object-fit: fill;
            width: 100%;
        }

        .ImageCard .card-body .OtherImages {
            /* -webkit-filter: blur(1px);  */
            /* filter: blur(1px); */
            filter: brightness(50%);
        }

        .ImageCard .card-body .MoreIndicator {
            position: absolute;
            margin-top: -150px;
            margin-left: 100px;
            font-size: 50px;
            font-weight: 700;
            color: white;
        }

        @media only screen and (max-width:490px) {
            .ImageCard .card-body {
                height: 320px;
            }


            .ImageCard .card-body .ImageSingle {
                height: 320px;
                object-fit: fill;
                width: 100%;
            }

            .ImageCard .card-body .ImageDouble {
                height: 320px;
                object-fit: fill;
                width: 100%;
            }

            .ImageCard .card-body .ImageTriple {
                height: 160px;
                object-fit: fill;
                width: 100%;
            }

            .ImageCard .card-body .ImageQuadruple {
                height: 160px;
                object-fit: fill;
                width: 100%;
            }


            .ImageCard .card-body .MoreIndicator {
                position: absolute;
                margin-top: -130px;
                margin-left: 50px;
                font-size: 50px;
                font-weight: 700;
                color: white;
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
                            <li class="active"><a href="ImageGallery.php">Projects</a></li>
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
    <!-- <div class="nave-view">
        <ol class="breadcrumb animated slideInRight  mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
        </ol>
    </div>
    <div class="page-header-image nav-img">
        <img class="img-fluid" src="./img/ProductsMainBg.jpg" alt="">
    </div> -->
    <div class="container-fluid page-header1 page-header page-headers wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <!-- <h1 class="display-3 text-white animated slideInRight">About Us</h1> -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
            <h1 class="text-center text-white pagetitle"> THE LAST WORD FOR WATERPROOFING <br> AND BONDING </h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid">

            <div class="row mx-lg-5">

                <?php

                $FindImages = mysqli_query($con, "SELECT * FROM imagegallery");
                foreach ($FindImages as $FindImagesResult) {
                    $ImageId = $FindImagesResult['id'];
                    $ImageTitle = $FindImagesResult['imageTitle'];
                    $ImageDesc = $FindImagesResult['imageDesc'];
                    $ImageTime = $FindImagesResult['imageDate'];

                    $FindImageCount = mysqli_query($con, "SELECT COUNT(id) FROM imagetable WHERE imageId = '$ImageId'");
                    foreach ($FindImageCount as $FindImageCountResult) {
                        $ImageCount = $FindImageCountResult['COUNT(id)'];
                    }

                    $TimeDifference = $ImageTime;
                    $DateInDb  = new DateTime($ImageTime);
                    $Today = new DateTime($TodayDate);
                    $DateInterval = $DateInDb->diff($Today);
                    $Days = $DateInterval->days;

                ?>
                    <div class="col-lg-6 col-12 mb-5 px-lg-5">
                        <div class="ImageCard">
                            <div class="card-header">
                                <h6> <strong> <?= $ImageTitle ?> </strong> </h6>
                                <p class="m-0">
                                    <?= nl2br($ImageDesc) ?>
                                </p>
                            </div>
                            <div class="card-body p-0">
                                <?php

                                if ($ImageCount == 1) {
                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId'");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                        <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                            <img class="ImageSingle" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                        </a>';
                                    }
                                } elseif ($ImageCount == 2) {
                                    echo '<div class="row g-0">';
                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId'");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                            <div class="col-6">
                                                <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                                    <img class="ImageDouble" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                                </a>
                                            </div>
                                        ';
                                    }
                                    echo '</div>';
                                } elseif ($ImageCount == 3) {
                                    echo '<div class="row g-0">';
                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId' LIMIT 2 ");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                            <div class="col-6">
                                                <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                                    <img class="ImageQuadruple" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                                </a>
                                            </div>
                                        ';
                                    }

                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId' ORDER BY id DESC LIMIT 1 ");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                            <div class="col-12">
                                                <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                                    <img class="ImageQuadruple" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                                </a>
                                            </div>
                                        ';
                                    }
                                    echo '</div>';
                                } elseif ($ImageCount == 4) {
                                    echo '<div class="row g-0">';
                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId'");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                            <div class="col-6">
                                                <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                                    <img class="ImageQuadruple" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                                </a>
                                            </div>
                                        ';
                                    }
                                    echo '</div>';
                                } else {
                                    echo '<div class="row g-0">';
                                    $ImageExtra = 0;
                                    $RemainingImages = $ImageCount - 4;
                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId' LIMIT 4");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        $ImageExtra++;
                                ?>
                                        <div class="col-6">
                                            <a href="./THUMBNAILS/<?= $FindAllImagesResult["imageName"] ?>" class="glightbox" data-gallery="gallery<?= $ImageId ?>">
                                                <img class="ImageQuadruple <?php if ($ImageExtra == 4) {
                                                                                echo "OtherImages";
                                                                            }  ?>   " src="./THUMBNAILS/<?= $FindAllImagesResult["imageName"] ?>">
                                                <?php
                                                if ($ImageExtra == 4) {
                                                    echo '<div class="MoreIndicator"> + ' . $RemainingImages . '</div>';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                <?php

                                        //echo $ImageExtra;
                                    }

                                    $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId' LIMIT 100 OFFSET 4");
                                    foreach ($FindAllImages as $FindAllImagesResult) {
                                        echo '
                                            <div class="col-6 d-none">
                                                <a href="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                                    <img class="ImageQuadruple" src="./THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                                </a>
                                            </div>
                                        ';
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <div class="card-footer text-muted">
                                <?php

                                if ($Days == 0) {
                                    echo 'Today';
                                } else {
                                    echo  $Days . ' Days ago';
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>





                <!-- <div class="col-6 mb-5 pe-5">
                    <div class="card ImageCard">
                        <div class="card-header">
                            <h6> <strong> Title Name </strong> </h6>
                            <p class="m-0">
                                BUV Chemicals And Adhesives, New Counter Opening, Location-Mattanur,Irikkur Road. Call-7594921555/7034311555
                            </p>
                        </div>
                        <div class="card-body p-0">
                            <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery1">
                                <img class="ImageSingle" src="./THUMBNAILS/5_19302.png">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>



                <div class="col-6 mb-5 ps-5">
                    <div class="card ImageCard">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery2">
                                        <img class="ImageDouble" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_70325.png" class="glightbox" data-gallery="gallery2">
                                        <img class="ImageDouble" src="./THUMBNAILS/5_70325.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>



                <div class="col-6 mb-5 pe-5">
                    <div class="card ImageCard">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery3">
                                        <img class="ImageTriple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery3">
                                        <img class="ImageTriple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-12">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery3">
                                        <img class="ImageTriple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>




                <div class="col-6 mb-5 ps-5">
                    <div class="card ImageCard">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery4">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery4">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery4">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery4">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div> -->


                <!-- <div class="col-6 mb-5 ps-5">
                    <div class="card ImageCard">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple" src="./THUMBNAILS/5_19302.png">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="./THUMBNAILS/5_19302.png" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple OtherImages"  src="./THUMBNAILS/5_19302.png">
                                        <div class="MoreIndicator"> + 9</div>
                                    </a>
                                </div>

                                <div class="col-6 d-none">
                                    <a href="./THUMBNAILS/1_43813.jpg" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple"  src="./THUMBNAILS/1_43813.jpg">
                                    </a>
                                </div>
                                <div class="col-6 d-none">
                                    <a href="./THUMBNAILS/1_76220.jpg" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple"  src="./THUMBNAILS/1_76220.jpg">
                                    </a>
                                </div>
                                <div class="col-6 d-none">
                                    <a href="./THUMBNAILS/2_47348.jpg" class="glightbox" data-gallery="gallery8">
                                        <img class="ImageQuadruple"  src="./THUMBNAILS/2_47348.jpg">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </div>
    <!-- Contact End -->







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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>




    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });



        $(document)
    </script>




</body>

</html>