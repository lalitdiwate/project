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



                        <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
                                                <!-- BEGIN: Actions -->
                                                <div class="mt-actions">
                                                    <div class="mt-action">
                                                            <?php             
                 include('inc/config.php');  
                 $sql = "SELECT * from complaints where receiver='admin'";
                 $sql1=mysqli_query($conn, $sql);
                if ($sql1) {
                 ;
             
                    while($result=mysqli_fetch_array($sql1,MYSQLI_ASSOC)) {
                     
                       
                           
                   ?> 
                                                        <div class="mt-action-body " style="margin-top: 2%;">
                                                            <div class="mt-action-row">
                                                                <div class="mt-action-info ">
                                                                    <div class="mt-action-icon ">
                                                                        <i class=" icon-bubbles"></i>
                                                                    </div>
                                                                    <div class="mt-action-details ">
                                                                        <span class="mt-action-author"><?php echo $result['title'];?></span>
                                                                      
                                                                    </div>
                                                                </div>

                                                                <div class="mt-action-datetime ">
                                                                    <span class="mt-action-date"><?php echo $result['date'];?></span>
                                                                    <span class="mt-action-dot bg-red"></span>
                                                                    <span class="mt=action-time"><?php echo $result['time'];?></span>
                                                                </div>
                                                                <hr>
                                                              
                                                            </div>
                                                        </div> 

                                                         <?php

                    }

                    }
                   ?> 
                                                    </div>
                                                </div>
                                                 


                                            </div>
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