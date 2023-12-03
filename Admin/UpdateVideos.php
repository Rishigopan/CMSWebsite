<?php

include '../MAIN/Dbconfig.php';
$PageTitle = 'AddVideo';


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
            border: 1px solid #ad5a17;
        }
    </style>



</head>

<body>

    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>




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




        <div class="container main-content">

            <?php include '../MAIN/Menubar.php'; ?>

            <div class="title shadow-sm">

                <h3 class="m-0 p-0 headSize">Add Video Gallery</h3>


            </div>

            <?php


            if (isset($_GET['VID'])) {
                $VideoId = $_GET['VID'];
                $FetchVideoDetails = mysqli_query($con, "SELECT * FROM video_table WHERE videoId = '$VideoId'");
                foreach ($FetchVideoDetails as $FetchVideoDetailsResult) {
                }
            }


            ?>

            <div class="card card-body main-card shadow-sm">
                <form action="" id="add_video" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="row img-box mb-3">
                            <div class="col-7 mb-3">

                                <label class="form-label mx-5"> <strong>Choose Thumbnail Image</strong> </label>
                                <div class=" d-flex">
                                    <div class="video ms-5">
                                        <input type="text" name="UpdateVideoId" value="<?= $FetchVideoDetailsResult['videoId']; ?>" hidden>
                                        <img src="../THUMBNAILS/<?= $FetchVideoDetailsResult['videoThumbnail']; ?>" alt="Choose an image" id="photo_img">
                                        <div class="photo_add">
                                            <input type="file" id="thumbnail_input" name="Update_thumbnail_image" tabindex="0" class="form-control" style="opacity: 0;" accept="image/*">
                                            <label for="thumbnail_input" class="form-label">

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 mx-5">
                                    <label class="form-label"> <strong>Choose Video File</strong> </label>
                                    <input type="file" class="form-control" name="UpdateVideoFile" id="video_input" accept=".mp4,.mkv,.webm,.avi">
                                </div>
                            </div>


                            <div class="col-5 mt-5 pt-3">
                                <div class="img-details mt-5">
                                    <label class="form-label d-none d-md-flex justify-content-center" for="">Upload Video</label>
                                    <p class="d-none d-md-flex text-center justify-content-center text-lightgrey">Upload Video size should be less than 5 Mb and thumbnail size should be less than 1 Mb</p>
                                </div>

                                <div class="submit_btn d-flex justify-content-center">
                                    <button type="submit" class="btn btn-menu px-4 py-3">Update Video</button>
                                </div>
                            </div>

                            <input type="text" name="UpdateThumbnailUploadImage" id="base64Encoded" hidden>

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
            $('#thumbnail_input').change(function(event) {
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


            /* Update item Start */
            $(function() {

                let validator = $('#add_video').jbvalidator({
                    language: 'dist/lang/en.json',
                    successClass: false,
                    html5BrowserDefault: true
                });



                $(document).on('submit', '#add_video', (function(e) {
                    e.preventDefault();
                    var VideoData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "MasterOperations.php",
                        data: VideoData,
                        beforeSend: function() {
                            $('#add_video').addClass("disable");
                        },
                        success: function(data) {
                            console.log(data);
                            $('#add_video').removeClass("disable");
                            $('#thumbnail_input').val('');
                            $('#video_input').val('');
                            $('#base64Encoded').val('');
                            revertPreview();
                            var response = JSON.parse(data);
                            if (response.updateVideo == "7") {
                                toastr.warning("Thumbnail and video is empty");
                            } else if (response.updateVideo == "1") {
                                toastr.success("Successfully Updated Video");
                                location.replace('ViewVideos.php');
                            } else if (response.updateVideo == "2") {
                                toastr.error("Updating Failed");
                            } else if (response.updateVideo == "5") {
                                toastr.warning(" Only Support mp4,mkv,webm,avi Formats");
                            } else if (response.updateVideo == "4") {
                                toastr.warning("File Size Should Be Less Than 5 Mb");
                            } else if (response.updateVideo == "6") {
                                toastr.warning("Video File Cannot Be Empty");
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
            /* Update item  End */







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