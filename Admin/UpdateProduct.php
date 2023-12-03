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
        .UploadInnerDiv {
            border: 3px dashed rgba(0, 0, 255, 0.5);
            border-radius: 10px;
            /* background-color: lightgray; */
        }

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

        .MainCard {
            border-radius: 20px;
            background-color: lightgray;
        }

        .MainCard .Inputs {
            border: 1px solid rgba(0, 0, 255, 0.5);
        }

        .MainCard .ViewImages {
            height: 150px;

        }

        .MainCard #ViewImages {
            display: flex;
            overflow-y: scroll;
        }

        .MainCard .ImagesDiv {
            position: relative;
        }

        .MainCard .btnRemove {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 0;
            border-radius: 50%;
            box-shadow: 0px 0px 2px lightgray;
            transition: all 0.3s ease;
        }

        .MainCard .btnRemove:hover {
            background-color: white;
            transform: scale(1.2);
        }

        .MainCard .btnRemove i {
            vertical-align: middle;
            color: red;
        }

        .MainCard .submibtn {
            background-color: #40b75b;
            color: white;
            font-weight: 700;
            border: none;
        }
    </style>



</head>

<body>

    <div class="wrapper">

        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>



        <div class="container main-content">

            <!-- <div class="title shadow-sm">

                <h3 class="m-0 p-0 headSize">Add Image Gallery</h3>

            </div> -->

            <div class="col-12 text-end mb-3">
                <a href="./ViewProducts.php" class="btn px-4 rounded-pill btnLink btn-primary"> <i class="material-icons" style="vertical-align:middle;">image</i> View Products</a>
            </div>

            <div class="card card-body MainCard shadow">


                <div class="row px-4 py-3">


                    <label class="form-label"> <strong>CHOOSE IMAGES</strong> </label>
                    <div class="col-12">

                        <div class=" UploadInnerDiv dropzone" id="profileWatermark">

                        </div>

                    </div>


                    <div id="ViewImages" class="mt-3">

                        <!-- <div class="ImagesDiv me-2">
                            <a href="../THUMBNAILS/12_37235.jpg" class="glightbox bg-info" data-gallery="gallery">
                                <img class="ViewImages bg-success" src="../THUMBNAILS/12_37235.jpg">
                            </a>
                            <button class="btn btn-link btnRemove" value=""> <i class="material-icons">close</i> </button>
                        </div> -->

                    </div>


                    <?php

                    if (isset($_GET['ImgId'])) {
                        $ImageId = $_GET['ImgId'];
                    } else {
                        $ImageId = 0;
                    }

                    ?>

                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_title"> <strong>PRODUCT TITLE</strong> </label>
                        <input class="form-control Inputs" type="text" name="ImageTitle" id="image_title">
                    </div>



                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_desc"><strong>DESCRIPTION</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="description" id="image_desc"></textarea>
                    </div>

                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_adv"><strong>ADVANTAGES</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="advantage" id="image_adv"></textarea>
                    </div>

                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_Compliance"><strong>STANDARDS COMPLIANCE</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="compliance" id="image_Compliance"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_ins"><strong>INSTRUCTION FOR USE</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="instruction" id="image_ins"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_app"><strong>APPLICATION</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="application" id="image_app"></textarea>
                    </div>

                    <div class="col-12 mt-4">
                        <label class="form-label" for="image_pac"><strong>PACKAGING & STORAGE</strong></label>
                        <textarea class="form-control Inputs" col="10" rows="5" name="pacakge" id="image_pac"></textarea>
                    </div>

                    <div class="col-12 mt-4 mb-4">
                        <div class="text-center">
                            <button id="SubmitBtn" type="submit" class="btn submibtn px-4 py-2">Update Product</button>
                        </div>
                    </div>

                    <!-- <input type="text" name="uploadImage" id="base64Encoded" hidden> -->

                </div>





            </div>


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>


    <script>
        var ImageMainId = '<?= $ImageId ?>';
        StoreProTemp(ImageMainId);

        function StoreProTemp(ImgId) {
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
                data: {
                    StoreProTemp: ImgId
                },
                beforeSend: function() {
                    //$('#add_product').addClass("disable");

                },
                success: function(data) {
                    //ssconsole.log(data);
                    var ResponseVar = JSON.parse(data);
                    if (ResponseVar.TempStore == 1) {
                        $('#image_title').val(ResponseVar.title);
                        $('#image_desc').val(ResponseVar.description);
                        $('#image_adv').val(ResponseVar.advantage);
                        $('#image_Compliance').val(ResponseVar.compliance);
                        $('#image_ins').val(ResponseVar.instruction);
                        $('#image_pac').val(ResponseVar.pacakge);
                        $('#image_app').val(ResponseVar.application);
                        GetImages(ImgId);
                    }
                },
            });
        }


        //GetImages(12);

        function GetImages(ImgId) {
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
                data: {
                    GetProduct: ImgId
                },
                beforeSend: function() {
                    //$('#add_product').addClass("disable");
                    //console.log('Helloo');
                },
                success: function(data) {
                    $('#ViewImages').html(data);
                    const lightbox = GLightbox({
                        touchNavigation: true,
                        loop: true,
                        autoplayVideos: true
                    });
                },
            });
        }



        function RemoveTempImages(TempId, MainID) {
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
                data: {
                    RemoveTempImages: TempId
                },
                beforeSend: function() {
                    //$('#add_product').addClass("disable");
                    console.log(MainID);
                },
                success: function(data) {
                    console.log(data);
                    var DelResponse = JSON.parse(data);
                    if (DelResponse.DelTempImage == 1) {
                        toastr.success('Image Removed');
                        GetImages(MainID);
                    } else {
                        toastr.error('Image Removing Failed');
                    }
                },
            });
        }



        $(document).on('click', '.btnRemove', function() {
            var RemoveTempImagesId = $(this).val();
            RemoveTempImages(RemoveTempImagesId, ImageMainId);
        });



        // ClassicEditor
        //     .create(document.querySelector('#image_desc'), {
        //         toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });

        Dropzone.autoDiscover = false;


        //Profile with watermark
        var myDropzone = new Dropzone("#profileWatermark", {
            paramName: "UpdateProducts", // The name that will be used to transfer the file
            addRemoveLinks: true,
            uploadMultiple: true,
            autoProcessQueue: false,
            parallelUploads: 50,
            // previewsContainer: ".DropzonePreview",
            // maxFilesize: jsonData.maxFileSizeMB, // MB
            acceptedFiles: ".png, .jpeg, .jpg",
            url: "productUpload.php",

            transformFile: function(file, done) {

                var myDropZone = this;

                // Create the image editor overlay
                var editor = document.createElement('div');
                editor.style.position = 'fixed';
                editor.style.left = 0;
                editor.style.right = 0;
                editor.style.top = 0;
                editor.style.bottom = 0;
                editor.style.zIndex = 9999;
                editor.style.backgroundColor = '#fff';

                // Create the confirm button
                var confirm = document.createElement('button');
                confirm.style.position = 'absolute';
                confirm.style.left = '45%';
                confirm.style.right = '45%';
                confirm.style.bottom = '30px';
                confirm.style.zIndex = 9999;
                confirm.textContent = 'CROP IMAGE';
                confirm.style.border = "2px solid rgb(0,0,255)";
                confirm.style.color = "white";
                confirm.style.backgroundColor = "rgb(0,0,255)";
                confirm.addEventListener('click', function() {

                    // Get the canvas with image data from Cropper.js
                    var canvas = cropper.getCroppedCanvas({
                        width: 1080,
                        height: 1080
                    });

                    // Turn the canvas into a Blob (file object without a name)
                    canvas.toBlob(function(blob) {

                        // Update the image thumbnail with the new image data
                        myDropZone.createThumbnail(
                            blob,
                            myDropZone.options.thumbnailWidth,
                            myDropZone.options.thumbnailHeight,
                            myDropZone.options.thumbnailMethod,
                            false,
                            function(dataURL) {

                                // Update the Dropzone file thumbnail
                                myDropZone.emit('thumbnail', file, dataURL);

                                // Return modified file to dropzone
                                done(blob);
                            }
                        );

                    });

                    // Remove the editor from view
                    editor.parentNode.removeChild(editor);

                });
                editor.appendChild(confirm);

                // Load the image
                var image = new Image();
                image.src = URL.createObjectURL(file);
                editor.appendChild(image);

                // Append the editor to the page
                document.body.appendChild(editor);

                // Create Cropper.js and pass image
                var cropper = new Cropper(image, {
                    aspectRatio: 1
                });

            },



            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                // this.element.querySelector("#SubmitBtn").addEventListener("click", function(e) {
                //     // Make sure that the form isn't actually being sent.
                //     e.preventDefault();
                //     e.stopPropagation();
                //     myDropzone.processQueue();
                // });

                $('#SubmitBtn').click(function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (myDropzone.getQueuedFiles().length === 0) {
                        // var blob = new Blob();
                        // blob.upload = { 'chunked': myDropzone.defaultOptions.chunking };
                        // myDropzone.uploadFile(blob);
                        //myDropzone.uploadFiles([ ]);
                        var UploadForm = new FormData();
                        UploadForm.append("UpdateImageTitleNoImage", $('#image_title').val());
                        UploadForm.append("UpdateImageDescNoImage", $('#image_desc').val());
                        UploadForm.append("UpdateImageAdvNoImage", $('#image_adv').val());
                        UploadForm.append("UpdateImageComNoImage", $('#image_Compliance').val());
                        UploadForm.append("UpdateImageInsNoImage", $('#image_ins').val());
                        UploadForm.append("UpdateImageAppNoImage", $('#image_app').val());
                        UploadForm.append("UpdateImagePacNoImage", $('#image_pac').val());
                        UploadForm.append("UpdateMainImageIdNoImage", ImageMainId);
                        $.ajax({
                            type: "POST",
                            url: "productUpload.php",
                            data: UploadForm,
                            beforeSend: function() {
                                //$('#add_product').addClass("disable");
                                //console.log("test sending");
                            },
                            success: function(data) {
                                console.log(data);
                                var ImageResponseNoImage = JSON.parse(data);
                                if (ImageResponseNoImage.UpdateImageEmpty == 1) {
                                    location.replace('ViewProducts.php');
                                } else {
                                    toastr.warning('Image Uploaded Failed');
                                }
                            },
                            cache: false,
                            processData: false,
                            contentType: false
                        });
                        console.log("Empty");
                    } else {
                        myDropzone.processQueue();
                    }
                    // if (myDropzone.getQueuedFiles().length > 0) {                        
                    //     myDropzone.processQueue();  
                    //     console.log("Files");
                    // } else {                       
                    //     myDropzone.uploadFiles([]); //send empty 
                    //     console.log("Empty");
                    // }   
                    //myDropzone.processQueue();
                })

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function(data, xhr, formData) {
                    // Gets triggered when the form is actually being sent.
                    // Hide the success button or the complete form.
                    formData.append("UpdateImageTitle", $('#image_title').val());
                    formData.append("UpdateImageDesc", $('#image_desc').val());
                    formData.append("UpdateImageAdv", $('#image_adv').val());
                    formData.append("UpdateImageCom", $('#image_Compliance').val());
                    formData.append("UpdateImageIns", $('#image_ins').val());
                    formData.append("UpdateImageApp", $('#image_app').val());
                    formData.append("UpdateImagePac", $('#image_pac').val());
                    formData.append("UpdateMainImageId", ImageMainId);


                });
                this.on("successmultiple", function(files, response) {
                    // Gets triggered when the files have successfully been sent.
                    // Redirect user or notify of success.
                    console.log(response);
                    $('#image_title').val('');
                    $('#image_desc').val('');
                    $('#image_adv').val('');
                    $('#image_Compliance').val('');
                    $('#image_ins').val('');
                    $('#image_app').val('');
                    $('#image_pac').val('');
                    this.removeAllFiles();
                    var ImageResponse = JSON.parse(response);
                    if (ImageResponse.UpdateImageUploadStatus == 1) {
                        toastr.success('Image Uploaded Successfully');
                        location.replace('ViewProducts.php');
                    } else {
                        toastr.warning('Image Uploaded Failed');
                    }

                });
                this.on("errormultiple", function(files, response) {
                    // Gets triggered when there was an error sending the files.
                    // Maybe show form again, and notify user of error
                    console.log("heo");
                });
            }

        }); // end new Dropzones




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