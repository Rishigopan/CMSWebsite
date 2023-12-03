<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />


<style>
    .card-footer .actionButtons {
        background-color: #f7f2f2;
        border: none;
        width: 120px;
        color: #737272;
    }

    .card-footer .actionButtons:first-child:hover {
        color: green;
    }

    .card-footer .actionButtons:last-child:hover {
        color: red;
    }

    .forminput {
        height: 90px;
        padding-top: 100px;
    }

    #photo_img {
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

    #thumbnail_in {
        position: absolute;
        height: 250px;
        z-index: 999;
    }

    #ShowImages .videoOverlay {
        height: 220px;
       
    }
    #ShowImages .videoThumbnailImage{
        height: 220px;
    }

    #ShowImages .VideoThumbnail {
        height: 220px;
       
    }
</style>



<div class="modal fade" id="modalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modalBg px-3">
            <form action="" id="upd_video" novalidate>
                <div class="modal-header text-center modalHeadsection">
                    <div class="modalHead">
                        <h5 class="modal-title modalTitle" id="exampleModalLabel">UPDATE GALLERY</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label"> <strong>Choose Thumbnail Image</strong> </label>

                    <div class="photo text-center bg-white">
                        <div class="photo_add">
                            <input type="file" id="thumbnail_in" name="thumbnail_image" class="form-control forminput" style="opacity:0" accept="image/*">
                            <label for="thumbnail_in " class="form-label">
                                <img src="../THUMBNAILS/" alt="Choose an image" id="photo_img" class="dragFile img-fluid">

                            </label>
                        </div>
                    </div>
                    <input type="text" name="UpdateVideoId" id="uvideoid" hidden>

                    <div class="mt-4">
                        <label class="form-label chooseVideo"> <strong>Choose Video File</strong> </label>
                        <input type="file" class="form-control" name="UpdateVideoFile" id="uvideo_input" accept=".mp4,.mkv,.webm,.avi">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mt-2">
                                <label class="form-label" for="">Video Category</label>
                                <select name="UpdateVideoCategory" id="update_video_category" class="form-select VideoCat UpdateSelectCategory">
                                    <option hidden value="">Select Category</option>
                                    <option value="3">Projects Presentation</option>
                                    <option value="1">Material Presentation</option>
                                    <option value="2">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-2 VideoFolder UpdateVideoFolder">
                                <label class="form-label" for="">Video Folder</label>
                                <select name="UpdateVideoFolder" id="update_video_folder" class="form-select UpdateSelectFolder">
                                    <option hidden value="">Select Folder</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-2 VideoFolder UpdateVideoSubFolder">
                                <label class="form-label" for="">Sub Folder</label>
                                <select name="UpdateVideoSubFolder" id="update_video_sub_folder" class="form-select UpdateSelectSubFolder">
                                    <option hidden value="">Select Sub Folder</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-2">
                                <label class="form-label" for="">Image Heading</label>
                                <input type="text" name="u_image_heading" id="image_head" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label class="form-label" for="">Image Description</label>
                                <textarea name="u_image_description" id="image_desc" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="img-details mt-2">
                                <!-- <label class="form-label d-none d-md-flex justify-content-center" for="">Upload Picture</label> -->
                                <p class="text-center justify-content-center text-secondary">Upload Picture size should
                                    be less than 2 Mb and having a size of 500*500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <!-- <button type="button" class="btn btnClose px-5 py-2" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-menu px-4 py-2">Update Video</button>
                </div>
                <input type="text" name="UpdateThumbnailUploadImage" id="base64Encodede" hidden>

            </form>
        </div>
    </div>
</div>


<!-- Crop Modal -->
<div class="modal fade" id="modalcropr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="" id="usample_image" />
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
                <button type="button" class="btn btn-primary" id="ucrop">Crop</button>
            </div>
        </div>
    </div>
</div>



<?php

include '../MAIN/Dbconfig.php';


