<?php
session_start();
if($_SESSION['email']==null && $_SESSION['password']==null)
{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Inventory Management</title>

    <!-- Core CSS - Include with every page -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="assets/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CMPI | Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"



                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> <?php echo $_SESSION['email']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li class="divider"></li>
                        <li>
                            <form class="form-horizontal" action="logout.php" method="post">
<!--                               <a><i class="fa fa-sign-out fa-fw"></i><input type="submit" name="logout" value="Logout"></a>-->

                            <button class="center-block" name="logout"><i class="fa fa-sign-out fa-fw"></i>Logout</button>
                            </form>
<!--                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>-->
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Category <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-category"><i class="fa fa-edit"></i> Add Category</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-categories"><i class="fa fa-book"></i> Show Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Employee <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-employee"><i class="fa fa-edit"></i> Add Employee</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-employees"><i class="fa fa-book"></i> Show Employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Customer <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-customer"><i class="fa fa-edit"></i> Add Customer</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-customers"><i class="fa fa-book"></i> Show Customer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Product <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-product"><i class="fa fa-edit"></i> Add Product</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-products"><i class="fa fa-book"></i> Show Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Shipper <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-shipper"><i class="fa fa-edit"></i> Add Shipper</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-shippers"><i class="fa fa-book"></i> Show Shipper</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Supplier <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-supplier"><i class="fa fa-edit"></i> Add Supplier</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-suppliers"><i class="fa fa-book"></i> Show Supplier</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw"></i> Order <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?id=add-order"><i class="fa fa-edit"></i> Add Order</a>
                                </li>
                                <li>
                                    <a href="index.php?id=show-orders"><i class="fa fa-book"></i> Show Order</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>





                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <br>
            <br>
            <?php
            if(empty($_GET['id']))
            {
                include 'home.php';
            }
            else{
                $id = $_GET['id'];
                include $id.'.php';
            }
            ?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="assets/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="assets/js/demo/dashboard-demo.js"></script>

</body>

</html>
