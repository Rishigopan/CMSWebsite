<?php


include '../MAIN/Dbconfig.php';

$TodayDate = date('Y-m-d');

function FilterData($Data)
{
    $Data = trim($Data);
    return $Data;
}


//Product upload with data and multiple images
if (!empty($_FILES["products"]["name"])) {

    $Folder = "../THUMBNAILS/PRODUCTS/";
    $ImageTitle  = $_POST['title'];
    $ImageDescription = $_POST['description'];
    $ImageAdv  = $_POST['advantage'];
    $ImageCom = $_POST['compliance'];
    $ImageIns  = $_POST['instruction'];
    $ImageApp = $_POST['application'];
    $ImagePac = $_POST['pacakge'];

    $UploadImages = 0;
    $ImageCount = count($_FILES['products']['tmp_name']);
    $FindImageMax = mysqli_query($con, "SELECT MAX(id) FROM products");
    foreach ($FindImageMax as $FindImageMaxResult) {
        $ImageMaxId = $FindImageMaxResult['MAX(id)'] + 1;
    }

    $InsertIntoTable = mysqli_query($con, "INSERT INTO `products`  (`id`, `title`,`description`,`advantage`, `compliance`,`instruction`, `application`, `pacakge`) VALUES('$ImageMaxId','$ImageTitle','$ImageDescription','$ImageAdv','$ImageCom','$ImageIns','$ImageApp','$ImagePac')");

    if ($InsertIntoTable) {
        foreach ($_FILES['products']['tmp_name'] as $Key => $Temp) {
            $RandNumber = rand(10000, 99999);
            $ImageName = $_FILES['products']['name'][$Key];
            $ImageExtension = pathinfo($ImageName, PATHINFO_EXTENSION);
            $NewImageName = $ImageMaxId . '_' . $RandNumber . '.' . $ImageExtension;
            $ImageTempName = $_FILES['products']['tmp_name'][$Key];
            if (move_uploaded_file($ImageTempName, $Folder . $NewImageName)) {
                if ($UploadImages == 0) {
                    $ImageInsert =  mysqli_query($con, "INSERT INTO `producttable` (`imageId`,`imageName`,`activeStatus`)VALUES('$ImageMaxId', '$NewImageName','YES')");
                    if ($ImageInsert) {
                        $UploadImages++;
                    }
                } else {
                    $ImageInsert =  mysqli_query($con, "INSERT INTO `producttable` (`imageId`,`imageName`,`activeStatus`)VALUES('$ImageMaxId', '$NewImageName','NO')");
                    if ($ImageInsert) {
                        $UploadImages++;
                    }
                }
            }
        }

        if ($UploadImages == $ImageCount) {
            echo json_encode(array('ImageUploadStatus' => 1));
        } else {
            echo json_encode(array('ImageUploadStatus' => 2));
        }
    }
}




