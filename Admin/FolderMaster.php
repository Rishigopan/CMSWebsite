<?php
include '../MAIN/Dbconfig.php';


if (isset($_COOKIE['custtypecookie']) && isset($_COOKIE['custidcookie'])) {

    if ($_COOKIE['custtypecookie'] == 'SuperAdmin' || $_COOKIE['custtypecookie'] == 'Admin') {
    } else {
        header("location:../login.php");
    }
} else {

    header("location:../login.php");
}

$PageTitle = 'Master';

?>

<!doctype html>
<html lang="en">

<head>

    <?php

    require "../MAIN/Header.php";

    ?>


    <style>
        #Content {
            margin-top: 6rem;
        }

        .main_card {
            border-radius: 10px;
            border-color: white !important;
        }

        .card {
            border-radius: 10px;
            border: 2px solid #F50414;
        }

        input,
        select {
            box-shadow: none !important;
        }

        label {
            color: black;
            font-weight: 700;
        }

        label.error.fail-alert {
            color: #F50414;
            font-weight: 100;
            float: right;
        }

        input:focus,
        select:focus {
            border: 1px solid black !important;
        }

        .card input,
        .card select {
            border-radius: 10px;
        }

        table thead tr th {
            background-color: rgb(211, 211, 211) !important;
            position: sticky;
            top: 0;
            opacity: 1 !important;
        }

        table thead {
            border-radius: 8px 8px 0px 0px;
        }

        table tbody tr td img {
            height: 30px;
            width: 40px;
            object-fit: contain;
        }

        table tbody tr td button i {
            color: black;
        }

        #Main_masters .table-responsive {
            max-height: 50vh;
        }

        .btn_fill {
            color: white;
            background-color: #af2845;
            font-weight: 500;
            transition: all 0.3s ease-out;
        }

        .btn_fill i {
            vertical-align: middle;
            font-size: 1.2rem;
        }

        .btn_fill:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0px 3px 5px #FF6464 !important;
        }

        .btn_submit {
            border: none;
            color: white;
            background-color: #af2845;
            border-radius: 5px;
            transition: all 0.3s ease-out;
        }

        .btn_submit:hover {
            background-color: #af2845;
            transform: translateY(-2px);
            color: white;
            border: none;
            box-shadow: 0px 3px 5px #af2845 !important;
        }

        @media screen and (max-width: 480px) {
            .container-fluid {
                padding: 0px 5px;
            }

            .main_card {
                padding: 10px 8px;
            }
        }


        /*ADD PRODUCTS*/

        .table tbody .btn {
            background-color: none;
            border: none;
        }

        .table tbody .btn:hover {
            background-color: none;
        }

        #main_card_Products form {
            padding: 5px 10px;
        }

        #main_card_Products {
            border-radius: 10px;
            border: none;
            padding: 0;
        }

        #main_card_Products .row {
            padding: 5px 10px;
        }

        #main_card_Products .row label {
            color: #F50414;
            font-weight: 700;
        }

        #main_card_Products .row input:focus,
        #main_card_Products .row select:focus,
        #main_card_Products .row textarea:focus {
            border: 1px solid #F50414;
        }

        #main_card_Products .row input,
        #main_card_Products .row select,
        #main_card_Products .row textarea {
            border-radius: 10px;
            box-shadow: none;
        }

        .masters .card {
            border: none;
            box-shadow: 1px 2px 10px lightgrey;
        }

        .masters .card .table tbody .btn {
            padding: 3px 4px;
            border-radius: 20%;
        }

        .masters .card .table tbody .btn i {
            font-size: 1.3rem;
            vertical-align: middle;
        }

        .masters .card .table tbody .brand_img {
            height: 50px;
            width: 50px;
            object-fit: cover;
        }

        #pills-tab .nav-item {
            padding: 5px 10px;
        }

        #pills-tab .nav-item .nav-link {
            border-radius: 30px;
            width: 150px;
            color: grey;
            font-weight: 700;
        }

        #pills-tab .nav-item .active {
            background-color: #af2845;
            color: white;
        }


        /*REPORTS*/

        .toolbar .card {
            border: none;
        }

        .top {
            padding: 0px 15px;
            padding-bottom: 6px;
            display: flex;
            justify-content: space-between;
        }

        .top .dataTables_filter input {
            /*min-width: 25rem;*/
            height: 2rem;
        }

        .top .dataTables_length label {
            padding-left: 150px !important;
        }

        .top .dataTables_length label select {
            height: 2rem;
            min-width: 5rem;
            text-align: center;
        }

        .bottom {
            border-top: 1px solid lightgray;
            padding: 3px 15px;
            display: flex;
            justify-content: space-between;
        }

        .top .dataTables_info {
            color: black;
            font-weight: 400;
            margin-top: -10px;
        }

        .bottom .paginate_button a {
            
            font-weight: 500;
            box-shadow: none;
        }

        .bottom .pagination .active a {
            background-color: #af2845;
            border: 1px solid #af2845;
            color: white;
        }


    </style>



