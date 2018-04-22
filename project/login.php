                       <?php
                        $alert="";
if(isset($_POST['register']))
{
if(include('conn.php'))
{

$PRN=$_POST['PRN'];
$enrolment=$_POST['enrolment'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$birth=$_POST['birth'];
$pass=md5($_POST['pass']);
$sql = "INSERT INTO students (PRN, enrolment,fname,lname,birth,email,password)
VALUES ('$PRN', '$enrolment','$fname','$lname','$email','$birth','$pass')";

if (mysqli_query($conn, $sql)) {
    $alert="register successfully";
} else {
    echo "sorry something going to be wrong";
     echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>

<?php
if(isset($_POST['login']))
{
if(include('conn.php'))
{
$PRN=$_POST['PRN'];
$pass=md5($_POST['pass']);
$sql = "SELECT * from students where PRN='$PRN' AND password='$pass'";
$sql1=mysqli_query($conn, $sql);
if ($sql1) {
    $count=mysqli_num_rows($sql1);
    if($count==1)
    { session_start(); 
     $_SESSION['PRN']=$PRN;
        header('Location:student_index.php');
    }
    else {
    $alert="sorry something going to be wrong";
     //echo "Error: " . $sql . "<br>" . $conn->error;
}
} 

else {
    $alert="sorry something going to be wrong";
     echo "Error: " . $sql . "<br>" . $conn->error;
}
     

}
}

?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | User Login 5</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <?php
if(isset($_POST['complaint']))
{
if(include('conn.php'));
{
$title=$_POST['title'];
$desc=$_POST['description'];

$sql = "INSERT INTO complaints (title, description)
VALUES ('$title', '$desc')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "sorry something going to be wrong";
}
}
}

?>



        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset" >
                <div class="col-md-6 bs-reset mt-login-5-bsfix" >
                   <!-- BEGIN SAMPLE FORM PORTLET-->

                   <div>
                       <img src="../assets/images/logo.png" alt="" style="width: 100%;">
                   </div>
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
                                                    <textarea class="form-control input-lg"
                                                    rows="10" placeholder="Message......." name="description" required=""> </textarea></div>
                                                
                                            </div>
                                            <div class="form-actions right">
                                                <button type="button" class="btn default">Cancel</button>
                                                <button type="submit" class="btn green" name="complaint">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- END SAMPLE FORM PORTLET-->
                               
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                      <br>
                        <h1> Student Login</h1>
                        
                        
                           <?php
                       
                       echo $alert;
                        
                       ?>
                       
                       

                        <p> E-concealing  is online concealing system which solve the students problems</p>
                        <form action="" class="login-form" method="post">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any PRN NUMBER and PASSWORD. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="PRN NUMBER" name="PRN" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="pass" required/> </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="btn green">Sign up</a>
                                    </div>
                                    <button class="btn green" type="submit" name="login">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="" method="post">
                            <h3 class="font-green">sign up  ?</h3>
                            <p> Enter your PRN NO , e-mail address below to sign up. </p>
                             <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="PRN NO" name="PRN" /> </div>
                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Enrolment NO" name="enrolment" /> </div>

                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="First Name" name="fname" /> </div>
                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Last Name" name="lname" /> </div>
                                <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="date" autocomplete="off" placeholder="Date_Of_Birth" name="birth" /> </div>
                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                                
                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="PASSWORD" name="pass" /> </div>
                                 <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="CONFORM PASSWORD" name="cpass" /> </div>
                           
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right" name="register">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>