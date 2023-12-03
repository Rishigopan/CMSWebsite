<?php


include '../MAIN/Dbconfig.php';

$TodayDate = date('Y-m-d');

function FilterData($Data){
    $Data = trim($Data);
    return $Data;
}


//Multiple Image upload with title and description
if (!empty($_FILES["ImageGallery"]["name"])) {
     
    $Folder = "../THUMBNAILS/";
    $ImageTitle  = $_POST['ImageTitle'];
    $ImageDescription = $_POST['ImageDesc'];


    $UploadImages = 0;
    $ImageCount = count($_FILES['ImageGallery']['tmp_name']);
    $FindImageMax = mysqli_query($con, "SELECT MAX(id) FROM imagegallery");
    foreach($FindImageMax as $FindImageMaxResult){
        $ImageMaxId = $FindImageMaxResult['MAX(id)'] + 1;
    }

    $InsertIntoTable = mysqli_query($con, "INSERT INTO `imagegallery` (`id`,`imageTitle`,`imageDesc`,`imageDate`) VALUES('$ImageMaxId','$ImageTitle','$ImageDescription','$TodayDate')");

    if($InsertIntoTable){
        foreach ($_FILES['ImageGallery']['tmp_name'] as $Key => $Temp) {
            $RandNumber = rand(10000, 99999);
            $ImageName = $_FILES['ImageGallery']['name'][$Key];
            $ImageExtension = pathinfo($ImageName, PATHINFO_EXTENSION);
            $NewImageName = $ImageMaxId . '_' . $RandNumber . '.' . $ImageExtension;
            $ImageTempName = $_FILES['ImageGallery']['tmp_name'][$Key];
            if (move_uploaded_file($ImageTempName, $Folder . $NewImageName)) {
                $ImageInsert =  mysqli_query($con, "INSERT INTO `imagetable` (`imageId`,`imageName`)VALUES('$ImageMaxId', '$NewImageName')");
                if($ImageInsert){
                    $UploadImages ++;
                }
            } else {
                //echo "multi upload Failed";
            }
        }

        if($UploadImages == $ImageCount){
            echo json_encode(array('ImageUploadStatus' => 1));
        }else{
            echo json_encode(array('ImageUploadStatus' => 2));
        }
    }


    



    

}




//Multiple Image update with title and description if no image is uploaded
if (isset($_POST['UpdateMainImageIdNoImage'])) {
     
    $UdpateFolder = "../THUMBNAILS/";
    $UpdateMainImageId  = $_POST['UpdateMainImageIdNoImage'];
    $UpdateImageTitle  =  FilterData($_POST['UpdateImageTitleNoImage']);
    $UpdateImageDescription = FilterData($_POST['UpdateImageDescNoImage']);
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
    $FindImagesCount = mysqli_query($con, "SELECT COUNT(id) FROM imagetable WHERE imageId = '$UpdateMainImageId'");
    foreach($FindImagesCount as $FindImagesCountResult){
        $UpdateImageCount = $FindImagesCountResult['COUNT(id)'];
    }

    $ListAllImages = mysqli_query($con, "SELECT id FROM imagetable WHERE imageId = '$UpdateMainImageId'");
    foreach($ListAllImages as $ListAllImagesResults){
        $TempImageId = $ListAllImagesResults['id'];
        $CheckIfExistsInTemp = mysqli_query($con,"SELECT * FROM imagetabletemp WHERE id = '$TempImageId'");
        if(mysqli_num_rows($CheckIfExistsInTemp) > 0){
            $Incrementer++;
        }else{
            $DeleteSubImages = mysqli_query($con, "DELETE FROM imagetable WHERE imageId = '$UpdateMainImageId' AND id = '$TempImageId'");
            if($DeleteSubImages){
                $Incrementer++;
            }
        }
    }


    if($UpdateImageCount == $Incrementer){
        $UpdateImageContent =  mysqli_query($con, "UPDATE imagegallery SET imageTitle = '$UpdateImageTitle' , imageDesc = '$UpdateImageDescription', imageDate = '$TodayDate' WHERE id = '$UpdateMainImageId'");
        if($UpdateImageContent){
            echo json_encode(array('UpdateImageEmpty' => 1));
        }else{
            echo json_encode(array('UpdateImageEmpty' => 2));
        }
    }

    


    // $UpdateUploadImages = 0;
    // $ImageCount = count($_FILES['UpdateImageGallery']['tmp_name']);
    // $FindImageMax = mysqli_query($con, "SELECT MAX(id) FROM imagegallery");
    // foreach($FindImageMax as $FindImageMaxResult){
    //     $ImageMaxId = $FindImageMaxResult['MAX(id)'] + 1;
    // }

    // $InsertIntoTable = mysqli_query($con, "INSERT INTO `imagegallery` (`id`,`imageTitle`,`imageDesc`,`imageDate`) VALUES('$ImageMaxId','$ImageTitle','$ImageDescription','$TodayDate')");

    // if($InsertIntoTable){
    //     foreach ($_FILES['ImageGallery']['tmp_name'] as $Key => $Temp) {
    //         $RandNumber = rand(10000, 99999);
    //         $ImageName = $_FILES['ImageGallery']['name'][$Key];
    //         $ImageExtension = pathinfo($ImageName, PATHINFO_EXTENSION);
    //         $NewImageName = $ImageMaxId . '_' . $RandNumber . '.' . $ImageExtension;
    //         $ImageTempName = $_FILES['ImageGallery']['tmp_name'][$Key];
    //         if (move_uploaded_file($ImageTempName, $Folder . $NewImageName)) {
    //             $ImageInsert =  mysqli_query($con, "INSERT INTO `imagetable` (`imageId`,`imageName`)VALUES('$ImageMaxId', '$NewImageName')");
    //             if($ImageInsert){
    //                 $UploadImages ++;
    //             }
    //         } else {
    //             //echo "multi upload Failed";
    //         }
    //     }

    //     if($UploadImages == $ImageCount){
    //         echo json_encode(array('ImageUploadStatus' => 1));
    //     }else{
    //         echo json_encode(array('ImageUploadStatus' => 2));
    //     }
    // }

}