//Multiple Product Image update with data if no image is uploaded
if (isset($_POST['UpdateMainImageIdNoImage'])) {

    $UdpateFolder = "../THUMBNAILS/PRODUCTS/";
    $UpdateMainImageId  = $_POST['UpdateMainImageIdNoImage'];
    $UpdateImageTitle  =  FilterData($_POST['UpdateImageTitleNoImage']);
    $UpdateImageDescription = FilterData($_POST['UpdateImageDescNoImage']);
    $UpdateImageAdv = FilterData($_POST['UpdateImageAdvNoImage']);
    $UpdateImageCom = FilterData($_POST['UpdateImageComNoImage']);
    $UpdateImageIns = FilterData($_POST['UpdateImageInsNoImage']);
    $UpdateImageApp = FilterData($_POST['UpdateImageAppNoImage']);
    $UpdateImagePac = FilterData($_POST['UpdateImagePacNoImage']);
    //echo $UpdateImageTitle  = "'".$UpdateImageTitle."'";
    // if(FilterData($_POST['UpdateImageTitleNoImage']) == ''){
    //     $UpdateImageTitle = "imageTitle";
    // }else{
    //     $UpdateImageTitle = FilterData($_POST['UpdateImageTitleNoImage']);
    //     $UpdateImageTitle = "'".$UpdateImageTitle."'";
    // }

    // if(FilterData($_POST['UpdateImageDescNoImage']) == ''){
    //     $UpdateImageDescription = "imageDesc";
    // }else{
    //     $UpdateImageDescription = FilterData($_POST['UpdateImageDescNoImage']);
    //     $UpdateImageDescription = "'".$UpdateImageDescription."'";
    // }


    $Incrementer = 0;
    $FindImagesCount = mysqli_query($con, "SELECT COUNT(id) FROM producttable WHERE imageId = '$UpdateMainImageId'");
    foreach ($FindImagesCount as $FindImagesCountResult) {
        $UpdateImageCount = $FindImagesCountResult['COUNT(id)'];
    }

    $ListAllImages = mysqli_query($con, "SELECT id FROM producttable WHERE imageId = '$UpdateMainImageId'");
    foreach ($ListAllImages as $ListAllImagesResults) {
        $TempImageId = $ListAllImagesResults['id'];
        $CheckIfExistsInTemp = mysqli_query($con, "SELECT * FROM producttabletemp WHERE id = '$TempImageId'");
        if (mysqli_num_rows($CheckIfExistsInTemp) > 0) {
            $Incrementer++;
        } else {
            $DeleteSubImages = mysqli_query($con, "DELETE FROM producttable WHERE imageId = '$UpdateMainImageId' AND id = '$TempImageId'");
            if ($DeleteSubImages) {
                $Incrementer++;
            }
        }
    }





    if ($UpdateImageCount == $Incrementer) {

        $CheckIfAnyPrimary = mysqli_query($con, "SELECT activeStatus FROM producttable WHERE imageId = '$UpdateMainImageId' AND activeStatus = 'YES'");
        if (mysqli_num_rows($CheckIfAnyPrimary) > 0) {
            $UpdateImageContent =  mysqli_query($con, "UPDATE products SET title = '$UpdateImageTitle' , description = '$UpdateImageDescription',advantage ='$UpdateImageAdv' ,compliance ='$UpdateImageCom',instruction='$UpdateImageIns', application='$UpdateImageApp',pacakge=' $UpdateImagePac' WHERE id = '$UpdateMainImageId'");
            if ($UpdateImageContent) {
                echo json_encode(array('UpdateImageEmpty' => 1));
            } else {
                echo json_encode(array('UpdateImageEmpty' => 2));
            }
        } else {
            $SelectFirstImage = mysqli_query($con, "SELECT id FROM producttable WHERE imageId = '$UpdateMainImageId' ORDER BY id ASC LIMIT 1");
            foreach ($SelectFirstImage as $SelectFirstImageResult) {
                $FirstImageId = $SelectFirstImageResult['id'];
            }
            $MakeAnyPrimary = mysqli_query($con, "UPDATE producttable SET activeStatus = 'YES' WHERE id = '$FirstImageId'");
            if ($MakeAnyPrimary) {
                $UpdateImageContent =  mysqli_query($con, "UPDATE products SET title = '$UpdateImageTitle' , description = '$UpdateImageDescription',advantage ='$UpdateImageAdv' ,compliance ='$UpdateImageCom',instruction='$UpdateImageIns', application='$UpdateImageApp',pacakge=' $UpdateImagePac' WHERE id = '$UpdateMainImageId'");
                if ($UpdateImageContent) {
                    echo json_encode(array('UpdateImageEmpty' => 1));
                } else {
                    echo json_encode(array('UpdateImageEmpty' => 2));
                }
            } else {
                echo json_encode(array('UpdateImageEmpty' => 2));
            }
        }

        // $UpdateImageContent =  mysqli_query($con, "UPDATE products SET title = '$UpdateImageTitle' , description = '$UpdateImageDescription',advantage ='$UpdateImageAdv' ,compliance ='$UpdateImageCom',instruction='$UpdateImageIns', application='$UpdateImageApp',pacakge=' $UpdateImagePac' WHERE id = '$UpdateMainImageId'");
        // if ($UpdateImageContent) {
        //     echo json_encode(array('UpdateImageEmpty' => 1));
        // } else {
        //     echo json_encode(array('UpdateImageEmpty' => 2));
        // }
    }
}





