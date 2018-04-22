<?php
if(isset($_GET['PRN']))
{
?>

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

                                <?php

$PRN=$_GET['PRN'];
if(include('conn.php'))
{


$sql = "SELECT * from student_details where PRN='$PRN' AND status='1'";
$sql1=mysqli_query($conn, $sql);
if ($sql1) {
    $result=mysqli_fetch_assoc($sql1);
    if(isset($result))
    {
?>

                          <div class="col-md-12 col-sm-12">
                                                            <div class="portlet blue-hoki box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i>Student Information </div>
                                                                    <div class="actions">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> PRN NO: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['PRN'];?> </div>
                                                                    </div>
                                                                     <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> First name: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['first_name'];?> </div>
                                                                    </div>
                                                                   <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Middle Name: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['middle_name'];?> </div>
                                                                    </div>
                                                                     <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Mother name: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['mother_name'];?> </div>
                                                                    </div>
                                                                     <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Date Of Birth: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['date_of_birth'];?> </div>
                                                                    </div>
                                                                     <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Gender: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['gender'];?> </div>
                                                                    </div>
                                                                     <div class="portlet-body">
                                                                    <div class="row static-info">
                                                                        <div class="col-md-5 name"> Blood Group: </div>
                                                                        <div class="col-md-7 value"> <?php echo $result['blood_group'];?> </div>
                                                                    </div>
                                                                





                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

  
                          <?php
                      }}}?>
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
<?php
}else{
    echo "sorry page not found.....";
}
?>