</head>

<body>

    <div class="wrapper">
        <!--NAVBAR-->




        <!--NAVBAR-->
        <?php include './Navbar.php'; ?>


        <!--CONTENT-->
        <div id="Content">


            <div class="container-fluid">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Folder</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sub Folder</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!--Folder master -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="container-fluid px-5 masters">
                            <div class="row gx-5">
                                <div class="col-lg-5 mb-4">
                                    <div class="card card-body px-5 py-4">
                                        <form id="AddFolder" action="" method="">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label for="folder_category" class="form-label">Category</label>
                                                    <select id="folder_category" class="form-select" name="FolderCategory">
                                                        <option value="3">Projects Presentation</option>
                                                        <option value="1">Material Presentation</option>
                                                        <option value="2">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="folder_name" class="form-label">Folder</label>
                                                    <input type="text" class="form-control" id="folder_name" name="FolderName" placeholder="Enter Folder Name">
                                                </div>
                                                <div class="col-12 mt-3 text-center">
                                                    <button class="btn btn_submit rounded-pill shadow-none" id="" type="submit" name="types">Add Folder</button>
                                                </div>
                                            </div>
                                        </form>

                                        <form id="UpdateFolder" action="" method="" style="display: none;">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label for="update_folder_category" class="form-label">Category</label>
                                                    <input type="text" class="form-control" id="update_folder_id" name="UpdateFolderId" hidden>
                                                    <select id="update_folder_category" class="form-select" name="UpdateFolderCategory">
                                                        <option value="3">Projects Presentation</option>
                                                        <option value="1">Material Presentation</option>
                                                        <option value="2">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="update_folder_name" class="form-label">Folder</label>
                                                    <input type="text" class="form-control" id="update_folder_name" name="UpdateFolderName" placeholder="Enter Folder Name">
                                                </div>
                                                <div class="col-12 mt-3 text-center">
                                                    <button class="btn btn_submit rounded-pill shadow-none" id="" type="submit" name="types">Update Folder</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card card-body px-0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless" id="FolderTable" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Id</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Folder</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sub Folder master-->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="container-fluid px-5 masters">
                            <div class="row gx-5">
                                <div class="col-lg-5 mb-4">
                                    <div class="card card-body px-5 py-4">
                                        <form id="AddSubFolder" action="" method="">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label for="sub_folder_category" class="form-label">Category</label>
                                                    <select id="sub_folder_category" class="form-select SelectCategory" name="SubFolderCategory">
                                                        <option value="3">Projects Presentation</option>
                                                        <option value="1">Material Presentation</option>
                                                        <option value="2">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="sub_folder_select" class="form-label">Folder</label>
                                                    <select id="sub_folder_select" class="form-select SelectFolder" name="SubFolderSelect">
                                                        <option value="">Choose Folder</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="sub_folder" class="form-label">Sub Folder</label>
                                                    <input type="text" class="form-control" id="sub_folder" name="SubFolderName" placeholder="Enter Sub Folder Name">
                                                </div>
                                                <div class="col-12 mt-3 text-center">
                                                    <button class="btn btn_submit rounded-pill shadow-none" id="" type="submit" name="types">Add Sub Folder</button>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="UpdateSubFolder" action="" method="" style="display: none;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="update_sub_folder_id" name="UpdateSubFolderId" hidden>
                                                    <label for="update_sub_folder_category" class="form-label">Category</label>
                                                    <select id="update_sub_folder_category" class="form-select" name="UpdateSubFolderCategory">
                                                        <option value="3">Projects Presentation</option>
                                                        <option value="1">Material Presentation</option>
                                                        <option value="2">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="update_sub_folder_select" class="form-label">Folder</label>
                                                    <select id="update_sub_folder_select" class="form-select UpdateSelectFolder" name="UpdateSubFolderSelect">

                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="update_sub_folder" class="form-label">Sub Folder</label>
                                                    <input type="text" class="form-control" id="update_sub_folder" name="UpdateSubFolder" placeholder="Enter Sub Folder Name">
                                                </div>
                                                <div class="col-12 mt-3 text-center">
                                                    <button class="btn btn_submit rounded-pill shadow-none" id="" type="submit" name="types">Update Sub Folder</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="card card-body px-0">
                                        <div class="table-responsive">
                                            <table class="table table-borderless" id="SubFolderTable" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Id</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Folder</th>
                                                        <th class="text-center">Sub Folder</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>


    <script>
        $(document).ready(function() {


            // get_brand_select();


            //Show series on brand select
            $('.select_ModelBrand').change(function() {
                var Brand_model_id = $(this).val();
                get_series_select(Brand_model_id);
            });


            //////////////////////////////   FOLDER MASTER   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


            var itemTable = $('#FolderTable').DataTable({
                "processing": true,
                "ajax": "FolderData.php",
                //"responsive": true,
                "fixedHeader": true,
                "dom": '<"top"fl>rt<"bottom"ip>',
                //"select":true,

                "columns": [{
                        data: 'id',
                    },
                    {
                        data: 'categoryName',
                    },
                    {
                        data: 'folderName',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (type == 'display') {
                                data = '<button class="EditFolder btn shadow-none" type="button" value="' + data + '"> <i class="material-icons text-info">edit</i> </button>';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            if (type == 'display') {
                                data = '<button class="DeleteFolder  btn shadow-none" type="button" value="' + data + '"> <i class="material-icons text-danger">delete</i> </button>';
                            }
                            return data;
                        }
                    }

                ]


            });


            //Add Folder
            $(function() {

                let validator = $('#AddFolder').jbvalidator({
                    language: 'dist/lang/en.json',
                    successClass: false,
                    html5BrowserDefault: true
                });

                validator.validator.custom = function(el, event) {
                    if ($(el).is('#folder_name') && $(el).val().trim().length == 0) {
                        return 'Cannot be empty';
                    }
                }

                $(document).on('submit', '#AddFolder', (function(a) {
                    a.preventDefault();
                    var FolderData = new FormData(this);
                    //console.log(typedata);
                    $.ajax({
                        type: "POST",
                        url: "MasterOperations.php",
                        data: FolderData,
                        success: function(data) {
                            console.log(data);
                            var response = JSON.parse(data);
                            if (response.AddFolder == "1") {
                                toastr.success("Success Adding a New Folder");
                                $('#AddFolder')[0].reset();
                                itemTable.ajax.reload(null, false);
                            } else if (response.AddFolder == "0") {
                                toastr.warning("Cannot Add a Folder That is Already Present");
                            } else if (response.AddFolder == "2") {
                                toastr.error("Error While Adding New Folder");
                            } else {
                                toastr.error("Error While Adding New Folder");
                            }
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }));

            });


            //Update Folder
            $(function() {

                let validator = $('#UpdateFolder').jbvalidator({
                    language: 'dist/lang/en.json',
                    successClass: false,
                    html5BrowserDefault: true
                });

                validator.validator.custom = function(el, event) {
                    if ($(el).is('#update_folder_name') && $(el).val().trim().length == 0) {
                        return 'Cannot be empty';
                    }
                }

                $(document).on('submit', '#UpdateFolder', (function(a) {
                    a.preventDefault();
                    var UpdateFolder = new FormData(this);
                    //console.log(updateTypeData);
                    $.ajax({
                        type: "POST",
                        url: "MasterOperations.php",
                        data: UpdateFolder,
                        success: function(data) {
                            console.log(data);
                            var UpdateFolderResult = JSON.parse(data);
                            //console.log(updateTypeResponse);
                            if (UpdateFolderResult.UpdateFolder == "1") {
                                toastr.success("Successfully Updated Folder");
                                $('#UpdateFolder')[0].reset();
                                $('#AddFolder').show();
                                $('#UpdateFolder').hide();
                                itemTable.ajax.reload(null, false);
                            } else if (UpdateFolderResult.UpdateFolder == "0") {
                                toastr.warning("Folder Already Exists");
                            } else if (UpdateFolderResult.UpdateFolder == "2") {
                                toastr.error("Error While Updating Folder");
                            } else {
                                toastr.error("Error While Updating Folder");
                            }
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }));

            });


            //Edit Folder
            $('#FolderTable tbody').on('click', '.EditFolder', (function() {
                var EditFolderId = $(this).val();
                //console.log(editTypeId);

                $.ajax({
                    method: "POST",
                    url: "MasterOperations.php",
                    data: {
                        EditFolder: EditFolderId
                    },
                    beforeSend: function() {
                        $('#addCategoryForm').addClass("disable");
                    },
                    success: function(data) {
                        console.log(data);
                        var EditFolderResult = JSON.parse(data);
                        if (EditFolderResult.EditFolder == 'error') {
                            toastr.error("Some Error Occured");
                        } else {
                            $('#AddFolder').hide();
                            $('#UpdateFolder').show();
                            $('#update_folder_category').val(EditFolderResult.EditFolderCategory);
                            $('#update_folder_name').val(EditFolderResult.EditFolder);
                            $('#update_folder_id').val(EditFolderId);
                        }
                    },
                    error: function() {
                        alert("Error");
                    }
                })
            }));


            //Delete Folder
            $('#FolderTable tbody').on('click', '.DeleteFolder', (function() {
                var DeleteFolderId = $(this).val();
                //console.log(deleteTypeId);
                var ConfirmTypeDelete = confirm("Are you sure, you want to delete this folder?");
                if (ConfirmTypeDelete == true) {
                    $.ajax({
                        method: "POST",
                        url: "MasterOperations.php",
                        data: {
                            DeleteFolder: DeleteFolderId
                        },
                        beforeSend: function() {
                            $('#addCategoryForm').addClass("disable");
                        },
                        success: function(data) {
                            //console.log(data);
                            var response = JSON.parse(data);
                            if (response.DeleteFolder == "1") {
                                toastr.success("Successfully Deleted Folder");
                                itemTable.ajax.reload(null, false);
                            } else if (response.DeleteFolder == "0") {
                                toastr.warning("Cannot Delete a Folder That is Already in Use");
                            } else if (response.DeleteFolder == "2") {
                                toastr.error("Error While Deleting");
                            } else {
                                toastr.error("Error While Deleting");
                            }
                        },
                        error: function() {
                            alert("Error");
                        }
                    });
                } else {

                }

            }));


            //////////////////////////////   FOLDER MASTER   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


            //////////////////////////////   SUB FOLDER MASTER   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                var SubFolderTable = $('#SubFolderTable').DataTable({
                    "processing": true,
                    "ajax": "SubFolderData.php",
                    //"responsive": true,
                    "fixedHeader": true,
                    "dom": '<"top"fl>rt<"bottom"ip>',
                    //"select":true,

                    "columns": [{
                            "data": null,
                            "sortable": true,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'categoryName',
                        },
                        {
                            data: 'folderName',
                        },
                        {
                            data: 'subFolderName',
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                if (type == 'display') {
                                    data = '<button class="EditSubFolder  btn shadow-none" type="button" value="' + data + '"> <i class="material-icons text-success">edit</i> </button>';
                                }
                                return data;
                            }
                        },
                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                if (type == 'display') {
                                    data = '<button class="DeleteSubFolder  btn shadow-none" type="button" value="' + data + '"> <i class="material-icons text-danger">delete</i> </button>';
                                }
                                return data;
                            }
                        }

                    ]
                });



                //Add Sub Folder
                $(function() {

                    let validator = $('#AddSubFolder').jbvalidator({
                        language: 'dist/lang/en.json',
                        successClass: false,
                        html5BrowserDefault: true
                    });

                    validator.validator.custom = function(el, event) {
                        if ($(el).is('#sub_folder') && $(el).val().trim().length == 0) {
                            return 'Cannot be empty';
                        }
                    }

                    $(document).on('submit', '#AddSubFolder', (function(a) {
                        a.preventDefault();
                        var SubFolderData = new FormData(this);
                        //console.log(SeriesData);
                        $.ajax({
                            type: "POST",
                            url: "MasterOperations.php",
                            data: SubFolderData,
                            success: function(data) {
                                console.log(data);
                                var SubFolderResponse = JSON.parse(data);
                                //console.log(SubFolderResponse);
                                if (SubFolderResponse.AddSubFolder == "1") {
                                    toastr.success("Success Adding a New SubFolder");
                                    $('#AddSubFolder')[0].reset();
                                    SubFolderTable.ajax.reload(null, false);
                                } else if (SubFolderResponse.AddSubFolder == "0") {
                                    toastr.warning("Cannot Add a SubFolder That is Already Present");
                                } else if (SubFolderResponse.AddSubFolder == "2") {
                                    toastr.error("Error While Adding New SubFolder");
                                } else {
                                    toastr.error("Error While Adding New SubFolder");
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }));

                });



                //Update Sub Folder
                $(function() {

                    let validator = $('#UpdateSubFolder').jbvalidator({
                        language: 'dist/lang/en.json',
                        successClass: false,
                        html5BrowserDefault: true
                    });

                    validator.validator.custom = function(el, event) {
                        if ($(el).is('#update_sub_folder') && $(el).val().trim().length == 0) {
                            return 'Cannot be empty';
                        }
                    }

                    $(document).on('submit', '#UpdateSubFolder', (function(a) {
                        a.preventDefault();
                        var UpdateSubFolderData = new FormData(this);
                        //console.log(updateSeriesData);
                        $.ajax({
                            type: "POST",
                            url: "MasterOperations.php",
                            data: UpdateSubFolderData,
                            success: function(data) {
                                //console.log(data);
                                var UpdateSubFolderResponse = JSON.parse(data);
                                //console.log(UpdateSubFolderResponse);
                                if (UpdateSubFolderResponse.UpdateSubFolder == "1") {
                                    toastr.success("Successfully Updated Sub Folder");
                                    $('#UpdateSubFolder')[0].reset();
                                    $('#AddSubFolder').show();
                                    $('#UpdateSubFolder').hide();
                                    SubFolderTable.ajax.reload(null, false);
                                } else if (UpdateSubFolderResponse.UpdateSubFolder == "0") {
                                    toastr.warning("Sub Folder Already Exists");
                                } else if (UpdateSubFolderResponse.UpdateSubFolder == "2") {
                                    toastr.error("Error While Updating Sub Folder");
                                } else {
                                    toastr.error("Error While Updating Sub Folder");
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }));

                });



                //Edit Sub Folder
                $('#SubFolderTable tbody').on('click', '.EditSubFolder', (function() {
                    var EditSubFolderId = $(this).val();
                    console.log(EditSubFolderId);
                    $.ajax({
                        method: "POST",
                        url: "MasterOperations.php",
                        data: {
                            EditSubFolder: EditSubFolderId
                        },
                        beforeSend: function() {
                            $('#addCategoryForm').addClass("disable");
                        },
                        success: function(data) {
                            console.log(data);
                            var EditSubFolder = JSON.parse(data);
                            if (EditSubFolder.EditSubFolderId == 'error') {
                                toastr.error("Some Error Occured");
                            } else {
                                $('#AddSubFolder').hide();
                                $('#UpdateSubFolder').show();
                                $('#update_sub_folder_category').val(EditSubFolder.EditSubFolderCategory).change();
                                $.ajax({
                                    method: "POST",
                                    url: "MasterExtras.php",
                                    data: {
                                        ShowFolder: EditSubFolder.EditSubFolderCategory
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        $('.UpdateSelectFolder').html(data);
                                        $('#update_sub_folder_select').val(EditSubFolder.EditSubFolderId).change();
                                    }
                                });

                                $('#update_sub_folder').val(EditSubFolder.EditSubFolder);
                                $('#update_sub_folder_id').val(EditSubFolderId);
                            }
                        },
                        error: function() {
                            alert("Error");
                        }
                    })
                }));



                //Delete Sub Folder
                $('#SubFolderTable tbody').on('click', '.DeleteSubFolder', (function() {
                    var DeleteSubFolderId = $(this).val();
                    console.log(DeleteSubFolderId);
                    var ConfirmSubFolderDelete = confirm("Are you sure, you want to delete this Sub Folder?");
                    if (ConfirmSubFolderDelete == true) {
                        $.ajax({
                            method: "POST",
                            url: "MasterOperations.php",
                            data: {
                                DeleteSubFolder: DeleteSubFolderId
                            },
                            beforeSend: function() {
                                $('#addCategoryForm').addClass("disable");
                            },
                            success: function(data) {
                                //console.log(data);
                                var SubFolderDeleteresponse = JSON.parse(data);
                                if (SubFolderDeleteresponse.DeleteSubFolder == "1") {
                                    toastr.success("Successfully Deleted Sub Folder");
                                    SubFolderTable.ajax.reload(null, false);
                                } else if (SubFolderDeleteresponse.DeleteSubFolder == "0") {
                                    toastr.warning("Cannot Delete a Sub Folder That is Already in Use");
                                } else if (SubFolderDeleteresponse.DeleteSubFolder == "2") {
                                    toastr.error("Error While Deleting");
                                } else {
                                    toastr.error("Error While Deleting");
                                }
                            },
                            error: function() {
                                alert("Error");
                            }
                        })
                    } else {

                    }
                }));
            //////////////////////////////  SUB FOLDER MASTER    \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


            //Choose folder on category select
            $(document).on('change', '.SelectCategory', function() {
                var SelectedCategory = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "MasterExtras.php",
                    data: {
                        ShowFolder: SelectedCategory
                    },
                    success: function(data) {
                        console.log(data);
                        $('.SelectFolder').html(data);
                    }
                });
            });


        });
    </script>





</body>

</html>