//Multiple Product Image update with data
if (isset($_FILES['UpdateProducts']['name'])) {

    $UpdateFolder = "../THUMBNAILS/PRODUCTS/";
    $UpdateMainImageId  = $_POST['UpdateMainImageId'];
    $UpdateImageTitle  =  FilterData($_POST['UpdateImageTitle']);
    $UpdateImageDescription = FilterData($_POST['UpdateImageDesc']);
    $UpdateImageAdv  =  FilterData($_POST['UpdateImageAdv']);
    $UpdateImageCom = FilterData($_POST['UpdateImageCom']);
    $UpdateImageIns  =  FilterData($_POST['UpdateImageIns']);
    $UpdateImageApp = FilterData($_POST['UpdateImageApp']);
    $UpdateImagePac =  FilterData($_POST['UpdateImagePac']);


    $Incrementer = 0;

    $FindImagesCount = mysqli_query($con, "SELECT COUNT(id) FROM producttable WHERE imageId = '$UpdateMainImageId'");
    foreach ($FindImagesCount as $FindImagesCountResult) {
        $UpdateImageCount = $FindImagesCountResult['COUNT(id)'];
    }

    $ListAllImages = mysqli_query($con, "SELECT id FROM producttable WHERE imageId = '$UpdateMainImageId'");
    foreach ($ListAllImages as $ListAllImagesResults) {
        $TempImageId = $ListAllImagesResults['id'];
        $CheckIfExistsInTemp = mysqli_query($con, "SELECT * FROM producttabletemp WHERE id = '$TempImageId'");
        if (mysqli_num_rows($CheckIfExistsInTemp) > 0) {

            $Incrementer++;
        } else {
            $DeleteSubImages = mysqli_query($con, "DELETE FROM producttable WHERE imageId = '$UpdateMainImageId' AND id = '$TempImageId'");
            if ($DeleteSubImages) {
                $Incrementer++;
            }
        }
    }

    if ($UpdateImageCount == $Incrementer) {

        $UpdateUploadImages = 0;
        $UpdateImageCount = count($_FILES['UpdateProducts']['tmp_name']);
        foreach ($_FILES['UpdateProducts']['tmp_name'] as $Key => $Temp) {
            $UpdateRandNumber = rand(10000, 99999);
            $UpdateImageName = $_FILES['UpdateProducts']['name'][$Key];
            $UpdateImageExtension = pathinfo($UpdateImageName, PATHINFO_EXTENSION);
            $UpdateNewImageName = $UpdateMainImageId . '_' . $UpdateRandNumber . '.' . $UpdateImageExtension;
            $UpdateImageTempName = $_FILES['UpdateProducts']['tmp_name'][$Key];
            if (move_uploaded_file($UpdateImageTempName, $UpdateFolder . $UpdateNewImageName)) {
                $UpdateImage =  mysqli_query($con, "INSERT INTO `producttable` (`imageId`,`imageName`,`activeStatus`)VALUES('$UpdateMainImageId', '$UpdateNewImageName','NO')");
                if ($UpdateImage) {
                    $UpdateUploadImages++;
                }
            } else {
                //echo "multi upload Failed";
            }
        }
    }

    if ($UpdateUploadImages == $UpdateImageCount) {


        $CheckIfAnyPrimary = mysqli_query($con, "SELECT activeStatus FROM producttable WHERE imageId = '$UpdateMainImageId' AND activeStatus = 'YES'");
        if (mysqli_num_rows($CheckIfAnyPrimary) > 0) {
            $UpdateImageContent =  mysqli_query($con, "UPDATE products SET title = '$UpdateImageTitle' , description = '$UpdateImageDescription', advantage ='$UpdateImageAdv', compliance ='$UpdateImageCom', instruction ='$UpdateImageIns', application ='$UpdateImageApp', pacakge='$UpdateImagePac' WHERE id = '$UpdateMainImageId'");
            if ($UpdateImageContent) {
                echo json_encode(array('UpdateImageUploadStatus' => 1));
            } else {
                echo json_encode(array('UpdateImageUploadStatus' => 2));
            }
        } else {
            $SelectFirstImage = mysqli_query($con, "SELECT id FROM producttable WHERE imageId = '$UpdateMainImageId' ORDER BY id ASC LIMIT 1");
            foreach ($SelectFirstImage as $SelectFirstImageResult) {
                $FirstImageId = $SelectFirstImageResult['id'];
            }
            $MakeAnyPrimary = mysqli_query($con, "UPDATE producttable SET activeStatus = 'YES' WHERE id = '$FirstImageId'");
            if ($MakeAnyPrimary) {
                $UpdateImageContent =  mysqli_query($con, "UPDATE products SET title = '$UpdateImageTitle' , description = '$UpdateImageDescription', advantage ='$UpdateImageAdv', compliance ='$UpdateImageCom', instruction ='$UpdateImageIns', application ='$UpdateImageApp', pacakge='$UpdateImagePac' WHERE id = '$UpdateMainImageId'");
                if ($UpdateImageContent) {
                    echo json_encode(array('UpdateImageUploadStatus' => 1));
                } else {
                    echo json_encode(array('UpdateImageUploadStatus' => 2));
                }
            } else {
                echo json_encode(array('UpdateImageUploadStatus' => 2));
            }
        }
    }
}





