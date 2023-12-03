<?php

include '../MAIN/Dbconfig.php';



if (isset($_COOKIE['custtypecookie']) && isset($_COOKIE['custidcookie'])) {

    if ($_COOKIE['custtypecookie'] == 'SuperAdmin' || $_COOKIE['custtypecookie'] == 'Admin') {


        if(isset($_GET['IID'])){

        }
        else{
            header("location:ViewImages.php");
        }


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

    <style>
        .disable {
            opacity: 0.3;
            pointer-events: none;
        }

        #sample_image {
            width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
    </style>



</head>

<body>

    <div class="wrapper">

        <!--NAVBAR-->
        <nav class="navbar fixed-top navbar-expand-lg p-1">
            <div class="container-fluid px-xl-5">
                <!-- <button class="btn btn-menu rounded-pill" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"> <i class="material-icons">menu</i> <span class="d-md-inline-block d-none"> Menu </span></button> -->
                <!-- Logo -->
                            <div class="logo d-flex">
                            <a href="../index.html"><img src="../img/buv-logo.png" class="logoStyle" alt="" style="width: 130px; height: 60px;"></a>
                                <h2 class="navbar-brand my-auto ms-2 fs-4 pt-4 d-none d-md-flex" href="#"> <strong>BUV CHEMICALS & ADHESIVES</strong> </h2>
                            </div>
                            <a href="../signout.php" class="signoutBtn">Sign Out</a>
                            
            </div>
        </nav>


        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="" id="sample_image" />
                                </div>
                                <div class="col-md-4">
                                    <div class="preview" id="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>

        <?php


        if (isset($_GET['IID'])) {
            $imageId = $_GET['IID'];
            $FetchImages = mysqli_query($con, "SELECT * FROM item_master WHERE item_id = '$imageId'");
            foreach ($FetchImages as $FetchResult) {
            }
        }


        ?>

        <div class="container main-content">

        <div class="title shadow-sm">
               
               <h3 class="m-0 p-0 headSize">Update Image</h3>
           
               <a href="ViewImages.php" class="btn-menu viewaddBtn">View image</a>
           
       </div>

            <div class="card card-body main-card shadow-sm">
                <form action="" id="update_image" enctype="multipart/form-data" novalidate>
                    <div class="row">
                            <div class="row img-box">
                                <div class="col-xl-7 col-lg-7 col-12 d-flex">
                                    <div class="photo ms-5">
                                        <input type="text" name="UpdateImageId" value="<?= $FetchResult['item_id']; ?>" hidden>
                                        <img src="../IMAGES/<?= $FetchResult['item_image']; ?>" alt="Choose an image" id="photo_img">
                                        <div class="photo_add">
                                            <input type="file" id="photo_input" name="updateitem_image" tabindex="7" class="form-control" style="opacity: 0;" accept="image/*">
                                            <label for="photo_input" class="form-label">
                                                <div class="text-center ">

                                                </div>
                                            </label>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-xl-5 col-lg-5 col-12 mt-md-5 pt-md-5 pt-xl-2 ps-5 ps-md-0">
                                    <div class="img-details mt-xl-5 pt-md-3 text-center ps-sm-3">
                                        <label class="form-label text-center d-flex justify-content-center" for="">Upload Picture</label>
                                        <p class="d-flex text-center justify-content-center">Upload Picture size should be less than 200 kb and having a size of 500*500</p>
                                    </div>

                                    <div class="d-flex justify-content-center submit_btn">
                                    <button type="submit" class="btn btn-menu px-4 py-3">Update Image</button>
                                    </div>
                                </div>

                                <input type="text" name="updateuploadImage" id="base64Encoded" hidden>

                            </div>
                    </div>
                </form>
            </div>


        </div>





    </div>



    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>


    <script>
        function revertPreview() {
            var newpreview = document.getElementById("photo_img");
            newpreview.src = '../add_image.png';
        }


        $(document).ready(function() {

            var $modal = $('#modal');
            var image = document.getElementById('sample_image');
            var cropper;

            //$("body").on("change", ".image", function(e){
            $('#photo_input').change(function(event) {
                var files = event.target.files;
                var done = function(url) {
                    image.src = url;
                    $modal.modal('show');
                };
                //var reader;
                //var file;
                //var url;

                if (files && files.length > 0) {
                    /*file = files[0];
                    if(URL)
                    {
                        done(URL.createObjectURL(file));
                    }
                    else if(FileReader)
                    {*/
                    reader = new FileReader();
                    reader.onload = function(event) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                    //}
                }
            });


            $modal.on('shown.bs.modal', function() {
                imagePreview = document.getElementById("preview");
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview: imagePreview
                });
            });

            $modal.on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;
            });

            $("#crop").click(function() {
                canvas = cropper.getCroppedCanvas({
                    width: 500,
                    height: 500,
                });

                canvas.toBlob(function(blob) {
                    //url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        var base64data = reader.result;
                        $('#base64Encoded').val(base64data);
                        //console.log(base64data);
                        $('#photo_img').attr('src', base64data);

                    }
                }, 'image/jpeg', 0.5);

                $modal.modal('hide');

            });


            /* Update image Start */
            $(function() {

                let validator = $('#update_image').jbvalidator({
                    language: 'dist/lang/en.json',
                    successClass: false,
                    html5BrowserDefault: true
                });



                $(document).on('submit', '#update_image', (function(e) {
                    e.preventDefault();
                    var UpdateData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "MasterOperations.php",
                        data: UpdateData,
                        beforeSend: function() {
                            $('#update_image').addClass("disable");
                        },
                        success: function(data) {
                            console.log(data);
                            $('#update_image').removeClass("disable");
                            var response = JSON.parse(data);
                            if (response.updateImage == "1") {
                                toastr.success("Successfully Updated Image");
                                $('#photo_input').val('');
                                $('#base64Encoded').val('');
                                revertPreview();
                                location.replace('ViewImages.php');
                            } else if (response.updateImage == "2") {
                                toastr.error("Some Error Occured");
                            } else {
                                toastr.error("Some Error Occured");
                            }
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }));

            });
            /* Update image  End */







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


</body>

</html>