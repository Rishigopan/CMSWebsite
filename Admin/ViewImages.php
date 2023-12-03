<?php

include '../MAIN/Dbconfig.php';

$PageTitle = 'ViewImage';

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


    <?php


    include '../MAIN/Header.php';

    ?>



</head>

<body>

    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>


      

        <div class="container main-content">
            <?php include '../MAIN/Menubar.php'; ?> 
            <div class="title shadow-sm">
               
                    <h3 class="m-0 p-0 headSize">View Image Gallery</h3>
                
                    <a href="item_master.php" class="btn-menu viewaddBtn">Add image</a>
                
            </div>

            <div id="ShowImages" class="row mt-3">
            </div>
        </div>

        <script>
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

            $(document).ready(function() {

                
                ViewImages();


            });


            toastr.options = {
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
    </div>

</body>

</html>