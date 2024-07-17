<?php

$conn = mysqli_connect("localhost","root","","Resume") or die("Connection Failed");

$fname = $_POST['fname'];

$dob = $_POST['dob'];

$status = $_POST['mstatus'];

$known = $_POST['lknown'];

$gender = $_POST['gender'];

$nation = $_POST['nation'];

$sql = "INSERT INTO personal_info(fname , dob ,status , known , gender , nation) VALUES ('{$fname}','{$dob}','{$status}','{$known}','{$gender}','{$nation}')";

$result = mysqli_query($conn , $sql) or die("Query Unsuccesful");

header("Location:http://localhost/ResumeBuilder/Form2.html");

mysqli_close($conn);


?>