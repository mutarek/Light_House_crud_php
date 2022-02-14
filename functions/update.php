<?php
$s_id = $_POST['sid'];
$sname = $_POST['sname'];
$snumber = $_POST['snumber'];
$scourse = $_POST['student_course'];

$db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());

$fetchquery = "SELECT * FROM course WHERE c_id = $scourse";
$result = mysqli_query($db,$fetchquery) or die(mysqli_error());
$eachdata = mysqli_fetch_assoc($result);
$strainer = $eachdata['c_trainer'];

$update_query = " UPDATE student SET s_name = '{$sname}',s_number = {$snumber},s_course = {$scourse},
s_trainer = {$strainer} WHERE s_id = {$s_id}";
mysqli_query($db,$update_query) or die(mysqli_error());
header("Location: http://localhost/light_house/home.php");
mysqli_close();

?>