//Multiple Image update with title and description 
if (isset($_FILES['UpdateImageGallery']['name'])) {
     
    $UpdateFolder = "../THUMBNAILS/";
    $UpdateMainImageId  = $_POST['UpdateMainImageId'];
    $UpdateImageTitle  =  FilterData($_POST['UpdateImageTitle']);
    $UpdateImageDescription = FilterData($_POST['UpdateImageDesc']);

    $Incrementer = 0;
    $FindImagesCount = mysqli_query($con, "SELECT COUNT(id) FROM imagetable WHERE imageId = '$UpdateMainImageId'");
    foreach($FindImagesCount as $FindImagesCountResult){
        $UpdateImageCount = $FindImagesCountResult['COUNT(id)'];
    }

    $ListAllImages = mysqli_query($con, "SELECT id FROM imagetable WHERE imageId = '$UpdateMainImageId'");
    foreach($ListAllImages as $ListAllImagesResults){
        $TempImageId = $ListAllImagesResults['id'];
        $CheckIfExistsInTemp = mysqli_query($con,"SELECT * FROM imagetabletemp WHERE id = '$TempImageId'");
        if(mysqli_num_rows($CheckIfExistsInTemp) > 0){
            $Incrementer++;
        }else{
            $DeleteSubImages = mysqli_query($con, "DELETE FROM imagetable WHERE imageId = '$UpdateMainImageId' AND id = '$TempImageId'");
            if($DeleteSubImages){
                $Incrementer++;
            }
        }
    }


    if($UpdateImageCount == $Incrementer){
        
        $UpdateUploadImages = 0;
        $UpdateImageCount = count($_FILES['UpdateImageGallery']['tmp_name']);
        foreach ($_FILES['UpdateImageGallery']['tmp_name'] as $Key => $Temp) {
            $UpdateRandNumber = rand(10000, 99999);
            $UpdateImageName = $_FILES['UpdateImageGallery']['name'][$Key];
            $UpdateImageExtension = pathinfo($UpdateImageName, PATHINFO_EXTENSION);
            $UpdateNewImageName = $UpdateMainImageId . '_' . $UpdateRandNumber . '.' . $UpdateImageExtension;
            $UpdateImageTempName = $_FILES['UpdateImageGallery']['tmp_name'][$Key];
            if (move_uploaded_file($UpdateImageTempName, $UpdateFolder . $UpdateNewImageName)) {
                $UpdateImage =  mysqli_query($con, "INSERT INTO `imagetable` (`imageId`,`imageName`)VALUES('$UpdateMainImageId', '$UpdateNewImageName')");
                if($UpdateImage){
                    $UpdateUploadImages ++;
                }
            } else {
                //echo "multi upload Failed";
            }
        }
    

    }



    if($UpdateUploadImages == $UpdateImageCount){
        $UpdateImageContent =  mysqli_query($con, "UPDATE imagegallery SET imageTitle = '$UpdateImageTitle' , imageDesc = '$UpdateImageDescription', imageDate = '$TodayDate' WHERE id = '$UpdateMainImageId'");
        if($UpdateImageContent){
            echo json_encode(array('UpdateImageUploadStatus' => 1));
        }else{
            echo json_encode(array('UpdateImageUploadStatus' => 2));
        }
    }

    


    
}



// Delete Immage
if (isset($_POST['ImageDeleteId'])) {
    $delvalue = $_POST['ImageDeleteId'];


    $FindImages = mysqli_query($con, "SELECT imageName,id FROM imagetable WHERE imageId = '$delvalue'");
    foreach($FindImages as $FindImagesResult){
        $delImage = $FindImagesResult['imageName'];
        $delImageId = $FindImagesResult['id'];
        $delImagePath = "../IMAGES/" . $FindImagesResult['imageName'];
        if ($delImage != null) {
            if(file_exists($delImagePath) == 1){
                clearstatcache();
                if (unlink($delImagePath)) {
                    $delItemWithImage = mysqli_query($con, "DELETE FROM imagetable WHERE id = '$delImageId'");
                } else {
                    $delItemWithImage = mysqli_query($con, "DELETE FROM imagetable WHERE id = '$delImageId'");
                }
            } else {
                $delItemWithImage = mysqli_query($con, "DELETE FROM imagetable WHERE id = '$delImageId'");
            }
        } else {
            $delItemWithImage = mysqli_query($con, "DELETE FROM imagetable WHERE id = '$delImageId'");
        }
    }

    $DeleteFromMainTable = mysqli_query($con, "DELETE FROM imagegallery WHERE id = '$delvalue'");
    if($DeleteFromMainTable){
        echo json_encode(array('delImage' => 1));
    }else{
        echo json_encode(array('delImage' => 2));
    }

    
}


