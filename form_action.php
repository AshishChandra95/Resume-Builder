<?php
$conn = mysqli_connect("localhost", "root", "", "Resume") or die("Connection Failed");

$nm = $_POST['Rname'];

$jb = $_POST['Rjob'];

$ph = $_POST['Rphone'];

$ml = $_POST['Rmail'];

$add = $_POST['Radd'];



if(isset($_POST["submit"])) {
    // Check if the file was uploaded without errors
    $img = $_FILES['image']['name'];
        // Insert image data into database
        $sql = "INSERT INTO resume_data(name, Job_title, Phone, email, address , img_url) VALUES ('{$nm}', '{$jb}', '{$ph}', '{$ml}', '{$add}' , '{$img}')";
        
        if (mysqli_query($conn, $sql)){
            move_uploaded_file($_FILES['image']['tmp_name'],"Picture/$img");
    }
}

header("Location: http://localhost/ResumeBuilder/Form3.html");

mysqli_close($conn);
?>
