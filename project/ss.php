<?php 
session_start();
 
echo "</br>";
echo $_SESSION['PRN'];
$prn = $_SESSION['PRN'];

include('conn.php');

$sql = "SELECT * FROM student_details where PRN = '123456' ";

$res = mysqli_query($conn,$sql);
echo mysqli_num_rows($res);


?>