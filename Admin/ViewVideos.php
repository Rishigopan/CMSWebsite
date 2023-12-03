<?php

include '../MAIN/Dbconfig.php';

$PageTitle = 'ViewVideo';

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

    #vaddimg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        margin: auto;
        height: 250px;
        width: 350px;
        z-index: 99;

    }

    .photo_add {
        position: relative;
        height: 250px !important;
    }

    #thumbnail_input {
        position: absolute;
        height: 250px;
        z-index: 999;
    }
</style>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />


    <?php
    include '../MAIN/Header.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://unpkg.com/cropperjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>



</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modalBg px-3">
                <form action="" id="add_video" enctype="multipart/form-data" novalidate>
                    <div class="modal-header text-center modalHeadsection">
                        <div class="modalHead">
                            <h5 class="modal-title modalTitle" id="exampleModalLabel">VIDEO GALLERY</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label"> <strong>Choose Thumbnail Image</strong> </label>

                        <div class="photo text-center bg-white">
                            <div class="photo_add">
                                <input type="file" id="thumbnail_input" name="thumbnail_image" class="form-control forminput" style="opacity:0" accept="image/*">
                                <label for="thumbnail_input " class="form-label">
                                    <img src="../img/ImageCrop.png" alt="Choose an image" id="vaddimg" class="dragFile img-fluid">

                                </label>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label"> <strong>Choose Video File</strong> </label>
                            <input type="file" class="form-control" name="VideoFile" id="video_input" accept=".mp4,.mkv,.webm,.avi" required>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mt-2">
                                    <label class="form-label" for="">Video Category</label>
                                    <select name="videoCategory" id="video_category" class="form-select VideoCat SelectCategory">
                                        <option hidden value="0">Select Category</option>
                                        <option value="3">Projects Presentation</option>
                                        <option value="1">Material Presentation</option>
                                        <option value="2">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-2 VideoFolder">
                                    <label class="form-label" for="">Video Folder</label>
                                    <select name="VideoFolder" id="video_folder" class="form-select SelectFolder">
                                        <option hidden value="0">Select Folder</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-2 VideoSubFolder">
                                    <label class="form-label" for="">Sub Folder</label>
                                    <select name="VideoSubFolder" id="video_sub_folder" class="form-select SelectSubFolder">
                                        <option hidden value="0">Select Sub Folder</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mt-2">
                                    <label class="form-label" for="">Video Heading</label>
                                    <input type="text" name="image_heading" id="image_heading" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label" for="">Video Description</label>
                                    <textarea name="image_description" id="image_description" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="img-details mt-2">
                                    <!-- <label class="form-label d-none d-md-flex justify-content-center" for="">Upload Picture</label> -->
                                    <!-- <p class="text-center justify-content-center text-secondary">Upload Picture size should be less than 2 Mb and having a size of 500*500</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <!-- <button type="button" class="btn btnClose px-5 py-2" data-bs-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-menu px-4 py-2">Save Video</button>
                        <input type="text" name="ThumbnailUploadImage" id="base64Encoded" hidden>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Crop Modal -->
    <div class="modal fade" id="modalcrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crop Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="" id="sample_image" />
                            </div>
                            <div class="col-md-4">
                                <h6 class="ms-2">Preview</h6>
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




    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>


        <div class="container-fluid galleryBg">
            <div class="text-center videoGalleryBorder">
                <h2 class="imageGalleryHead">Video Gallery</h2>
                <!-- <a href="./ImageMaster.php" class="btn rounded-pill bg-info text-white px-5 my-2 fs-4 <?php echo ($PageTitle == 'AddImage') ? "active" : "" ?>">Add Image</a> -->
                <button class="btn rounded-pill bg-info text-white px-5 mt-2 mb-4 fs-4 <?php echo ($PageTitle == 'AddImage') ? "active" : "" ?>" data-bs-toggle="modal" data-bs-target="#modal">Add Video</a>
            </div>
        </div>

        <div class="container main-content">
            <div id="ShowVideos" class="row">

            </div>
        </div>


    </div>



    <script>
        // function revertPreview() {
        //     var newpreview = document.getElementById("vaddimg");
        //     newpreview.src = '../img/drag_file.png';
        // }

        //Choose folder on category select
        $(document).on('change', '.SelectCategory', function() {
            var SelectedCategory = $(this).val();
            $.ajax({
                method: "POST",
                url: "MasterExtras.php",
                data: {
                    ShowFolder: SelectedCategory
                },
                success: function(data) {
                    console.log(data);
                    $('.SelectFolder').html(data);
                }
            });
        });

        //Choose  sub folder on folder select
        $(document).on('change', '.SelectFolder', function() {
            var SelectedFolder = $(this).val();
            $.ajax({
                method: "POST",
                url: "MasterExtras.php",
                data: {
                    ShowSubFolder: SelectedFolder
                },
                success: function(data) {
                    console.log(data);
                    $('.SelectSubFolder').html(data);
                }
            });
        });


        //Choose folder on category select update
        $(document).on('click', '.UpdateSelectCategory', function() {
            $(this).change(function() {
                var SelectedCategory = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "MasterExtras.php",
                    data: {
                        ShowFolder: SelectedCategory
                    },
                    success: function(data) {
                        console.log(data);
                        $('.UpdateSelectFolder').html(data);
                    }
                });
            });
        });


        //Choose sub folder on folder select update
        $(document).on('click', '.UpdateSelectFolder', function() {
            $(this).change(function() {
                var SelectedFolder = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "MasterExtras.php",
                    data: {
                        ShowSubFolder: SelectedFolder
                    },
                    success: function(data) {
                        console.log(data);
                        $('.UpdateSelectSubFolder').html(data);
                    }
                });
            });
        });



        //Show all Videos 
        function ViewVideos() {
            var VideoData = 'fetch_data';
            $.ajax({
                type: "POST",
                url: "ViewVideosData.php",
                data: {
                    VideoData: VideoData
                },
                beforeSend: function() {
                    //$('#').show();
                },
                success: function(data) {
                    //console.log(data);
                    //$('#').hide();
                    $('#ShowVideos').html(data);
                },
            });
        };


        $(document).ready(function() {

            ViewVideos();

            var $modal = $('#modalcrop');
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
                    aspectRatio: 16 / 9,
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
                        $('#vaddimg').attr('src', base64data);

                    }
                }, 'image/jpeg', 0.5);

                $modal.modal('hide');

            });


            /* Add item Start */
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
                            //$('#base64Encoded').val('');
                            $('#video_folder').val('');
                            $('#image_heading').val('');
                            $('#image_description').val('');
                            $('#add_video')[0].reset();
                            $('#modal').modal('hide');
                            var newpreview = document.getElementById("vaddimg");
                            newpreview.src = '../img/ImageCrop.png';
                            var response = JSON.parse(data);
                            if (response.addVideo == "0") {
                                toastr.warning("Image Already Exists");
                            } else if (response.addVideo == "1") {
                                toastr.success("Successfully Uploaded Video");
                                ViewVideos();
                            } else if (response.addVideo == "2") {
                                toastr.error("Uploading Failed");
                            } else if (response.addVideo == "5") {
                                toastr.warning(" Only Support mp4,mkv,webm,avi Formats");
                            } else if (response.addVideo == "4") {
                                toastr.warning("File Size Should Be Less Than 10 Mb");
                            } else if (response.addVideo == "6") {
                                toastr.warning("Video File And Thumbnail Cannot Be Empty");
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
            /* Add item  End */
        });




        $('.popup-video').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false
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


        // $(document).on('change', '.VideoCat', function() {
        //     var VideoCategory = $(this).val();
        //     if (VideoCategory != '2') {
        //         $('.VideoFolder').show();
        //     } else {
        //         $('.VideoFolder').hide();
        //     }
        // });
    </script>
</body>

</html>