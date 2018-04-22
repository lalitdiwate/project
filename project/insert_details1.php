                       <?php
// if(isset($_POST['submit']))
// {
if(include('conn.php'))
{
	session_start();
$PRN=$_SESSION['PRN'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$middle_name=$_POST['middle_name'];
$mother_name=$_POST['mother_name'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$mothertongue=$_POST['mothertongue'];
$category=$_POST['category'];
$caste=$_POST['caste'];
$religion=$_POST['religion'];
$phone_no=$_POST['phone_no'];
$email_address=$_POST['email_address'];
$permenent_address=$_POST['permenent_address'];
$present_address=$_POST['present_address'];
$city=$_POST['city'];
$country=$_POST['country'];
$remark=$_POST['remark'];
$first_year_branch=$_POST['1st_branch'];
$second_year_branch=$_POST['2st_branch'];
$third_year_branch=$_POST['3st_branch'];
$fourth_year_branch=$_POST['4st_branch'];
$first_year_cgpa=$_POST['1st_cgpa'];
$second_year_cgpa=$_POST['2st_cgpa'];
$third_year_cgpa=$_POST['3st_cgpa'];
$fourth_year_cgpa=$_POST['4st_cgpa'];
$first_year_roll_no=$_POST['1st_roll_no'];
$second_year_roll_no=$_POST['2st_roll_no'];
$third_year_roll_no=$_POST['3st_roll_no'];
$fourth_year_roll_no=$_POST['4st_roll_no'];

$first_year_result=$_POST['1st_result'];
$second_year_result=$_POST['2st_result'];
$third_year_result=$_POST['3st_result'];
$fourth_year_result=$_POST['4st_result'];
$first_year_of_admision=$_POST['1st_year_of_admision'];
$second_year_of_admision=$_POST['2st_year_of_admision'];
$third_year_of_admision=$_POST['3st_year_of_admision'];
$fourth_year_of_admision=$_POST['4st_year_of_admision'];

$type_of_admision=$_POST['type_of_admision'];
$annual_income_of_parents=$_POST['annual_income_of_parents'];
$name_of_last_collage_or_school=$_POST['name_of_last_collage_or_school'];
$address_of_last_collage_or_school=$_POST['address_of_last_collage_or_school'];
$ssc_percentage=$_POST['ssc_percentage'];
$hsc_percentage=$_POST['hsc_percentage'];
$area_of_interest=$_POST['area_of_interest'];
$achivment_in_school=$_POST['achivment_in_school'];
$achivment_in_during_the_coures=$_POST['achivment_in_during_the_coures'];

$any_scholership=$_POST['any_scholership'];
$additional_qualification=$_POST['additional_qualification'];
$work_area_choice_for_placement=$_POST['work_area_choice_for_placement'];
$future_planning=$_POST['future_planning'];
$hobbies=$_POST['hobbies'];
$any_other_info=$_POST['any_other_info'];
$full_name=$_POST['full_name'];
$status=1;

$sql = "INSERT INTO student_details (PRN,first_name,middle_name,last_name,mother_name,date_of_birth,gender,blood_group,mothertongue,category,caste,religion,phone_no,email_address,permenent_address,present_address,city,country,remark,1st_branch,1st_cgpa,1st_result,1st_roll_no,1st_year_of_admision,2st_branch,2st_cgpa,2st_result,2st_roll_no,2st_year_of_admision,3st_branch,3st_cgpa,3st_result,3st_roll_no,3st_year_of_admision,4st_branch,4st_cgpa,4st_result,4st_roll_no,4st_year_of_admision,type_of_admision,annual_income_of_parents,name_of_last_collage_or_school,address_of_last_collage_or_school,ssc_percentage,hsc_percentage,area_of_interest,achivment_in_school,achivment_in_during_the_coures,any_scholership,additional_qualification,work_area_choice_for_placement,future_planning,hobbies,any_other_info,full_name,status)
VALUES ('$PRN','$first_name','$middle_name','$last_name','$mother_name','$date_of_birth','$gender','$blood_group','$mothertongue','$category','$caste','$religion','$phone_no','$email_address','$permenent_address','$present_address','$city','$country','$remark','$first_year_branch','$first_year_cgpa','6','$first_year_roll_no','$first_year_of_admision','$second_year_branch','$second_year_cgpa','$second_year_result','$second_year_roll_no','$second_year_of_admision','$third_year_branch','$third_year_cgpa','$third_year_result','$third_year_roll_no','$third_year_of_admision','$fourth_year_branch','$third_year_cgpa','$fourth_year_result','$fourth_year_roll_no','$fourth_year_of_admision','$type_of_admision','$annual_income_of_parents','$name_of_last_collage_or_school','$address_of_last_collage_or_school','$ssc_percentage','$hsc_percentage','$area_of_interest','$achivment_in_school','$achivment_in_during_the_coures','$any_scholership','$additional_qualification','$work_area_choice_for_placement','$future_planning','$hobbies','$any_other_info','$full_name','$status')";

if (mysqli_query($conn, $sql)) {
    echo "register successfully";
} else {
    echo "sorry something going to be wrong";
     echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// }
?>
