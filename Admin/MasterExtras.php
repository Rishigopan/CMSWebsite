<?php

include '../MAIN/Dbconfig.php';


//Select Folders
if (isset($_POST["ShowFolder"])) {

    $CategoryId = $_POST['ShowFolder'];

    $FetchFolderByCategory = mysqli_query($con, "SELECT id,folderName FROM folder_table WHERE categoryId = '$CategoryId'");

    echo '<option value="0">Select a Folder</option>';
    if (mysqli_num_rows($FetchFolderByCategory) > 0) {
        foreach ($FetchFolderByCategory as $FetchFolderByCategoryResult) {
    ?>
            <option value="<?php echo $FetchFolderByCategoryResult['id']; ?>"> <?php echo $FetchFolderByCategoryResult['folderName']; ?> </option>

        <?php

        }
    } else {
        echo '';
    }
}



//Select SUb Folders
if (isset($_POST["ShowSubFolder"])) {

    $FolderId = $_POST['ShowSubFolder'];

    $FetchSubFolderByFolder = mysqli_query($con, "SELECT id,subFolderName FROM subfolder_table WHERE folderId = '$FolderId'");

    echo '<option value="0">Select Sub Folder</option>';
    if (mysqli_num_rows($FetchSubFolderByFolder) > 0) {
        foreach ($FetchSubFolderByFolder as $FetchSubFolderByFolderResult) {
    ?>
            <option value="<?php echo $FetchSubFolderByFolderResult['id']; ?>"> <?php echo $FetchSubFolderByFolderResult['subFolderName']; ?> </option>

        <?php

        }
    } else {
        echo '';
    }
}


?>