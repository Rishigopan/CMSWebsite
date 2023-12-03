<?php

include '../MAIN/Dbconfig.php';
$TodayDate = date('Y-m-d');

if (isset($_POST['ImageData'])) {


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
            <div class="card ImageCard">
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
                            <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                <img class="ImageSingle" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                            </a>';
                        }
                    } elseif ($ImageCount == 2) {
                        echo '<div class="row g-0">';
                        $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId'");
                        foreach ($FindAllImages as $FindAllImagesResult) {
                            echo '
                                <div class="col-6">
                                    <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                        <img class="ImageDouble" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
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
                                    <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                        <img class="ImageQuadruple" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                    </a>
                                </div>
                            ';
                        }

                        $FindAllImages = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$ImageId' ORDER BY id DESC LIMIT 1 ");
                        foreach ($FindAllImages as $FindAllImagesResult) {
                            echo '
                                <div class="col-12">
                                    <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                        <img class="ImageQuadruple" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
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
                                    <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                        <img class="ImageQuadruple" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
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
                                <a href="../THUMBNAILS/<?= $FindAllImagesResult["imageName"] ?>" class="glightbox" data-gallery="gallery<?= $ImageId ?>">
                                    <img class="ImageQuadruple <?php if ($ImageExtra == 4) {
                                                                    echo "OtherImages";
                                                                }  ?>   " src="../THUMBNAILS/<?= $FindAllImagesResult["imageName"] ?>">
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
                                    <a href="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery' . $ImageId . '">
                                        <img class="ImageQuadruple" src="../THUMBNAILS/' . $FindAllImagesResult["imageName"] . '">
                                    </a>
                                </div>
                            ';
                        }
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="card-footer">
                    <?php

                    if ($Days == 0) {
                        echo 'Today';
                    } else {
                        echo  $Days . ' Days ago';
                    }
                    ?>

                    <hr class=" p-0">

                    <div class="d-flex justify-content-between">
                        <a class="btn p-1 m-0 actionButtons" href="UpdateMultipleImages.php?ImgId=<?= $ImageId ?>"> <i style="vertical-align: middle;" class="material-icons">edit</i> Edit </a>
                        <button class="btn p-1 m-0 actionButtons DeleteButton" value="<?= $ImageId ?>"> <i style="vertical-align: middle;" class="material-icons">remove_circle</i> Delete </button>
                    </div>


                </div>
            </div>
        </div>

    <?php
    }



}

?>




<script>
    $('.DeleteImage').click(function() {
        var ImageDeleteId = $(this).val();
        if (confirm('Are you sure you want to delete this image') == true) {
            $.ajax({
                type: "POST",
                url: "MasterOperations.php",
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
        }
        else{
            toastr.info("Cancelled");
        }


    });
</script>