<?php

include '../MAIN/Dbconfig.php';
$PageTitle = 'ViewImage';
$TodayDate = date('Y-m-d');


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


    <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>


    <?php


    include '../MAIN/Header.php';

    ?>

    <style>
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

        .ImageCard .card-footer .actionButtons {
            background-color: #f7f2f2;
            border: none;
            width: 120px;
            color: #737272;
        }

        .ImageCard .card-footer .actionButtons:first-child:hover {
            color: green;
        }

        .ImageCard .card-footer .actionButtons:last-child:hover {
            color: red;
        }

        .imageaddbtn {
            text-decoration: none;
            color: white;
        }

        .imageaddbtn:hover {
            text-decoration: none;
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

    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>




        <div class="container-fluid px-5" style="margin-top: 100px;">
            <div class="text-center videoGalleryBorder">
                <h2 class="imageGalleryHead">Image Gallery</h2>

                <a href="./MultipleImageUpload.php" class="btn rounded-pill bg-info text-white px-5 mt-2 mb-4 fs-4">Add Image</a>
            </div>
        </div>




        <div class="container main-content">

            <div class="row mx-lg-5" id="ShowImages">




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




    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });


        ViewImages();


        function ViewImages() {
            var ImageData = 'fetch_data';
            $.ajax({
                type: "POST",
                url: "ViewImagesData.php",
                data: {
                    ImageData: ImageData
                },
                beforeSend: function() {
                    //$('#').show();
                },
                success: function(data) {
                    //console.log(data);
                    //$('#').hide();
                    $('#ShowImages').html(data);
                },

            });
        };



        $(document).on('click','.DeleteButton',function(){
            var ImageDeleteId = $(this).val();
            //console.log(ImageDeleteId);
            if (confirm('Are you sure you want to delete this image') == true) {
                $.ajax({
                    type: "POST",
                    url: "TestUpload.php",
                    data: {
                        ImageDeleteId: ImageDeleteId
                    },
                    beforeSend: function() {
                        $('#update_image').addClass("disable");
                    },
                    success: function(data) {
                        console.log(data);
                        $('#update_image').removeClass("disable");
                        var response = JSON.parse(data);
                        if (response.delImage == "1") {
                            toastr.success("Successfully Deleted Image");
                            ViewImages();
                        } else if (response.delImage == "2") {
                            toastr.error("Some Error Occured");
                        } else {
                            toastr.error("Some Error Occured");
                        }
                    }
                });
            } else {
                toastr.info("Cancelled");
            }
        })

      
    </script>


</body>

</html>