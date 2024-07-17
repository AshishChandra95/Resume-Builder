<?php

$conn = mysqli_connect("localhost","root","","Resume") or die("Connection Failed");

$nm = $_POST['nm'];

$email = $_POST['email'];

$pass = $_POST['pass'];

$sql = "INSERT INTO user_info(Name,Email,Password) VALUES ('{$nm}','{$email}','{$pass}')";

$result = mysqli_query($conn , $sql);
if(isset($result)){
    echo "<script>
    alert('Account Create Succesfully');
    window.location.href = 'http://localhost/ResumeBuilder/index.php';
    </script>";
    exit;
}
else{
    echo "<script>
    alert('Email Already Exits');
    window.location.href = 'http://localhost/ResumeBuilder/LoginSignup/Sign-up.php';
    </script>";
    exit;
}




mysqli_close($conn);


?>