// Delete Products
if (isset($_POST['ProductDeleteId'])) {
    $delvalue = $_POST['ProductDeleteId'];
    $FindImages = mysqli_query($con, "SELECT imageName,id FROM producttable WHERE imageId = '$delvalue'");
    foreach ($FindImages as $FindImagesResult) {
        $delImage = $FindImagesResult['imageName'];
        $delImageId = $FindImagesResult['id'];
        $delImagePath = "../THUMBNAILS/PRODUCTS/" . $FindImagesResult['imageName'];
        if ($delImage != null) {
            if (file_exists($delImagePath) == 1) {
                clearstatcache();
                if (unlink($delImagePath)) {
                    $delItemWithImage = mysqli_query($con, "DELETE FROM producttable WHERE id = '$delImageId'");
                } else {
                    $delItemWithImage = mysqli_query($con, "DELETE FROM producttable WHERE id = '$delImageId'");
                }
            } else {
                $delItemWithImage = mysqli_query($con, "DELETE FROM producttable WHERE id = '$delImageId'");
            }
        } else {
            $delItemWithImage = mysqli_query($con, "DELETE FROM producttable WHERE id = '$delImageId'");
        }
    }

    $DeleteFromMainTable = mysqli_query($con, "DELETE FROM products WHERE id = '$delvalue'");
    if ($DeleteFromMainTable) {
        echo json_encode(array('delProduct' => 1));
    } else {
        echo json_encode(array('delProduct' => 2));
    }
}



//Main main image
if (isset($_POST['ProductMain'])) {

    $MainImageId = $_POST['ProductMain'];
    $ProductChangeId = $_POST['ProductChangeId'];

    $RemoveAllMain = mysqli_query($con, "UPDATE producttable SET activeStatus = 'NO' WHERE imageId = '$ProductChangeId'");
    if ($RemoveAllMain) {
        $MakeAnyPrimary = mysqli_query($con, "UPDATE producttable SET activeStatus = 'YES' WHERE id = '$MainImageId'");
        if ($MakeAnyPrimary) {
            echo json_encode(array('MainProduct' => 1));
        } else {
            echo json_encode(array('MainProduct' => 2));
        }
    }
}
