<?php
include './php/connection.php';
session_start();
$table = "";

//Select categories
$sql = "select * from categories";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['table'].= 
           "<tr> <td> $row[cat_id] </td> 
            <td> $row[cat_name] </td>
            <td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#mediumModal' id='edit_btn'>Edit</button>
           <button type='button' class='btn btn-danger delete_btn' name='delete_btn' id='$row[cat_id]'>Delete</button></td>
            </tr>";
        
      }
}
?>


<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./" style="font-weight: 700;">Book Shop</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li>
                        <a href="manage-cata.php"> <i class="menu-icon ti-layout-list-thumb"></i>Manage categories </a>
                    </li>
                    <li>
                        <a href="manage-product.php"> <i class="menu-icon ti-layout-grid2-alt"></i>Manage product </a>
                    </li>
                    <li>
                        <a href="manage-user.php"> <i class="menu-icon ti-user"></i>Manage users </a>
                    </li>
                    <li>
                        <a href="manage-order.php"> <i class="menu-icon ti-shopping-cart"></i>Manage orders </a>
                    </li>



                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">

                    <div class="header-left">

                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Home</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="alert alert-success alert-dismissible" id="error_msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php
                if (isset($_SESSION["errormsg"])) {
                    echo $_SESSION["errormsg"];
                    session_destroy();
                }
            ?>
        </div>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Categories</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">

                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                            data-target="#mediumModal">
                            Add Categories
                        </button>

                        <!-- Modal : Start -->
                        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                            aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Add Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="./php/manage-cata-func.php" method="POST">
                                        <div class="modal-body">
                                            <input type="text" placeholder="Enter ID" name="cat_id">
                                            <input type="text" placeholder="Enter Category" name="cat_name"
                                                id="cata_textbox">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-secondary" name="add_cat"
                                                id="add-cat">Add</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal : End -->
                    </div>
                </div>

                <!-- Table : Start -->
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Categories</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Edit</th>
                                </tr>

                            </thead>
                            <tbody>

                                <?php
                                //     if(!empty($result)){
                                //     if (mysqli_num_rows($result) > 0) {
                                //         while ($row = mysqli_fetch_assoc($result)) {

                                //         echo "<tr> <td> $row[cat_id] </td> 
                                //                                     <td> $row[cat_name] </td>
                                //                                     <td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#mediumModal' id='edit_btn'>Edit</button>
                                //                                     <a href='manage-cata.php?id=$row[cat_id]'><button type='button' class='btn btn-danger' name='delete_btn' id='delete_btn'>Delete</button></a></td>
                                //                                     </tr>";
                                //         }
                                //     }
                                // }
                                
                                    
                                echo $GLOBALS['table'];
                                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table : End -->

            </div>
        </div>


    </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

    <script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
    </script>


    <script>
    document.getElementById("edit_btn").addEventListener("click", myFunction);

    function myFunction() {
        document.getElementById("cata_textbox").value = document.getElementById("cata_name").innerHTML;
    }

    // document.getElementById("add-cat").addEventListener("click", myFunction2);
    // document.getElementById("error_msg").style.display = "none";

    // function myFunction2() {
    //     document.getElementById("error_msg").style.display = "  block";
    // }

    // if(<?php empty($_SESSION["errormsg"]) ?>){
    //     document.getElementById("error_msg").style.display = "none";
    // }else{
    //     document.getElementById("error_msg").style.display = "block";
    // }

    // Delete record
    $(document).ready(function() {
        $(".delete_btn").click(function() {
            $.post("./php/category_api.php", {
                    cat_id: $(this).attr("id")
                },
                function(data, status) {
                    <?php
                        if (isset($_SESSION["errormsg"])) {
                            echo $_SESSION["errormsg"];
                            session_destroy();
                        }
                    ?>
                    window.location.reload();
                });
        });

    });
    </script>
</body>

</html>