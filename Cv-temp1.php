<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cv-temp1.css">
</head>
<body>

    <?php
    $conn = mysqli_connect("localhost","root","","Resume") or die("Connection Failed");
    
    $sql = "SELECT * FROM resume_data JOIN details_info ON resume_data.Id = details_info.id JOIN personal_info ON details_info.id = personal_info.id ORDER BY resume_data.Id DESC LIMIT 1";

    $result = mysqli_query($conn , $sql) or die("Query Unsuccesful");


    while ($row = mysqli_fetch_assoc($result)){
    ?>
    
    <nav>
        <h1 id="logo">CV Build</h1>
        <button id="btn" onClick="window.print()">PRINT</button>
        <a href="http://localhost/ResumeBuilder">Home</a>
        <a href="http://localhost/ResumeBuilder/LoginSignup/Login.php">Log-in</a>
    </nav>


    <section class="change_temp"> 
        <a href="Cv-temp1.php"><p id="change">Template 1</p></a>
        <a href="Cv-temp2.php"><p id="change">Template 2</p></a>
        <a href="Cv-temp3.php"><p id="change">Template 3</p></a>
        <a href="Cv-temp4.php"><p id="change">Template 4</p></a>
    </section>

    <div class="container">
    <div class="main">
        <div class="details">
            <div class="photo"><img src="Picture/<?php echo $row['img_url']; ?>" alt="notshow" class="image"></div>
            <h2><?php echo $row['name']; ?></h2>
            <h4><?php echo $row['Job_title']; ?></h4>
            <hr style="height: 3px; background-color: #fff;">
            <h4>Contact</h4>
            <p><?php echo $row['Phone']; ?></p>
            <p><?php echo $row['email']; ?></p>
            <p><?php echo $row['address']; ?></p>
            <h4>Skills</h4>
            <p>-<?php echo $row['skill1']; ?></p>
            <p>-<?php echo $row['skill2']; ?></p>
            <p>-<?php echo $row['skill3']; ?></p>
            <p>-<?php echo $row['skill4']; ?></p>
        </div>
        <div class="about">
        
                <h3>Career Objective</h3>
                <p>An organized and motivated employee capable of time management and working under pressure in all environments. Seeking to join company to ensure good internal communications and budget management.</p>
                <h3>Qualifications</h3>
                <p>•	<?php echo $row['high_s']; ?></p>
                <p>•	<?php echo $row['inter_m']; ?></p>
                <p>•	<?php echo $row['graduation']; ?></p>
                <p>•    <?php echo $row['post_g']; ?></p>
                <h3>Personal Details</h3>
                <p>Father's Name   - <?php echo $row['fname']; ?></p>
                <p>Date of Birth   - <?php echo $row['dob']; ?></p>
                <p>Marital Status  - <?php echo $row['status']; ?></p>
                <p>Language Known  - <?php echo $row['known']; ?></p>
                <p>Gender          - <?php echo $row['gender']; ?></p>
                <p>Nationality     - <?php echo $row['nation']; ?></p>

                <h3>Declaration</h3>
                <p id="para1">I hereby declare that all the above information is true and correct in my knowledge and belief.</p>
        </div>
    </div>
    </div>
    <?php } ?>

    <footer id="footer">
        <div class="sign-up">
            <h2>Registration for free <button>Sign-up</button></h2>
        </div>
        <div class="copyright"><p>@2023 Copyright : CV Build.com</p></div>
    </footer>
</body>
</html>