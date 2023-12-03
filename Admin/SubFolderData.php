<?php




include '../MAIN/Dbconfig.php';



$find_data = mysqli_query($con, "SELECT S.id,S.subFolderName,F.folderName,C.categoryName FROM subfolder_table S INNER JOIN folder_table F ON S.folderId = F.id INNER JOIN category_table C ON F.categoryId = C.id");
if(mysqli_num_rows($find_data) > 0){

    while ($dataRow = mysqli_fetch_assoc($find_data)) {
        $rows[] = $dataRow;
    }
}
else{
    $rows = array();
}
$dataset = array(
    "data" => $rows
);

echo json_encode($dataset);


?>