<?php
    session_start();
    session_unset();
    echo "<script>
    alert('Logout Succesfully');
    window.location.href = 'http://localhost/ResumeBuilder/LoginSignup/Login.php';
    </script>";
?>

