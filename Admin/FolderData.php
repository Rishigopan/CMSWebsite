<?php




include '../MAIN/Dbconfig.php';



$find_data = mysqli_query($con, "SELECT F.id,C.categoryName,F.folderName FROM folder_table F INNER JOIN category_table C ON F.categoryId = C.id");
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