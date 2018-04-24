<?php include('inc/session.php') ?>

    

<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <?php include('head.php') ?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">

            <?php include('header.php')?>
            
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <?php include('sidebar.php')?>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <?php if ($_SESSION['type'] == 'admin') {?>
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
               
                       <!-- BEGIN PAGE BAR -->
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
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- Yethun Chalu Dya-->




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
                                            <input type="text" class="form-control" placeholder="Search for students..." name="name">
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

if(include('inc/config.php'))
{


$sql = "SELECT * from student_details where full_name LIKE '%$name%' OR first_name LIKE '%$name%' OR last_name LIKE '%$name%' OR PRN LIKE '%$name%'";
$sql2=mysqli_query($conn, $sql);
if ($sql2) {


    while ($value=mysqli_fetch_assoc($sql2)) {
       
   
    
     
?>
                                            
                                            <li class="search-item clearfix">
                                                <div class="col-md-12">
                                                <div class="search-content ml-5">
                                                    <h4 class="search-title">
                                                        <?php echo $value['first_name']." ".$value['last_name'];
                                                          ?>
                                                    </h4>
                                                   <a href="student_more_details.php?PRN=<?php echo $value['PRN']; ?>" style="float: left;" class="btn blue uppercase bold ">view</a>
                                                </div>
                                            </div>
                                            </li>
<?php
 }

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
                       
                        










                <!-- Yethun Khatam Hovu Dya-->
                </div>
                </div>
                <!-- END CONTENT -->
                <?php } else{
                    include('404.php');
                  } ?>
                <?php include('quicksidebar.php') ?> 
            </div>
            <!-- END CONTAINER -->
             
           <?php include('footer.php')?>
        </div>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
<?php  include('foot.php')?>
</body>


</html>