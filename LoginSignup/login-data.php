<?php

$conn = mysqli_connect("localhost","root","","Resume") or die("Connection Failed");

$nm = $_POST['name'];
$pass = $_POST['pass'];
session_start();


$nm = mysqli_real_escape_string($conn, $nm);  
$pass = mysqli_real_escape_string($conn, $pass); 

$sql = "select * from user_info where Name = '$nm' and Password = '$pass'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if ($count == 1) {  

   $_SESSION['loggedin'] = true;
   $_SESSION['username'] = $nm;
   echo "<script>
           alert('Login Successfully');
           window.location.href = 'http://localhost/ResumeBuilder/index.php';
         </script>";
   exit; // Ensure no further code is executed
}

else {
   echo "<script>
   alert('Invalid Username or Password');
   window.location.href = 'http://localhost/ResumeBuilder/LoginSignup/Login.php';
      </script>";
   exit;
}
 

mysqli_close($conn);
?>