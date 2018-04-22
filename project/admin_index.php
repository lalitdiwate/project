<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>| Admin Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php include('header.php'); ?>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                           <!--  <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" />  --></a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                           
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <?php include('sidebar.php'); ?>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Admin Dashboard
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                                <!-- END REGIONAL STATS PORTLET-
                                <!-- END PORTLET-->
                            
                           <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="13">0</span>
                                        </div>
                                        <div class="desc"> Number OF Student Register </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="1">0</span> </div>
                                        <div class="desc"> No OF Teachers Registers</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <div class="visual">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="54">0</span>
                                        </div>
                                        <div class="desc"> No Of Messages </div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                      <hr>
                          <div class="search-page search-content-1">
                            <div class="search-bar ">
                                <div class="row">
                                    <form action="" method="POST">
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for..." name="name">
                                            <span class="input-group-btn">
                                                <button class="btn blue uppercase bold" type="submit" name="search">Search</button>
                                            </span>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="search-container ">
                                        <ul style="list-style: none;">
                                            <?php

                                            if(isset($_POST['search']))
                                            {
                                                $name=$_POST['name'];

if(include('conn.php'))
{


$sql = "SELECT * from student_details where full_name LIKE '%$name%'";
$sql2=mysqli_query($conn, $sql);
if ($sql2) {
    $value=mysqli_fetch_assoc($sql2);
    
     
?>
                                            
                                            <li class="search-item clearfix">
                                                <div class="col-md-12">
                                                <div class="search-content">
                                                    <h4 class="search-title">
                                                        <?php echo $value['first_name']." ".$value['last_name'];
                                                          ?>
                                                    </h4>
                                                   <a href="edit.php?PRN=<?php echo $value['PRN']; ?>" style="float: left;" class="btn blue uppercase bold ">view</a>
                                                </div>
                                            </div>
                                            </li>
<?php


    echo $conn->error;

}
  echo $conn->error;
}
  echo $conn->error;
}
?>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                       
                            
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            
            <?php 
            include('footer.php');
             ?>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>