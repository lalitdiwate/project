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




                         <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>Students List  </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> Fisrt Name</th>
                                                        <th scope="col"> Middle Name </th>
                                                        <th scope="col"> Last Name </th>
                                                        <th scope="col"> PRN NO </th>
                                                        <th scope="col"> Gender</th>
                                                        <th scope="col"> E-mail Address</th>
                                                       <th scope="col"> More Details</th>
                                                         
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php             
                 include('inc/config.php');  
                 $sql = "SELECT * from students";
                 $sql1=mysqli_query($conn, $sql);
                if ($sql1) {
                 while($value=mysqli_fetch_array($sql1,MYSQLI_ASSOC))
             {
                    
                   ?>
                                                    <tr>
                                                        <td> <?php echo $value['fname']; ?> </td>
                                                        
                                                        <td>  <?php echo $value['lname']; ?> </td>
                                                        <td>  <?php echo $value['PRN']; ?> </td>
                                                        <td> <?php echo $value['enrolment']; ?> </td>
                                                        <td>  <?php echo $value['birth']; ?> </td>
                                                        <td>  <?php echo $value['email']; ?></td>
                                                        <td> <a class="btn btn green" href="student_more_details.php?PRN=<?php echo $value['PRN']; ?>">More  <i class="fa fa-edit" ></i></a></td>
                                                        
                                                       
                                                    </tr>
                                                   <?php
                                                    
                                                }}
                                                    else{
                                                        echo $conn->error;
                                                    }

                                                   ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->

                        










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