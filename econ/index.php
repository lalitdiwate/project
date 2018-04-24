<?php
include('inc/session.php');
if(isset($_SESSION['PRN']))
{
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>| Student Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
           
                <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default"> </a>
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
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="dropdown-menu-list scroller" style="height: 250px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-default"> 4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">7 New</span> Messages</h3>
                                        <a href="app_inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-default"> 3 </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">12 pending</span> tasks</h3>
                                        <a href="app_todo.html">view all</a>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg">
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
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
                        <h1 class="page-title"> Student Dashboard
                            <small></small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                                <!-- END REGIONAL STATS PORTLET-
                                <h1 class="page-title"> Bootstrap Form Wizard
                            <small>bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->

                        <?php

if(include('inc/config.php'))
{
$PRN=$_SESSION['PRN'];

$sql = "SELECT * from student_details where PRN='$PRN'";
$sql1=mysqli_query($conn, $sql);
if ($sql1) {
    $count=mysqli_num_rows($sql1);
    if($count!=1)
{ 
 

?>                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="portlet light bordered" id="form_wizard_1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red bold uppercase"> Student Details
                                                <span class="step-title"> Step 1 of 4 </span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" action="insert_details1.php" id="submit_form" method="POST">
                                            <div class="form-wizard">
                                                <div class="form-body">
                                                    <ul class="nav nav-pills nav-justified steps">
                                                        <li>
                                                            <a href="#tab1" data-toggle="tab" class="step">
                                                                <span class="number"> 1 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Personal Details </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number"> 2 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Counseling  Details 1 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                                <span class="number"> 3 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Counseling  Details 2  </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" data-toggle="tab" class="step">
                                                                <span class="number"> 4 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Confirm </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                                        <div class="progress-bar progress-bar-success"> </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="alert alert-danger display-none">
                                                            <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                        <div class="alert alert-success display-none">
                                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                        <div class="tab-pane active" id="tab1">
                                                            <h3 class="block">Provide your account details</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">First Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="first_name" />
                                                                    <span class="help-block"> Provide your First Name </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Middle Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="middle_name" />
                                                                    <span class="help-block"> Provide your Middle Name </span>
                                                                </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="control-label col-md-3">Last Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="last_name" />
                                                                    <span class="help-block"> Provide your Last Name </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Full Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="full_name" />
                                                                    <span class="help-block"> Provide your Last Name </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Mother Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="mother_name" />
                                                                    <span class="help-block"> Provide your Mother Name </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Date Of Birth(dd/MM/YYYY)
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="date"   class="form-control" name="date_of_birth" />
                                                                    <span class="help-block"> e.g 1/11/2020 </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Gender
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <div class="radio-list">
                                                                        <label>
                                                                            <input type="radio" name="gender" value="Male" data-title="Male" /> Male </label>
                                                                        <label>
                                                                            <input type="radio" name="gender" value="Female" data-title="Female" /> Female </label>
                                                                    </div>
                                                                    <div id="form_gender_error"> </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Blood Group
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <div class="radio-list">
                                                                        <label>
                                                                            <input type="radio" name="blood_group" value="O+" data-title="Male" /> O+ </label>
                                                                       
                                                                        <label>
                                                                            <input type="radio" name="blood_group" value="A+"  /> A+ </label>
                                                                        <label>
                                                                            <input type="radio" name="blood_group" value="AB+"  /> AB+ </label>
                                                                        <label>
                                                                            <input type="radio" name="blood_group" value="B+"  /> B+ </label>
                                                                         <label>
                                                                            <input type="radio" name="blood_group" value="O-"  /> O- </label>
                                                                             <label>
                                                                            <input type="radio" name="blood_group" value="AB-"  /> AB- </label>
                                                                         <label>
                                                                            <input type="radio" name="blood_group" value="A-"  /> A- </label>
                                                                         <label>
                                                                            <input type="radio" name="blood_group" value="B-"  /> B- </label>
                                                                    </div>
                                                                    <div id="form_gender_error"> </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Mothertongue</label>
                                                                <div class="col-md-4">
                                                                    <select name="mothertongue" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="English">English</option>
                                                                         <option value="Hindi">Hindi</option>
                                                                          <option value="Marathi">Marathi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Category</label>
                                                                <div class="col-md-4">
                                                                    <select name="category" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="OBC">OBC</option>
                                                                        <option value="SC">SC</option>
                                                                         <option value="NT">NT</option>
                                                                          <option value="VJ">VJ</option>
                                                                       
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Caste</label>
                                                                <div class="col-md-4">
                                                                    <select name="caste" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="KUNDI">KUNDI</option>
                                                                        <option value="MAHAR">MAHAR</option>
                                                                        
                                                                       
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Religion</label>
                                                                <div class="col-md-4">
                                                                    <select name="religion" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Muslim">Muslim</option>
                                                                         <option value="Budha">Budha</option>
                                                                       
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <h2> <label class="control-label col-md-3 offset-md-6">Contact details</label></h2>
                                                            <br><br><br><br><br>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Phone Number
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="phone_no" required />
                                                                    <span class="help-block"> Provide your phone number </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Email Address
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="email" class="form-control" name="email_address" />
                                                                    <span class="help-block"> Provide your email address</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Permenent Address
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name=" permenent address"  />
                                                                    <span class="help-block"> Provide your street address </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Present Address
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="present address"  />
                                                                    <span class="help-block"> Provide your Present street address </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">City/Town
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" required="" name="city" />
                                                                    <span class="help-block"> Provide your city or town </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Country</label>
                                                                <div class="col-md-4">
                                                                    <select name="country" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="GF">French Guiana</option>
                                                                        <option value="PF">French Polynesia</option>
                                                                        <option value="TF">French Southern Territories</option>
                                                                        <option value="GA">Gabon</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgia</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GR">Greece</option>
                                                                        <option value="GL">Greenland</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard and Mc Donald Islands</option>
                                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran (Islamic Republic of)</option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="JM">Jamaica</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="JO">Jordan</option>
                                                                        <option value="KZ">Kazakhstan</option>
                                                                        <option value="KE">Kenya</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                                                        <option value="KR">Korea, Republic of</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="KG">Kyrgyzstan</option>
                                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                                        <option value="LV">Latvia</option>
                                                                        <option value="LB">Lebanon</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Lithuania</option>
                                                                        <option value="LU">Luxembourg</option>
                                                                        <option value="MO">Macau</option>
                                                                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="MG">Madagascar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MH">Marshall Islands</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauritania</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="FM">Micronesia, Federated States of</option>
                                                                        <option value="MD">Moldova, Republic of</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolia</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MA">Morocco</option>
                                                                        <option value="MZ">Mozambique</option>
                                                                        <option value="MM">Myanmar</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PW">
                                                                        <option value="GB">United Kingdom</option>
                                                                        <option value="US">United States</option>
                                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Uzbekistan</option>
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VE">Venezuela</option>
                                                                        <option value="VN">Viet Nam</option>
                                                                        <option value="VG">Virgin Islands (British)</option>
                                                                        <option value="VI">Virgin Islands (U.S.)</option>
                                                                        <option value="WF">Wallis and Futuna Islands</option>
                                                                        <option value="EH">Western Sahara</option>
                                                                        <option value="YE">Yemen</option>
                                                                        <option value="ZM">Zambia</option>
                                                                        <option value="ZW">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Remarks</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="remark"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="tab2">
                                                            <h4 class="block">Provide Admission info   </h4>
                                                            <h3 class="block">1st year  </h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> branch
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="1st_branch" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> C.G.P.A Marks
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="1st_cgpa" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Roll No.
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="1st_roll_no" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Result</label>
                                                                <div class="col-md-4">
                                                                    <select name="1st_result" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="pas">Clear/Pass</option>
                                                                        <option value="MAHAR">ATKT</option>
                                                                        <option value="MAHAR">DC</option>
                                                                        
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Section
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="1st_section" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> year of Admision
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="1st_year_of_admision" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                                 <h4 class="block">2st year  </h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> branch
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="2st_branch" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> C.G.P.A Marks
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="2st_cgpa" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Roll No.
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="2st_roll_no" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Result</label>
                                                                <div class="col-md-4">
                                                                    <select name="2st_result" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="pass">Clear/Pass</option>
                                                                        <option value="ATKT">ATKT</option>
                                                                        <option value="DC">DC</option>
                                                                        
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Section
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="2st_section" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> year of Admision
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="2st_year_of_admision" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>

                                                                 <h4 class="block">3st year  </h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> branch
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="3st_branch" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> C.G.P.A Marks
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="3st_cgpa" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Roll No.
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="3st_roll_no" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Result</label>
                                                                <div class="col-md-4">
                                                                    <select name="3st_result" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="pass">Clear/Pass</option>
                                                                        <option value="ATKT">ATKT</option>
                                                                        <option value="DC">DC</option>
                                                                        
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Section
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="3st_section" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> year of Admision
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="3st_year_of_admision" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                                  <h4 class="block">4st year  </h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> branch
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="4st_branch" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> C.G.P.A Marks
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="4st_cgpa" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Roll No.
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="4st_roll_no" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Result</label>
                                                                <div class="col-md-4">
                                                                    <select name="4st_result" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="pass">Clear/Pass</option>
                                                                        <option value="ATKT">ATKT</option>
                                                                        <option value="DC">DC</option>
                                                                        
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Section
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="4st_section" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> year of Admision
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="4st_year_of_admision" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <h4 class="block">Other Info  </h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Type Of Admision</label>
                                                                <div class="col-md-4">
                                                                    <select name="type_of_admision" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="CAP">CAP</option>
                                                                        <option value="MANAGMENT">MANAGMENT</option>
                                                                        
                                                                       
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Annual Inncome Of Parents
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="annual_income_of_parents" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> Name Of Last Collage or School
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="name_of_last_collage_or_school" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> Address Of Last Collage or School
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="address_of_last_collage_or_school" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> SSC %
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="ssc_percentage" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3"> HSC %
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="number" class="form-control" name="hsc_percentage" />
                                                                    <span class="help-block"> </span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Area Of interest</label>
                                                                <div class="col-md-4">
                                                                    <select name="area_of_interest" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Technical">Technical</option>
                                                                        <option value="NonTechnical">NonTechnical</option>
                                                                        
                                                                       
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">Achivment in school</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="achivment_in_school"></textarea>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3">Achivment in During the Coures</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="achivment_in_during_the_coures"></textarea>
                                                                </div>
                                                            </div>





                                                            
                                                        </div>
                                                        <div class="tab-pane" id="tab3">
                                                            <h3 class="block">Provide your Cunseling details 2</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Any Scholership</label>
                                                                <div class="col-md-4">
                                                                    <select name="any_scholership" id="country_list" class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="NO">NO</option>  
                                                                    </select>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Additional Qualification</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="additional_qualification"></textarea>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Work Area Choice For Placement</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="work_area_choice_for_placement"></textarea>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Future Planning</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="future_planning"></textarea>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="control-label col-md-3">Hobbies</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="hobbies"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Any Other Info</label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="any_other_info"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane" id="tab4">
                                                            <h3 class="block">Confirm your account</h3>
                                                            <h4 class="form-section">To insert The information please click Submit Button</h4>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <a href="javascript:;" class="btn default button-previous">
                                                                <i class="fa fa-angle-left"></i> Back </a>
                                                            <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                            <button type="submit" name="submit" class="btn green button-submit"> Submit
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<?php                            
    }
    else {
    echo "Your counseling details is already submited if you want to update it  plase click on following button<br>";
    
     ?>
<a href="student_edit.php" a=class="btn green">Update Info</a>

     <?php
}
} 



     
}

?>

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
            
             <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
       
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<?php
}
else{
    echo "sorry login first";

}
?>