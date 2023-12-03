<?php

include '../MAIN/Dbconfig.php';
$TodayDate = date('Y-m-d');

if (isset($_POST['ProductData'])) {


   
    $FindImages = mysqli_query($con, "SELECT * FROM products");
    foreach ($FindImages as $FindImagesResult) {
        $ImageId = $FindImagesResult['id'];
        $ImageTitle = $FindImagesResult['title'];
        $ImageDesc = $FindImagesResult['description'];

    ?>

        <div class="col-xl-3 col-md-6 col-12">


            <div class="card ProductCard shadow mb-5">
                <div class="card-body">
                    <div id="Carousel<?= $ImageId ?>" class="carousel slide" data-bs-ride="false" >

                        <div class="carousel-inner">
                            <?php
                            $FindAllImages = mysqli_query($con, "SELECT * FROM producttable WHERE imageId = '$ImageId' AND activeStatus = 'YES'");
                            foreach ($FindAllImages as $FindAllImagesResult) {
                            ?>
                                <div class="carousel-item active">
                                    <img src="../THUMBNAILS/PRODUCTS/<?= $FindAllImagesResult['imageName'] ?>" class="img-fluid d-block w-100">
                                    <div class="carousel-caption text-center">
                                        <button class="MakeMain btn rounded-pill text-white bg-success" value="<?= $FindAllImagesResult['id'] ?>" id="<?= $FindImagesResult['id'] ?>">Make Main</button>
                                    </div>
                                </div>
                            <?php

                            }
                            $FindAllImages = mysqli_query($con, "SELECT * FROM producttable WHERE imageId = '$ImageId' AND activeStatus = 'NO'");
                            foreach ($FindAllImages as $FindAllImagesResult) {
                            ?>
                                <div class="carousel-item">
                                    <img src="../THUMBNAILS/PRODUCTS/<?= $FindAllImagesResult['imageName'] ?>" class="img-fluid d-block w-100">
                                    <div class="carousel-caption text-center">
                                        <button class="MakeMain btn rounded-pill text-white bg-success" value="<?= $FindAllImagesResult['id'] ?>" id="<?= $FindImagesResult['id'] ?>">Make Main</button>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>


                        <button class="carousel-control-prev" type="button" data-bs-target="#Carousel<?= $ImageId ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#Carousel<?= $ImageId ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-footer bg-white">
                        <strong > <?= $ImageTitle ?> </strong>
                        <div class="d-flex justify-content-between mt-2">
                            <a class="btn p-1 m-0 actionButtons" href="UpdateProduct.php?ImgId=<?= $ImageId ?>"> <i style="vertical-align: middle;" class="material-icons">edit</i> Edit </a>
                            <button class="btn p-1 m-0 actionButtons DeleteButton" value="<?= $ImageId ?>"> <i style="vertical-align: middle;" class="material-icons">remove_circle</i> Delete </button>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    <?php
    }
    
}

?>




<script>




</script>