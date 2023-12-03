<?php

include './MAIN/Dbconfig.php';


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5914a243cf.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>BUV CHEMICALS & ADHESIVES</title>

    <style>
        body {
            /* background-image: url('./gold-yellow-honeyed-candied-color-wave-effect-abstract-background-blur-melliferous-honeyed-background.jpg'); */
            background: url("./image/Travelappbg.jpg");
            background: lightgrey;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #main_box {
            height: 620px;
            max-width: 1390px;
            width: 100%;
            /* background: lightgrey; */
            border: none;
        }

        #img_box {
            background-image: url('./loginBg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            align-items: center;
            display: flex;
            height: 620px;
        }

        #form_box {
            height: 620px;
            background-color: white;
            justify-content: center;
            padding: 40px 115px;
        }

        .formHead{
            font-family: 'Amita', cursive;
        }
        #form_box form {
            margin-top: 20px;
        }

        h1 {
            color: #af2845;
            text-shadow: -2px -2px 3px rgb(204, 204, 204);
        }

        input {
            /* border: none !important; */
            border: 2px solid lightgray !important;
            background-color: #FAEFE6 !important;
            /* border-bottom: 2px solid #0b048d !important; */
            border-radius: 0px !important;
        }

        input::placeholder{
            color: rgb(182, 181, 181) !important;
        }
        .input-group i {
            color: #af2845;
        }

        #form_box a {
            text-decoration: none;
            color: #af2845;
        }

        #form_box a:hover {
            text-decoration: none;
            color: black;
        }
        #form_box button {
            background-color: #af2845;
            color: white;
        }

        #login {
            background-color: #af2845;
            color: white;
        }

        @media only screen and (max-width: 500px) {
            #form_box {
                border-radius: 10px;
                padding: 40px;
            }
        }
        @media only screen and (max-width: 501px) and (max-width: 991px) {
            #form_box {
                padding: 40px;
            }
        }
        @media only screen and (max-width: 1201px) and (max-width: 1920px) {
            #form_box {
                padding: 40px;
            }
        }
        i{
            vertical-align: middle;
        }
    </style>


</head>

<body class="py-0">
    <div id="main_box" class="card card-body p-0 mx-2">
        <div class="row g-0">
            <div id="form_box" class="col-xl-5 col-lg-5 col-12">
                <form action="" id="loginform" class="px-3">
                    <div class="text-center">
                        <a href="./index.php"><img src="./img/buv-logo.png" class="logoStyle" alt="" style="width: 170px; height: 100px;"></a>
                    </div>
                    <!-- <h1 class="text-center fs-2 fw-bold">BUV CHEMICALS <br> <span class="fs-4">& Adhesives</span> </h1> -->
                    <h3 class="mb-4 fs-4 text-center pt-3 formHead">Welcome Back</h3>
                    <div class="mb-3">
                        <!-- <span style="position:absolute; margin-left: 10px; margin-top:6px; z-index: 99;">
                            <i class="fas fa-at fa-sm"></i>
                        </span> -->
                        <label for="" class="pb-2">Username</label>
                        <input type="text" name="userName" class="form-control shadow-none" placeholder="Enter Username" style="padding-left: 18px;" required>
                    </div>
                    <div class="mb-3">
                        <!-- <span style="position:absolute; margin-left: 10px; margin-top:6px; z-index: 99;">
                            <i class="fas fa-key fa-sm"></i>
                        </span> -->
                        <label for="" class="pb-2">Password</label><br>
                        <input type="password" name="password" class="form-control shadow-none" placeholder="Enter Password" style="padding-left: 18px;" required>
                    </div>

                    <div id="message">

                    </div>
                    <button id="login" class="btn mt-4" type="submit" style="width:100%">Login</button>
                    <div class="mt-2">
                        <a href="index.php" class="nav-item nav-link fs-6 loginHomeBtn text-center"><i class="ri-arrow-left-s-fill"></i> Back To Home</a>
                    </div>
                </form>
            </div>
            <div id="img_box" class="col-xl-7 col-lg-7 d-none d-md-flex">
                <img src="" class="img-fluid" alt="">
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function(){
            $('#loginform').submit(function(e){
                e.preventDefault();
                var form = $(this).serializeArray();
                console.log(form);
                $.post(
                    "login_verify.php",
                    form,
                    function(form){
                        $('#message').show();
                        $('#message').html(form);
                        //console.log("hello");
                        var response = JSON.parse(form);
                        if(response.success == "1"){
                            $('#message').hide();
                            //alert("admin");
                            location.href = "./Admin/AdminDashboard.php";
                        }
                        // else if(response.success == "2"){
                        //     $('#message').hide();
                        //     //alert("customer");
                        //     location.href = "./Admin/item_master.php"; 
                        // }
                        // else if(response.success == "3"){
                        //     $('#message').hide();
                        //     //alert("customer");
                        //     location.href = "./Admin/orderForm.php"; 
                        // }
                        
                        else{

                        }
                      
                    }
                );
            });
        });
    </script>

























    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    -->
</body>


















</html>