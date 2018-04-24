<?php include('inc/session.php') ;
$alert = '';  
include('inc/config.php');



if (isset($_POST['update'])) {



     $prn = $_SESSION['PRN'];
    $email = $_POST['email_address'];
    
    $q      = "SELECT * FROM student_details WHERE PRN!='$prn' && email_address ='$email' ";
    $result = mysqli_query($conn, $q);
    $email  = mysqli_num_rows($result);


 if (!empty($_FILES['image'])) {
        // $path = "images/";
        // $path = $path . basename( $_FILES['image']['name']);
        $temp        = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $path = "images/";
        $path = $path . $newfilename;
        $image = $path;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            echo "The file " . basename($_FILES['image']['name']) .
                " has been uploaded";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
    }




        if ($email > 0) {
        $alert = 'This Email Id is already used.';
    } else {
        $email         = $_POST['email_address'];
         
        $first_name = $_POST['first'];
        $middle_name = $_POST['middle'];
        $last_name = $_POST['first'];
        $dob = $_POST['date_of_birth'];
        $phone_no = $_POST['phone_no'];
        

        $sql = "UPDATE student_details SET first_name='" . $first_name . "', last_name='" . $last_name . "',middle_name='" . $middle_name . "',date_of_birth='" . $dob . "', email_address='" . $email . "', image='" . $image . "',phone_no='" . $phone_no . "'WHERE PRN= '$prn'";
        $result = mysqli_query($conn, $sql);
        if (isset($result)) {
            $alert              = "Your Profile Updated Successfully";
            $_SESSION['username'] = $first_name;
            $_SESSION['image'] = $image;

            
        }
    }







//     $prn = $_SESSION['PRN'];
//     $email = $_POST['email_address'];
    
//     $q      = "SELECT * FROM student_details WHERE PRN!='$prn' && email_address ='$email' ";
//     $result = mysqli_query($conn, $q);
//     $email  = mysqli_num_rows($result);
//       if (!empty($_FILES['image'])) {
         
//         $temp        = explode(".", $_FILES["image"]["name"]);
//         $newfilename = round(microtime(true)) . '.' . end($temp);
//         $path = "images/";
//         $path = $path . $newfilename;
//         $image = $newfilename;
//         move_uploaded_file($_FILES['image']['tmp_name'], $path);
//     }
    

//     if ($email > 0) {
//         $error = 'This Email Id is already used.';
//     } else {
//         $email         = $_POST['email_address'];
         
//         $first_name         = $_POST['first'];
//         $middle_name         = $_POST['middle'];
//         $last_name         = $_POST['first'];
//         $dob           = $_POST['date_of_birth'];
//         $phone_no           = $_POST['phone_no'];
        

//         $sql = "UPDATE student_details SET first_name='" . $first_name . "', last_name='" . $last_name . "',middle_name='" . $middle_name . "',date_of_birth='" . $dob . "', email_address='" . $email . "', image='" . $image . "',phone_no='" . $phone_no . "', WHERE PRN= '$prn'";
//         $result = mysqli_query($conn, $sql);
//         if (isset($result)) {
//             $alert              = "Your Profile Updated Successfully";
//             $_SESSION['username'] = $first_name;
            
//         }
//     }



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
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <?php if ($_SESSION['type'] == 'student') {?>
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

<?php $prn = $_SESSION['PRN'];

 

$sql = "SELECT * FROM student_details WHERE PRN = '$prn'";
 $result =  mysqli_query($conn,$sql);

 $data = mysqli_fetch_assoc($result);


?>




                                    <div class="portlet-body form">
                                        <form role="form" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control input-lg" placeholder="First Name" name="first" required="" value="<?php echo $data['first_name']; ?>"> </div>

                                                    <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control input-lg" placeholder="Middle Name" name="middle" value="<?php echo $data['middle_name']; ?>" required=""> </div>

                                                    
                                                     <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control input-lg" value="<?php echo $data['last_name']; ?>" placeholder="Last Name" name="last" required=""> </div>

                                                     <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control input-lg" placeholder="Email" name="email_address" required="" value="<?php echo $data['email_address']; ?>"> </div>

                                                    <div class="form-group">
                                                    <label>Phone No.</label>
                                                    <input type="number" class="form-control input-lg" value="<?php echo $data['phone_no']; ?>" placeholder="Phone No." name="phone_no" required=""> </div>


                                                    <div class="form-group">
                                                    <label>D.O.B</label>
                                                    <input type="date" class="form-control input-lg" placeholder="D.O.B" name=" date_of_birth" required="" value="<?php echo $data['date_of_birth']; ?>"> </div>


                                                    

                                                     <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control input-lg" placeholder="File" name="image"  > </div>
                                                
                                               
                                               
                                                
                                            </div>
                                            <div class="form-actions right">
                                                <button type="button" class="btn default">Cancel</button>
                                                <button type="submit" class="btn green" name="update">Submit</button>
                                            </div>
                                        </form>
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