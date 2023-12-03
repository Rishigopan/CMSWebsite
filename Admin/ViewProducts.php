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

        .maincard {
            padding-top: 314px;

        }


        .ImageCard {
            border-radius: 10px;
        }

        /* .wrapper .row {
            margin-top: 110px;
        } */

        /* .galleryBg {
            margin-top: 110px;
        } */

        .ImageCard .card-header {
            border-radius: 10px 10px 0px 0px;
            background-color: white;
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

        .ProductCard .card-footer .actionButtons {
            background-color: #f7f2f2;
            border: none;
            width: 120px;
            color: #737272;
        }

        .ProductCard .card-footer .actionButtons:first-child:hover {
            color: green;
        }

        .ProductCard .card-footer .actionButtons:last-child:hover {
            color: red;
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

        <div class="container-fluid galleryBg">
            <div class="text-center videoGalleryBorder">
                <h2 class="imageGalleryHead">PRODUCT MASTER</h2>

                <a href="./AddProduct.php" class="btn rounded-pill bg-info text-white px-5 mt-2 mb-4 fs-4">Add Product</a>
            </div>


            <div class="row mt-3" id="ShowProducts">

            </div>

        </div>


    </div>




    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });




        function ViewProducts() {
            var ProductData = 'fetch_data';
            $.ajax({
                type: "POST",
                url: "ViewProductsData.php",
                data: {
                    ProductData: ProductData
                },
                beforeSend: function() {
                    //$('#').show();
                },
                success: function(data) {
                    //console.log(data);
                    //$('#').hide();
                    $('#ShowProducts').html(data);
                },

            });
        };

        $(document).ready(function() {


            ViewProducts();


        });


        $(document).on('click','.DeleteButton',function(){
            var ProductDeleteId = $(this).val();
            if (confirm('Are you sure you want to delete this Product') == true) {
                $.ajax({
                    type: "POST",
                    url: "productUpload.php",
                    data: {
                        ProductDeleteId: ProductDeleteId
                    },
                    beforeSend: function() {
                        //$('#update_Product').addClass("disable");
                    },
                    success: function(data) {
                        console.log(data);
                        //$('#update_Product').removeClass("disable");
                        var response = JSON.parse(data);
                        if (response.delProduct == "1") {
                            toastr.success("Successfully Deleted Product");
                            ViewProducts();
                        } else if (response.delProduct == "2") {
                            toastr.error("Some Error Occured");
                        } else {
                            toastr.error("Some Error Occured");
                        }
                    }
                });
            } else {
                toastr.info("Cancelled");
            }
        });


        $(document).on('click','.MakeMain',function(){
            var ProductMain = $(this).val();
            var ProductChangeId = $(this).attr('id');
            if (confirm('Are you sure you want to make this as product main image') == true) {
                $.ajax({
                    type: "POST",
                    url: "productUpload.php",
                    data: {
                        ProductMain: ProductMain,ProductChangeId:ProductChangeId
                    },
                    beforeSend: function() {
                        //$('#update_Product').addClass("disable");
                    },
                    success: function(data) {
                        console.log(data);
                        //$('#update_Product').removeClass("disable");
                        var response = JSON.parse(data);
                        if (response.MainProduct == "1") {
                            toastr.success("Successfully Changed Main Product Image");
                            ViewProducts();
                        } else if (response.MainProduct == "2") {
                            toastr.error("Some Error Occured");
                        } else {
                            toastr.error("Some Error Occured");
                        }
                    }
                });
            } else {
                toastr.info("Cancelled");
            }
        });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>





</body>

</html>