
<?php


    $servername = "localhost";
    $username = "root";
    $password = "Techstas@123";
    $database = "buvdb";


    $con = mysqli_connect($servername,$username,$password,$database);


    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    

?>