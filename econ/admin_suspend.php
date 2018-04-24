 <?php 
 include('inc/session.php'); 
 include('inc/config.php'); 
   
  $var = $_SESSION['type'] ;
   
   if( $var == 'admin'){ 
 if(isset($_GET['PRN'])!="")
  {
  $suspend=$_GET['PRN'];



$sql  = "SELECT * from students  WHERE PRN='$suspend'";
    $sql1 = mysqli_query($conn, $sql);

    $value = mysqli_fetch_array($sql1, MYSQLI_ASSOC);


$status = !$value['status'];



  $suspend=mysqli_query($conn,"UPDATE students SET status = '$status' WHERE PRN='$suspend'");
  if($suspend)
  {
	  header("Location:admin_student_update.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  }else{ ?>
 <script >alert('Error')</script>
   
 <?php header("Location:admin_student_update.php"); }
?>