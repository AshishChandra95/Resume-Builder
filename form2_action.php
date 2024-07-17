<?php

$conn = mysqli_connect("localhost","root","","Resume") or die("Connection Failed");

$high_school = $_POST['high-school'];

$inter = $_POST['inter-mediate'];

$ug = $_POST['graduation'];

$pg = $_POST['post-graduation'];


$skill_1 = $_POST['skill'];

$skill_2 = $_POST['skill1'];

$skill_3 = $_POST['skill2'];

$skill_4 = $_POST['skill3'];


$sql = "INSERT INTO details_info(high_s , inter_m ,graduation , post_g  , skill1 , skill2 , skill3 , skill4 ) VALUES ('{$high_school}','{$inter}','{$ug}','{$pg}' , '{$skill_1}' , '{$skill_2}', '{$skill_3}', '{$skill_4}')";

$result = mysqli_query($conn , $sql) or die("Query Unsuccesful");

header("Location:http://localhost/ResumeBuilder/Cv-temp1.php");

mysqli_close($conn);


?>