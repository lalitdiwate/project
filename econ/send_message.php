<?php include('inc/session.php') ?>
 <?php
 $alert ='';
if(isset($_POST['complaint']))
{
if(include('inc/config.php'));
{
$title=$_POST['title'];
$desc=$_POST['description'];

$sql = "INSERT INTO complaints (title, description)
VALUES ('$title', '$desc')";

if (mysqli_query($conn, $sql)) {
     
    $alert = 'Complaint Raised Successfully';
} else {
     
    $alert = 'sorry something is going wrong';
}
}
}

?>
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
                <?php if ($_SESSION['type'] == 'student') {?>
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
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
                        <h1 class="page-title"> Student Dashboard
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- Yethun Chalu Dya-->



                                        <?php if ($alert != '') { ?>


                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong>Well done!</strong>  <?=$alert ?>
                                            
                                        </div>

                                             
                                      <?php  }?>

                        <div class="portlet light bordered ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-social-dribbble font-blue-sharp"></i>
                                            <span class="caption-subject font-blue-sharp bold uppercase">Send Complaint</span>
                                        </div>
                                        
                                    </div>
                                    <div class="portlet-body form">
                                        <form role="form" action="" method="post">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control input-lg" placeholder="input-lg" name="title" required=""> </div>
                                                
                                               
                                               <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control input-lg" rows="10" placeholder="Message......." name="description" required=""> </textarea></div>
                                                
                                            </div>
                                            <div class="form-actions right">
                                                <button type="button" class="btn default">Cancel</button>
                                                <button type="submit" class="btn green" name="complaint">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        










                <!-- Yethun Khatam Hovu Dya-->
                </div>
                </div>
                  <?php } else{
                    include('404.php');
                  } ?>
                <!-- END CONTENT -->
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