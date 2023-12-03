<?php

include '../MAIN/Dbconfig.php';



//$writer_id = $_COOKIE['custidcookie'];




//ADD Image
if (isset($_POST["uploadImage"]) && !empty($_POST["uploadImage"])) {


    $data = $_POST["uploadImage"];


    if (!empty($_FILES['item_image']['name']) && !empty($data)) {

        $max_product_id = mysqli_query($con, "SELECT MAX(item_id) AS max_itemId FROM item_master");
        foreach ($max_product_id as $max_prid_result) {
            $max_prid = $max_prid_result['max_itemId'] + 1;
        }


        $image_array_1 = explode(";", $data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $itemImageName = '../IMAGES/' . $max_prid . '.png';
        $final_image_name = $max_prid . ".png";

        if (file_put_contents($itemImageName, $data)) {

            $product_add_query = mysqli_query($con, "INSERT INTO item_master (item_id,item_image,publish_status) 
                    VALUES ('$max_prid','$final_image_name','NO')");

            if ($product_add_query) {
                echo json_encode(array('addpr' => 1));
            } else {
                echo json_encode(array('addpr' => 2));
            }
        } else {
            echo json_encode(array('addpr' => 2));
        }
    } else {

        echo json_encode(array('addpr' => 2));
    }
}






//update Image
if (isset($_POST['updateuploadImage']) && !empty($_POST['updateuploadImage'])) {
    $updateImageId = $_POST['UpdateImageId'];
    $updatedata = $_POST["updateuploadImage"];



    if (!empty($_FILES['updateitem_image']['name']) && !empty($updatedata)) {

        $update_image_array_1 = explode(";", $updatedata);
        $update_image_array_2 = explode(",", $update_image_array_1[1]);
        $updatedata = base64_decode($update_image_array_2[1]);
        $updateitemImageName = '../IMAGES/' . $updateImageId . '.png';
        $update_final_image_name = $updateImageId . ".png";


        $itemFetch_query = mysqli_query($con, "SELECT item_image FROM item_master WHERE item_id = '$updateImageId'");
        foreach ($itemFetch_query as $varItem) {
            $imageValue = $varItem['item_image'];
            $imagePath = "../IMAGES/" . $varItem['item_image'];
        }
        if ($imageValue != null) {
            if (unlink($imagePath)) {

                if (file_put_contents($updateitemImageName, $updatedata)) {
                    $image_update_query = mysqli_query($con, "UPDATE item_master SET item_image = '$update_final_image_name' WHERE item_id = '$updateImageId'");
                    if ($image_update_query) {
                        echo json_encode(array('updateImage' => 1));
                    } else {
                        echo json_encode(array('updateImage' => 2));
                    }
                }
            } else {
                echo json_encode(array('updateImage' => 2));
            }
        } else {
            if (file_put_contents($updateitemImageName, $updatedata)) {
                $image_update_query = mysqli_query($con, "UPDATE item_master SET item_image = '$update_final_image_name' WHERE item_id = '$updateImageId'");

                if ($image_update_query) {
                    echo json_encode(array('updateImage' => 1));
                } else {
                    echo json_encode(array('updateImage' => 2));
                }
            }
        }
    } else {

        echo json_encode(array('updateImage' => 2));
    }
}




//Delete Image
if (isset($_POST['ImageDeleteId'])) {
    $delvalue = $_POST['ImageDeleteId'];


    $delImage_query = mysqli_query($con, "SELECT item_image FROM item_master WHERE item_id = '$delvalue'");
    foreach ($delImage_query as $delImages) {
        $delImage = $delImages['item_image'];
        $delImagePath = "../IMAGES/" . $delImages['item_image'];
    }
    if ($delImage != null) {
        if (unlink($delImagePath)) {

            $delItemWithImage = mysqli_query($con, "DELETE FROM item_master WHERE item_id = '$delvalue'");
            if ($delItemWithImage) {
                echo json_encode(array('delImage' => 1));
            } else {
                echo json_encode(array('delImage' => 2));
            }
        } else {
            echo json_encode(array('delImage' => 2));
        }
    } else {
        $delItemWithImage = mysqli_query($con, "DELETE FROM item_master WHERE item_id = '$delvalue'");
        if ($delItemWithImage) {
            echo json_encode(array('delImage' => 1));
        } else {
            echo json_encode(array('delImage' => 2));
        }
    }
}



///////////////////////////////////Video Operations//////////////////////////////////////

//Add Video
if (isset($_POST['ThumbnailUploadImage']) && !empty($_POST['ThumbnailUploadImage'])) {

    $ThumbData = $_POST["ThumbnailUploadImage"];
    $videoHeading = $_POST["image_heading"];
    $videoDescription = $_POST["image_description"];
    $VideoCategory = $_POST["videoCategory"];

    if (!empty($_POST["VideoFolder"])) {
        $VideoFolder = $_POST["VideoFolder"];
    } else {
        $VideoFolder = 0;
    }

    if (!empty($_POST["VideoSubFolder"])) {
        $VideoSubFolder = $_POST["VideoSubFolder"];
    } else {
        $VideoSubFolder = 0;
    }

    if (!empty($_FILES['VideoFile']['name']) && !empty($ThumbData)) {

        $fetch_max_video_id = mysqli_query($con, "SELECT MAX(videoId) AS max_VideoId FROM video_table");
        foreach ($fetch_max_video_id as $max_video_id_result) {
            $max_video_id = $max_video_id_result['max_VideoId'] + 1;
        }

        $six_digit_random_number = random_int(100000, 999999);
        $image_array_1 = explode(";", $ThumbData);
        $image_array_2 = explode(",", $image_array_1[1]);
        $ThumbData = base64_decode($image_array_2[1]);
        $ThumbImageLocation = '../THUMBNAILS/' . $max_video_id . '-' . $six_digit_random_number . '.jpg';
        $final_thumb_image_name = $max_video_id . '-' . $six_digit_random_number . '.jpg';



        $VideoSize = $_FILES['VideoFile']['size'];
        $VideoName = $_FILES['VideoFile']['name'];
        $VideoTempData = $_FILES['VideoFile']['tmp_name'];
        $VideoExtension = pathinfo($VideoName, PATHINFO_EXTENSION);
        $VideoFinalName = $max_video_id . '-' . $six_digit_random_number . '.' . $VideoExtension;
        $VideoLocation = '../VIDEOS/' . $VideoFinalName;
        $VideoFormatArray  = array('mp4', 'mkv', 'webm', 'avi');



        // if ($VideoSize < 10242880) {
            if (in_array($VideoExtension, $VideoFormatArray)) {

                if (file_put_contents($ThumbImageLocation, $ThumbData)) {

                    if (move_uploaded_file($VideoTempData, $VideoLocation)) {

                        $video_add_query = mysqli_query($con, "INSERT INTO `video_table` (`videoId`,`videoName`,`publishedStatus`,`videoThumbnail`,`videoHeader`,`videoDescription`,`videoFolder`,`videoCategory`,`videoSubFolder`) 
                        VALUES ('$max_video_id','$VideoFinalName','1','$final_thumb_image_name','$videoHeading','$videoDescription','$VideoFolder','$VideoCategory','$VideoSubFolder')");
                        if ($video_add_query) {
                            echo json_encode(array('addVideo' => 1));
                        } else {
                            echo json_encode(array('addVideo' => 2)); //error in db
                        }
                    } else {
                        echo json_encode(array('addVideo' => 3)); //error uploading file
                    }
                } else {
                    echo json_encode(array('addVideo' => 3)); //error uploading file
                }
            } else {
                echo json_encode(array('addVideo' => 5)); //File extension not supported
            }
        // } else {
        //     echo json_encode(array('addVideo' => 4)); //video size greater than 5 mb
        // }
    } else {

        echo json_encode(array('addVideo' => 6)); //File Cannot be empty
    }
}



//Edit Video
if (isset($_POST['EditVdo'])) {
    $editval = $_POST['EditVdo'];
    $editresultquery = mysqli_query($con, "SELECT * FROM video_table WHERE videoId = '$editval'");
    foreach ($editresultquery as $edivvideoresult) {
        $Videoid = $edivvideoresult['videoId'];
        $ThumbnailName = $edivvideoresult['videoThumbnail'];
        $VideoName = $edivvideoresult['videoName'];
        $VideoHeader = $edivvideoresult['videoHeader'];
        $VideoDescription = $edivvideoresult['videoDescription'];
        $VideoFolder = $edivvideoresult['videoFolder'];
        $VideoSubFolder = $edivvideoresult['videoSubFolder'];
        $VideoCategory = $edivvideoresult['videoCategory'];
        echo json_encode(array('uvideoid' => $Videoid, 'uvdoname' => $VideoName, 'uthumbname' => $ThumbnailName, 'uheader' => $VideoHeader, 'udescription' => $VideoDescription, 'ucategory' => $VideoCategory, 'ufolder' => $VideoFolder, 'videoSubFolder' => $VideoSubFolder));
    }
}





//update Video
if (isset($_POST['UpdateVideoId']) && !empty($_POST['UpdateVideoId'])) {
    $UpdateVideoId = $_POST['UpdateVideoId'];
    $six_digit_random_number = random_int(100000, 999999);
    $UpdateThumbData = $_POST["UpdateThumbnailUploadImage"];
    $UvideoHeading = $_POST["u_image_heading"];
    $UvideoDescription = $_POST["u_image_description"];
    // $UpdateVideoFolder = isset($_POST["UpdateVideoFolder"]) ? $_POST["UpdateVideoFolder"] : 0;
    $UpdateVideoCategory = $_POST["UpdateVideoCategory"];
    if (!empty($_POST["UpdateVideoFolder"])) {
        $UpdateVideoFolder = $_POST["UpdateVideoFolder"];
    } else {
        $UpdateVideoFolder = 0;
    }

    if (!empty($_POST["UpdateVideoSubFolder"])) {
        $UpdateVideoSubFolder = $_POST["UpdateVideoSubFolder"];
    } else {
        $UpdateVideoSubFolder = 0;
    }

    $FindExistingQuery = mysqli_query($con, "SELECT * FROM video_table WHERE videoId = '$UpdateVideoId'");
    foreach ($FindExistingQuery as $FindExistingResult) {
        $ThumbnailName = $FindExistingResult['videoThumbnail'];
        $VideoName = $FindExistingResult['videoName'];
    }


    //for changing thumbnail only (if video file is empty)
    if (!empty($UpdateThumbData) && empty($_FILES['UpdateVideoFile']['name'])) {

        $update_thumbnail_array_1 = explode(";", $UpdateThumbData);
        $update_thumbnail_array_2 = explode(",", $update_thumbnail_array_1[1]);
        $UpdateThumbData = base64_decode($update_thumbnail_array_2[1]);
        $update_final_thumbnail_name = $UpdateVideoId . '-' . $six_digit_random_number . '.png';
        $updateThumbnailPath = '../THUMBNAILS/' . $update_final_thumbnail_name;

        if ($ThumbnailName != '') {
            if (unlink('../THUMBNAILS/' . $ThumbnailName)) {
                $UpdateVideo = mysqli_query($con, "UPDATE video_table SET videoThumbnail = '$update_final_thumbnail_name',videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription', videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'");
                if ($UpdateVideo) {
                    if (file_put_contents($updateThumbnailPath, $UpdateThumbData)) {
                        echo json_encode(array('updateVideo' => 1));
                    } else {
                        echo json_encode(array('updateVideo' => 2));
                    }
                } else {
                    echo json_encode(array('updateVideo' => 3));
                }
            } else {
                echo json_encode(array('updateVideo' => 4));
            }
        } else {
            $UpdateVideo = mysqli_query($con, "UPDATE video_table SET videoThumbnail = '$update_final_thumbnail_name',videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription', videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'");
            if ($UpdateVideo) {
                if (file_put_contents($updateThumbnailPath, $UpdateThumbData)) {
                    echo json_encode(array('updateVideo' => 1));
                } else {
                    echo json_encode(array('updateVideo' => 2));
                }
            } else {
                echo json_encode(array('updateVideo' => 3));
            }
        }
    }
    //for changing video only (if thumbnail image is empty)
    elseif (!empty($_FILES['UpdateVideoFile']['name']) && empty($UpdateThumbData)) {

        $UpdateVideoSize = $_FILES['UpdateVideoFile']['size'];
        $UpdateVideoName = $_FILES['UpdateVideoFile']['name'];
        $UpdateVideoTempData = $_FILES['UpdateVideoFile']['tmp_name'];
        $UpdateVideoExtension = pathinfo($VideoName, PATHINFO_EXTENSION);
        $UpdateVideoFinalName = $UpdateVideoId . '-' . $six_digit_random_number . '.' . $UpdateVideoExtension;
        $UpdateVideoLocation = '../VIDEOS/' . $UpdateVideoFinalName;
        $UpdateVideoFormatArray  = array('mp4', 'mkv', 'webm', 'avi');


        if ($VideoName != '') {
            if (unlink('../VIDEOS/' . $VideoName)) {
                // if ($UpdateVideoSize < 10242880) {
                    if (in_array($UpdateVideoExtension, $UpdateVideoFormatArray)) {
                        if (move_uploaded_file($UpdateVideoTempData, $UpdateVideoLocation)) {
                            $video_update_query = mysqli_query($con, "UPDATE video_table SET videoName = '$UpdateVideoFinalName',videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription', videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'");
                            if ($video_update_query) {
                                echo json_encode(array('updateVideo' => 1));
                            } else {
                                echo json_encode(array('updateVideo' => 2)); //error in db
                            }
                        } else {
                            echo json_encode(array('updateVideo' => 3)); //error uploading file
                        }
                    } else {
                        echo json_encode(array('updateVideo' => 5)); //File extension not supported
                    }
                // } else {
                //     echo json_encode(array('updateVideo' => 4)); //video size greater than 5 mb
                // }
            } else {
                echo json_encode(array('updateVideo' => 2));
            }
        } else {
            // if ($UpdateVideoSize < 10242880) {
                if (in_array($UpdateVideoExtension, $UpdateVideoFormatArray)) {
                    if (move_uploaded_file($UpdateVideoTempData, $UpdateVideoLocation)) {
                        $video_update_query = mysqli_query($con, "UPDATE video_table SET videoName = '$UpdateVideoFinalName', videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription' , videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'");
                        if ($video_update_query) {
                            echo json_encode(array('updateVideo' => 1));
                        } else {
                            echo json_encode(array('updateVideo' => 2)); //error in db
                        }
                    } else {
                        echo json_encode(array('updateVideo' => 3)); //error uploading file
                    }
                } else {
                    echo json_encode(array('updateVideo' => 5)); //File extension not supported
                }
            // } else {
            //     echo json_encode(array('updateVideo' => 4)); //video size greater than 5 mb
            // }
        }
    } elseif (!empty($_FILES['UpdateVideoFile']['name']) && !empty($UpdateThumbData)) {

        $update_thumbnail_array_1 = explode(";", $UpdateThumbData);
        $update_thumbnail_array_2 = explode(",", $update_thumbnail_array_1[1]);
        $UpdateThumbData = base64_decode($update_thumbnail_array_2[1]);
        $update_final_thumbnail_name = $UpdateVideoId . '-' . $six_digit_random_number . '.png';
        $updateThumbnailPath = '../THUMBNAILS/' . $update_final_thumbnail_name;
        $UpdateVideoSize = $_FILES['UpdateVideoFile']['size'];
        $UpdateVideoName = $_FILES['UpdateVideoFile']['name'];
        $UpdateVideoTempData = $_FILES['UpdateVideoFile']['tmp_name'];
        $UpdateVideoExtension = pathinfo($VideoName, PATHINFO_EXTENSION);
        $UpdateVideoFinalName = $UpdateVideoId . '-' . $six_digit_random_number . '.' . $UpdateVideoExtension;
        $UpdateVideoLocation = '../VIDEOS/' . $UpdateVideoFinalName;
        $UpdateVideoFormatArray  = array('mp4', 'mkv', 'webm', 'avi');

        $UvideoHeading = $_POST["u_image_heading"];
        $UvideoDescription = $_POST["u_image_description"];

        // if ($UpdateVideoSize < 10242880) {
            if (in_array($UpdateVideoExtension, $UpdateVideoFormatArray)) {
                if (file_put_contents($updateThumbnailPath, $UpdateThumbData)) {
                    if (move_uploaded_file($UpdateVideoTempData, $UpdateVideoLocation)) {
                        $VideoQuery = "UPDATE video_table SET videoName = '$UpdateVideoFinalName',videoThumbnail = '$update_final_thumbnail_name',videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription', videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'";
                        //echo $VideoQuery;
                        $video_update_query = mysqli_query($con, $VideoQuery);
                        if ($video_update_query) {
                            echo json_encode(array('updateVideo' => 1));
                        } else {
                            echo json_encode(array('updateVideo' => 2)); //error in db
                        }
                    } else {
                        echo json_encode(array('updateVideo' => 3)); //error uploading file
                    }
                } else {
                    echo json_encode(array('updateVideo' => 3)); //error uploading file
                }
            } else {
                echo json_encode(array('updateVideo' => 5)); //File extension not supported
            }
        // } else {
        //     echo json_encode(array('updateVideo' => 4)); //video size greater than 5 mb
        // }
    } else {

        $VideoQuery = "UPDATE video_table SET videoHeader = '$UvideoHeading',videoDescription = '$UvideoDescription', videoCategory = '$UpdateVideoCategory', videoFolder = '$UpdateVideoFolder',videoSubFolder = '$UpdateVideoSubFolder' WHERE videoId = '$UpdateVideoId'";
        //echo $VideoQuery;
        $video_update_query = mysqli_query($con, $VideoQuery);
        if ($video_update_query) {
            echo json_encode(array('updateVideo' => 1));
        } else {
            echo json_encode(array('updateVideo' => 2)); //error in db
        }
        // echo json_encode(array('updateVideo' => 7)); //both video and thumbnail cannot be empty
    }
}




//Delete Video
if (isset($_POST['VideoDeleteId'])) {
    $delvalue = $_POST['VideoDeleteId'];

    $FindDetails_query = mysqli_query($con, "SELECT videoName,videoThumbnail FROM video_table WHERE videoId = '$delvalue'");
    foreach ($FindDetails_query as $FindDetails_Result) {
        $ThumbImageName = $FindDetails_Result['videoThumbnail'];
        $VideoName = $FindDetails_Result['videoName'];
        $ThumbnailPath = "../THUMBNAILS/" . $ThumbImageName;
        $VideoPath = "../VIDEOS/" . $VideoName;
    }
    if ($ThumbImageName != null && $VideoName != null) {


        $delItemWithImage = mysqli_query($con, "DELETE FROM video_table WHERE videoId = '$delvalue'");
        if ($delItemWithImage) {

            if (unlink($ThumbnailPath)) {
                if (unlink($VideoPath)) {
                    echo json_encode(array('delVideo' => 1));
                } else {
                    echo json_encode(array('delVideo' => 2));
                }
            } else {
                echo json_encode(array('delVideo' => 2));
            }
        } else {
            echo json_encode(array('delVideo' => 2));
        }
    } else {
        $delVideo = mysqli_query($con, "DELETE FROM video_table WHERE videoId = '$delvalue'");
        if ($delVideo) {
            echo json_encode(array('delVideo' => 1));
        } else {
            echo json_encode(array('delVideo' => 2));
        }
    }
}





///////////////////////////////////Video Operations//////////////////////////////////////




//////////////////////////////////// Multiple Images ///////////////////////////////////


//Get All Images
if (isset($_POST['GetImage'])) {
    $MainImageId = $_POST['GetImage'];
    $FindImages = mysqli_query($con, "SELECT * FROM imagetabletemp WHERE imageId = '$MainImageId'");
    foreach ($FindImages as $FindImagesResult) {
        $SubImageId = $FindImagesResult['id'];
        echo '
            <div class="ImagesDiv me-2">
                <a href="../THUMBNAILS/' . $FindImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery">
                    <img class="ViewImages" src="../THUMBNAILS/' . $FindImagesResult["imageName"] . '">
                </a>
                <button class="btn btn-link btnRemove" value="' . $SubImageId . '"> <i class="material-icons">close</i> </button>
            </div>';
    }
}




//Store All Images In Temptable
if (isset($_POST['StoreTemp'])) {
    $TempImageStoreId = $_POST['StoreTemp'];
    $ClearTempTable = mysqli_query($con, "TRUNCATE TABLE imagetabletemp");
    if ($ClearTempTable) {
        $FindImageDetails = mysqli_query($con, "SELECT * FROM imagegallery WHERE id = '$TempImageStoreId'");
        foreach ($FindImageDetails as $FindImageDetailsResult) {
            $ImageTitle = $FindImageDetailsResult['imageTitle'];
            $ImageDesc = $FindImageDetailsResult['imageDesc'];
        }
        $FindDetails = mysqli_query($con, "SELECT * FROM imagetable WHERE imageId = '$TempImageStoreId'");
        if (mysqli_num_rows($FindDetails) > 0) {
            foreach ($FindDetails as $FindDetailsResult) {
                $TempId = $FindDetailsResult['id'];
                $TempImageId = $FindDetailsResult['imageId'];
                $TempImageName = $FindDetailsResult['imageName'];
                $InsertIntoTempTable = mysqli_query($con, "INSERT INTO imagetabletemp (`id`,`imageId`,`imageName`)VALUES('$TempId','$TempImageId','$TempImageName')");
            }
            if ($InsertIntoTempTable) {
                echo json_encode(array('TempStore' => 1, 'ImageTitle' => $ImageTitle, 'ImageDesc' => $ImageDesc));
            } else {
                echo json_encode(array('TempStore' => 2));
            }
        } else {
            echo json_encode(array('TempStore' => 2));
        }
    } else {
        echo json_encode(array('TempStore' => 2));
    }
}




//Remove Temp Images
if (isset($_POST['RemoveTempImage'])) {
    $RemoveTempImageId = $_POST['RemoveTempImage'];
    // $FindTempImageName = mysqli_query($con, "SELECT imageName FROM imagetabletemp WHERE id = '$RemoveTempImageId'");
    // foreach($FindTempImageName as $FindTempImageNameResult){
    //     $TempImageName = $FindTempImageNameResult['imageName'];
    // }

    $DeleteTempImage = mysqli_query($con, "DELETE FROM imagetabletemp WHERE id = '$RemoveTempImageId'");
    if ($DeleteTempImage) {
        echo json_encode(array('DelTempImage' => 1));
    } else {
        echo json_encode(array('DelTempImage' => 2));
    }
}



//////////////////////////////////// Multiple Images ///////////////////////////////////



//////////////////////////////////////////AdminProduct////////////////////////////////////

//Get All Images
if (isset($_POST['GetProduct'])) {
    $MainImageId = $_POST['GetProduct'];
    $FindImages = mysqli_query($con, "SELECT * FROM producttabletemp WHERE imageId = '$MainImageId'");
    foreach ($FindImages as $FindImagesResult) {
        $SubImageId = $FindImagesResult['id'];
        echo '
            <div class="ImagesDiv me-2">
                <a href="../THUMBNAILS/PRODUCTS/' . $FindImagesResult["imageName"] . '" class="glightbox" data-gallery="gallery">
                    <img class="ViewImages" src="../THUMBNAILS/PRODUCTS/' . $FindImagesResult["imageName"] . '">
                </a>
                <button class="btn btn-link btnRemove" value="' . $SubImageId . '"> <i class="material-icons">close</i> </button>
            </div>';
    }
}



//Store All Images In Temptable
if (isset($_POST['StoreProTemp'])) {
    $TempImageStoreId = $_POST['StoreProTemp'];
    $ClearTempTable = mysqli_query($con, "TRUNCATE TABLE producttabletemp");
    if ($ClearTempTable) {
        $FindImageDetails = mysqli_query($con, "SELECT * FROM products WHERE id = '$TempImageStoreId'");
        foreach ($FindImageDetails as $FindImageDetailsResult) {
            $ImageTitle = $FindImageDetailsResult['title'];
            $ImageDesc = $FindImageDetailsResult['description'];
            $ImageAdv = $FindImageDetailsResult['advantage'];
            $ImageCom = $FindImageDetailsResult['compliance'];
            $ImageIns = $FindImageDetailsResult['instruction'];
            $ImageApp = $FindImageDetailsResult['application'];
            $ImagePac = $FindImageDetailsResult['pacakge'];
        }
        $FindDetails = mysqli_query($con, "SELECT * FROM producttable WHERE imageId = '$TempImageStoreId'");
        if (mysqli_num_rows($FindDetails) > 0) {
            foreach ($FindDetails as $FindDetailsResult) {
                $TempId = $FindDetailsResult['id'];
                $TempImageId = $FindDetailsResult['imageId'];
                $TempImageName = $FindDetailsResult['imageName'];
                $InsertIntoTempTable = mysqli_query($con, "INSERT INTO producttabletemp (`id`,`imageId`,`imageName`)VALUES('$TempId','$TempImageId','$TempImageName')");
            }
            if ($InsertIntoTempTable) {
                echo json_encode(array('TempStore' => 1, 'title' => $ImageTitle, 'description' => $ImageDesc, 'advantage' => $ImageAdv, 'compliance' => $ImageCom, 'instruction' => $ImageIns, 'application' => $ImageApp, 'pacakge' => $ImagePac));
            } else {
                echo json_encode(array('TempStore' => 2));
            }
        } else {
            echo json_encode(array('TempStore' => 2));
        }
    } else {
        echo json_encode(array('TempStore' => 2));
    }
}




//Remove Temp Images
if (isset($_POST['RemoveTempImages'])) {
    $RemoveTempImagesId = $_POST['RemoveTempImages'];

    $DeleteTempImage = mysqli_query($con, "DELETE FROM producttabletemp WHERE id = '$RemoveTempImagesId'");
    if ($DeleteTempImage) {
        echo json_encode(array('DelTempImage' => 1));
    } else {
        echo json_encode(array('DelTempImage' => 2));
    }
}


//////////////////////////////////////////AdminProduct////////////////////////////////////





//////////////////////////////////////////Folder//////////////////////////////////////////


    //ADD FOLDER
    if(isset($_POST['FolderName']) && !empty($_POST['FolderName'])){
        $Folder = $_POST['FolderName'];
        $FolderCategory = $_POST['FolderCategory'];

        $CheckFolderExists = mysqli_query($con, "SELECT folderName FROM folder_table WHERE categoryId = '$FolderCategory' AND folderName = '$Folder'");
        if(mysqli_num_rows($CheckFolderExists) > 0){
            echo json_encode(array('AddFolder' => 0));
        }
        else{
            // mysqli_autocommit($con,FALSE);
            // $max_series_id = mysqli_query($con, "SELECT MAX(se_id) FROM series");
            // if( mysqli_num_rows( $max_series_id) > 0){
            //     foreach( $max_series_id as $max_series_result){
            //         $maxSeriesId =  $max_series_result['MAX(se_id)'] + 1;
            //     }
                $FolderAdd = mysqli_query($con, "INSERT INTO folder_table (`categoryId`,`folderName`) VALUES ('$FolderCategory','$Folder')");
    
                if($FolderAdd){
                    // mysqli_commit($con);
                    echo json_encode(array('AddFolder' => 1));
                }
                else{
                    // mysqli_rollback($con);
                    echo json_encode(array('AddFolder' => 2));
                }
            // }
            // else{
            //     // mysqli_rollback($con);
            //     echo json_encode(array('series' => 3));
            // }
        }
    }
    else{
        
    }


    //EDIT FOLDER
    if(isset($_POST['EditFolder']) && !empty($_POST['EditFolder'])){
        $EditFolderId = $_POST['EditFolder'];

        $EditFolder = mysqli_query($con, "SELECT folderName,categoryId FROM folder_table WHERE id = '$EditFolderId'");
        if(mysqli_num_rows($EditFolder) > 0){
            foreach($EditFolder as $EditFolders){
                $EditFolderName  = $EditFolders['folderName'];
                $EditFolderCategory = $EditFolders['categoryId'];
                echo json_encode(array('EditFolder' => $EditFolderName,'EditFolderCategory' => $EditFolderCategory));
            }
        }
        else{
            echo json_encode(array('EditFolder' => 'error'));
        }
    }
    else{
        
    }


    //DELETE FOLDER
    if(isset($_POST['DeleteFolder']) && !empty($_POST['DeleteFolder'])){
        $DeleteFolder = $_POST['DeleteFolder'];

        $CheckFolderInUse = mysqli_query($con, "SELECT folderId FROM subfolder_table WHERE folderId = '$DeleteFolder'");
        if(mysqli_num_rows($CheckFolderInUse) > 0){
            echo json_encode(array('DeleteFolder' => 0));
        }
        else{
            mysqli_autocommit($con,FALSE);
            $DelFolder = mysqli_query($con, "DELETE FROM folder_table WHERE id = '$DeleteFolder'");
            if($DelFolder){
                mysqli_commit($con);
                echo json_encode(array('DeleteFolder' => 1));
            }
            else{
                mysqli_rollback($con);
                echo json_encode(array('DeleteFolder' => 2));
            }
        }
    }
    else{
        
    }



    //UPDATE FOLDER
    if(isset($_POST['UpdateFolderId']) && !empty($_POST['UpdateFolderId'])){
        $UpdateFolderId = $_POST['UpdateFolderId'];
        $UpdateFolder = $_POST['UpdateFolderName'];
        $UpdateFolderCategory = $_POST['UpdateFolderCategory'];

        $UpdateCheckFolderExists = mysqli_query($con, "SELECT folderName FROM folder_table WHERE categoryId = '$UpdateFolderCategory' AND folderName = '$UpdateFolder' AND id <> '$UpdateFolderId'");
        if(mysqli_num_rows($UpdateCheckFolderExists) > 0){
            echo json_encode(array('UpdateFolder' => 0));
        }
        else{
            mysqli_autocommit($con,FALSE);
            $UpdateFolder = mysqli_query($con, "UPDATE folder_table SET folderName = '$UpdateFolder', categoryId = '$UpdateFolderCategory' WHERE id = '$UpdateFolderId'");
            if($UpdateFolder){
                mysqli_commit($con);
                echo json_encode(array('UpdateFolder' => 1));
            }
            else{
                mysqli_rollback($con);
                echo json_encode(array('UpdateFolder' => 2));
            }
        }
    }
    else{
        
    }





//////////////////////////////////////////Folder//////////////////////////////////////////





//////////////////////////////////////////Sub Folder//////////////////////////////////////////


    //ADD SUB FOLDER
    if(isset($_POST['SubFolderName']) && !empty($_POST['SubFolderName'])){
        $SubFolder = $_POST['SubFolderName'];
        $SubFolderCategory = $_POST['SubFolderCategory'];
        $Folder = $_POST['SubFolderSelect'];

        $CheckSubFolderExists = mysqli_query($con, "SELECT subFolderName FROM subfolder_table WHERE categoryId = '$SubFolderCategory' AND folderId = '$Folder' AND subFolderName = '$SubFolder'");
        if(mysqli_num_rows($CheckSubFolderExists) > 0){
            echo json_encode(array('AddSubFolder' => 0));
        }
        else{
            // mysqli_autocommit($con,FALSE);
            // $max_series_id = mysqli_query($con, "SELECT MAX(se_id) FROM series");
            // if( mysqli_num_rows( $max_series_id) > 0){
            //     foreach( $max_series_id as $max_series_result){
            //         $maxSeriesId =  $max_series_result['MAX(se_id)'] + 1;
            //     }
                $FolderAdd = mysqli_query($con, "INSERT INTO `subfolder_table` (`categoryId`,`folderId`,`subFolderName`) VALUES ('$SubFolderCategory','$Folder','$SubFolder')");
    
                if($FolderAdd){
                    // mysqli_commit($con);
                    echo json_encode(array('AddSubFolder' => 1));
                }
                else{
                    // mysqli_rollback($con);
                    echo json_encode(array('AddSubFolder' => 2));
                }
            // }
            // else{
            //     // mysqli_rollback($con);
            //     echo json_encode(array('series' => 3));
            // }
        }
    }
    else{
        
    }


    //EDIT SUB FOLDER
    if(isset($_POST['EditSubFolder']) && !empty($_POST['EditSubFolder'])){
        $EditSubFolderId = $_POST['EditSubFolder'];

        $EditSubFolder = mysqli_query($con, "SELECT folderId,categoryId,subFolderName FROM subfolder_table WHERE id = '$EditSubFolderId'");
        if(mysqli_num_rows($EditSubFolder) > 0){
            foreach($EditSubFolder as $EditSubFolders){
                $EditSubFolderId  = $EditSubFolders['folderId'];
                $EditSubFolderCategory = $EditSubFolders['categoryId'];
                $EditSubFolder = $EditSubFolders['subFolderName'];
                echo json_encode(array('EditSubFolderId' => $EditSubFolderId,'EditSubFolderCategory' => $EditSubFolderCategory,'EditSubFolder' => $EditSubFolder));
            }
        }
        else{
            echo json_encode(array('EditSubFolderId' => 'error'));
        }
    }
    else{
        
    }


    //DELETE SUB FOLDER
    if(isset($_POST['DeleteSubFolder']) && !empty($_POST['DeleteSubFolder'])){
        $DeleteSubFolder = $_POST['DeleteSubFolder'];

        // $CheckFolderInUse = mysqli_query($con, "SELECT series FROM products WHERE series = '$deleteSeriesId'");
        // if(mysqli_num_rows($CheckFolderInUse) > 0){
        //     echo json_encode(array('DeleteFolder' => 0));
        // }
        // else{
            mysqli_autocommit($con,FALSE);
            $DelSubFolder = mysqli_query($con, "DELETE FROM subfolder_table WHERE id = '$DeleteSubFolder'");
            if($DelSubFolder){
                mysqli_commit($con);
                echo json_encode(array('DeleteSubFolder' => 1));
            }
            else{
                mysqli_rollback($con);
                echo json_encode(array('DeleteSubFolder' => 2));
            }
        // }
    }
    else{
        
    }



    //UPDATE SUB FOLDER
    if(isset($_POST['UpdateSubFolderId']) && !empty($_POST['UpdateSubFolderId'])){
        $UpdateSubFolderId = $_POST['UpdateSubFolderId'];
        $UpdateFolder = $_POST['UpdateSubFolderSelect'];
        $UpdateSubFolder = $_POST['UpdateSubFolder'];
        $UpdateSubFolderCategory = $_POST['UpdateSubFolderCategory'];

        $UpdateCheckSubFolderExists = mysqli_query($con, "SELECT subFolderName FROM subfolder_table WHERE categoryId = '$UpdateSubFolderCategory' AND folderId = '$UpdateSubFolder' AND subFolderName = '$UpdateSubFolder' AND id <> '$UpdateSubFolderId'");
        if(mysqli_num_rows($UpdateCheckSubFolderExists) > 0){
            echo json_encode(array('UpdateSubFolder' => 0));
        }
        else{
            mysqli_autocommit($con,FALSE);
            $UpdateSubFolder = mysqli_query($con, "UPDATE subfolder_table SET subFolderName = '$UpdateSubFolder', categoryId = '$UpdateSubFolderCategory', folderId = '$UpdateFolder'  WHERE id = '$UpdateSubFolderId'");
            if($UpdateSubFolder){
                mysqli_commit($con);
                echo json_encode(array('UpdateSubFolder' => 1));
            }
            else{
                mysqli_rollback($con);
                echo json_encode(array('UpdateSubFolder' => 2));
            }
        }
    }
    else{
        
    }





//////////////////////////////////////////Sub Folder//////////////////////////////////////////