if (isset($_POST['VideoData'])) {


    $FetchVideos = mysqli_query($con, "SELECT V.videoId,V.videoName,V.videoHeader,V.videoDescription,V.videoThumbnail,C.categoryName,F.folderName,S.subFolderName FROM video_table V LEFT JOIN category_table C ON V.videoCategory = C.id LEFT JOIN folder_table F ON V.videoFolder = F.id LEFT JOIN subfolder_table S ON V.videoSubFolder = S.id");
    foreach ($FetchVideos as $FetchResult) {
?>

        <div class="col-xl-4 col-lg-6 col-12" id="ShowImages">
            <div class="card shadow p-0 mt-4">
                <div class="card-body p-0">
                    <a class="popup-video VideoThumbnail" href="../VIDEOS/<?= $FetchResult["videoName"] ?>">
                        <img src="../THUMBNAILS/<?= $FetchResult["videoThumbnail"] ?>" class="img-fluid videoThumbnailImage" alt="event">
                        <div class="videoOverlay"> <img src="../img/play.png"> </div>
                    </a>
                </div>
                <div class="card-footer">

                    <div class="d-flex justify-content-between">
                        <button class="btn p-2 actionButtons editvideo" value="<?= $FetchResult['videoId']; ?>"> <i style="vertical-align: middle;" class="material-icons">edit</i> Edit </button>
                        <button class="btn p-2 actionButtons DeleteVideo deleteLink" value="<?= $FetchResult['videoId']; ?>"> <i style="vertical-align: middle;" class="material-icons">remove_circle</i> Delete </button>
                    </div>

                    <h5 class="mt-3 ps-3 mb-1"><b>
                            <?= $FetchResult["videoHeader"] ?>
                        </b></h5>
                    <p class="p-2 ps-3 videoDescrip">
                        <?= $FetchResult["videoDescription"] ?>
                    </p>

                    <hr>

                    <p class="text-muted">
                        <?php
                        // if ($FetchResult["videoCategory"] == 2) {
                        //     echo "Others";
                        // } elseif ($FetchResult["videoCategory"] == 1) {
                        //     if ($FetchResult["videoFolder"] == 1) {
                        //         echo "Material Presentation > BUV 4 Layer Water Proofings";
                        //     } elseif ($FetchResult["videoFolder"] == 2) {
                        //         echo "Material Presentation > BUV Tile Adhesives";
                        //     } else {
                        //         echo "Material Presentation > BUV App Mineral Membrane Water Proofing";
                        //     }
                        // } elseif ($FetchResult["videoCategory"] == 3) {
                        //     if ($FetchResult["videoFolder"] == 1) {
                        //         echo "Projects Presentation > BUV 4 Layer Water Proofings";
                        //     } elseif ($FetchResult["videoFolder"] == 2) {
                        //         echo "Projects Presentation > BUV Tile Adhesives";
                        //     } else {
                        //         echo "Projects Presentation > BUV App Mineral Membrane Water Proofing";
                        //     }
                        // }

                        if($FetchResult["categoryName"] != ''){
                            $ShowDirectory = $FetchResult["categoryName"];
                            if($FetchResult["folderName"] != ''){
                                $ShowDirectory .= ' > '.$FetchResult["folderName"];
                                if($FetchResult["subFolderName"] != ''){
                                    $ShowDirectory .= ' > '.$FetchResult["subFolderName"];
                                }
                            }
                        }


                        echo $ShowDirectory;

                        ?>
                    </p>

                </div>
            </div>


        </div>





<?php
    }
}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="https://unpkg.com/cropperjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>
<script src="https://unpkg.com/dropzone"></script>


<script>
    $(document).on('click', '.editvideo', function() {
        var EditVdo = $(this).val();
        $.ajax({
            type: "POST",
            url: "MasterOperations.php",
            data: {
                EditVdo: EditVdo
            },
            success: function(data) {
                console.log(data);
                var response = JSON.parse(data);
                $('#modalupdate').modal('show');
                $("#uvideoid").val(response.uvideoid);
                $("#photo_img").attr("src", "../THUMBNAILS/" + response.uthumbname);
                $("#image_head").val(response.uheader);
                $("#image_desc").val(response.udescription);
                $("#update_video_category").val(response.ucategory).change();
                $.ajax({
                    method: "POST",
                    url: "MasterExtras.php",
                    data: {
                        ShowFolder: response.ucategory
                    },
                    success: function(data) {
                        console.log(data);
                        $('.UpdateSelectFolder').html(data);
                        $("#update_video_folder").val(response.ufolder).change();
                        $.ajax({
                            method: "POST",
                            url: "MasterExtras.php",
                            data: {
                                ShowSubFolder: response.ufolder
                            },
                            success: function(data) {
                                console.log(data);
                                $('.UpdateSelectSubFolder').html(data);
                                $("#update_video_sub_folder").val(response.videoSubFolder).change();
                            }
                        });
                    }
                });
                // if (response.ucategory != 2) {
                //     $(".UpdateVideoFolder").show();
                //     $("#update_video_folder").val(response.ufolder).change();
                // } else {
                //     $(".UpdateVideoFolder").hide();
                // }

            },
        });
    });




    function revertPreview() {
        var newpreview = document.getElementById("photo_img");
        newpreview.src = '../img/ImageCrop.png';
    }



    var $modal = $('#modalcropr');
    var image = document.getElementById('usample_image');
    var cropper;


    //$("body").on("change", ".image", function(e){
    $('#thumbnail_in').change(function(event) {
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

    $("#ucrop").click(function() {
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
                $('#base64Encodede').val(base64data);
                //console.log(base64data);
                $('#photo_img').attr('src', base64data);

            }
        }, 'image/jpeg', 1);

        $modal.modal('hide');

    });


    /* Update item Start */
    $(function() {

        let validator = $('#upd_video').jbvalidator({
            //language: 'dist/lang/en.json',
            successClass: false,
            html5BrowserDefault: true
        });


        $(document).on('submit', '#upd_video', (function(e) {
            e.preventDefault();
            var VideoData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
                data: VideoData,
                beforeSend: function() {
                    $('#upd_video').addClass("disable");
                },
                success: function(data) {
                    console.log(data);
                    $('#upd_video').removeClass("disable");
                    $('#thumbnail_in').val('');
                    $('#uvideo_input').val('');
                    $('#base64Encodede').val('');
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







    $('.DeleteVideo').click(function() {
        var VideoDeleteId = $(this).val();
        if (confirm('Are you sure you want to delete this video') == true) {
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
                data: {
                    VideoDeleteId: VideoDeleteId
                },
                beforeSend: function() {
                    $('#update_Video').addClass("disable");
                },
                success: function(data) {
                    console.log(data);
                    $('#update_Video').removeClass("disable");
                    var response = JSON.parse(data);
                    if (response.delVideo == "1") {
                        toastr.success("Successfully Deleted Video");
                        ViewVideos();
                    } else if (response.delVideo == "2") {
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

    $('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
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
</script>