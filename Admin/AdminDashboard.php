<?php

include '../MAIN/Dbconfig.php';
$PageTitle = 'AddImage';


if (isset($_COOKIE['custtypecookie']) && isset($_COOKIE['custidcookie'])) {

    if ($_COOKIE['custtypecookie'] == 'SuperAdmin' || $_COOKIE['custtypecookie'] == 'Admin') {
    } else {
        header("location:../login.php");
    }
} else {

    header("location:../login.php");
}



?>

<!doctype html>
<html lang="en">

<head>


    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.css" integrity="sha512-C4k/QrN4udgZnXStNFS5osxdhVECWyhMsK1pnlk+LkC7yJGCqoYxW4mH3/ZXLweODyzolwdWSqmmadudSHMRLA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.js" integrity="sha512-LjPH94gotDTvKhoxqvR5xR2Nur8vO5RKelQmG52jlZo7SwI5WLYwDInPn1n8H9tR0zYqTqfNxWszUEy93cHHwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>




    <?php


    include '../MAIN/Header.php';

    ?>


    <style>
        .FloatingFolder{
            position: absolute;
            bottom: 80px;
            right: 60px;
        }
        .FloatingFolder .btnFolders{
            background-color: #edeff2;
            border: none;
        }
        .FloatingFolder .btnFolders:hover{
            background-color: #dee0e3 !important;
            border: none;
        }
    </style>



</head>

<body>

    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>



        <div class="container AdminContainer">

            <div class="FloatingFolder">
                <a href="./FolderMaster.php" class="btn btnFolders rounded-pill px-4 py-3"> <strong>+ Create Folders</strong> </a>
            </div>

            <div class="row linkContainer">
                <div class="col-xl-4 col-lg-4 col-12 d-flex justify-content-center mb-3">
                    <a href="ViewMutlipleImages.php" class="dashlink">
                        <div class="card carddetail carddetone text-center">
                            <div class="my-auto">
                                <img src="../img/admin/uimage.png" class="card-img-top mx-auto" alt="...">
                                <h5 class="text-center mt-2">Images</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 d-flex justify-content-center mb-3">
                    <a href="ViewVideos.php" class="dashlink">
                        <div class="card carddetail carddetone text-center">
                            <div class="my-auto">
                                <img src="../img/admin/uvideo.png" class="card-img-top mx-auto" alt="...">
                                <h5 class="text-center mt-2">Videos</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-12 d-flex justify-content-center mb-3">
                    <a href="ViewProducts.php" class="dashlink">
                        <div class="card carddetail carddetone text-center">
                            <div class="my-auto">
                                <img src="../img/admin/uproduct.png" class="card-img-top mx-auto" alt="...">
                                <h5 class="text-center mt-2">Products</h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>





    </div>







</body>

</html>