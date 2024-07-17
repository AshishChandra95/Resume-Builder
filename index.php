<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header start -->
    <header id="header">
        <div class="back"></div>
        <nav>
            <h1 id="logo"><ion-icon name="menu" id="menu"></ion-icon>CV Build</h1>
            <ol class="ollist">
                <li><a href="#header">Home</a></li>
                <li><a href="#section1">Guide</a></li>
                <li><a href="#section2">Template</a></li>
                <li><a href="#footer">Contact Us </a></li>                
            </ol>

            <div class="sign">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) { ?>
                <?php echo htmlspecialchars($_SESSION['username']); ?>
                <a href="LoginSignup/logout.php" style="padding-left: 10px">Logout</a>
            <?php } else { ?>
                <a href="LoginSignup/Login.php" style="font-family: 'Lato'; color: aliceblue;">Log-in</a>
                <a href="LoginSignup/Sign-up.php" style="padding-left: 10px; font-family: 'Lato'; color: aliceblue;">Sign-up</a>
            <?php } ?>
            </div>
                        
        </nav>
        <div class="content">
            <div class="front border2px"></div>
            <div class="start">
                <h2 class="free">Build a Professional Resume</h2>
                <p class="free">Quick Resume Builder and Quick Response</p>
                <p class="free">Choose Your Template According to Your Profession</p>
                <center><a href="form.html"><button id="start">Let's Start</button></a></center>
            </div>
        </div>        
    </header>
    <!-- Header End -->


    <!-- Back to Top start -->

    <a href="#" id="back-top"> <ion-icon name="home"></ion-icon> </a>

    <!-- Back to Top end -->



    <!-- slide menu start  -->

    <div id="slide-menu">
        <ol id="sol" class="second-ollist" style="width: 100%; margin-left: 0%;">
            <a href="#header" class="slide-btn">Home</a>
            <a href="#section1" class="slide-btn">Guide</a>
            <a href="#section2" class="slide-btn">Template</a>
            <a href="#footer" class="slide-btn">Contact Us </a>
        </ol>
    </div>

    <!-- slide menu end  -->

    <!-- Login Popup start -->
    <div id="login-div">
        <div id="login-popup">                        
            <ion-icon name="close" id="lg-cross" onclick="closePopup()"></ion-icon>
            <h3> LOGIN </h3>
            <form action="LoginSignup/login-data.php">
                <label for="username">Username-:</label><br>
                <input type="Username" name="name" id="username" placeholder="Username"><br>
                <label for="password">Password-:</label><br>
                <input type="password" name="pass" id="password" placeholder="Password">

                <div>
                    <input type="submit" name="submit" value="LOGIN" class="lg-frm-btn" style="background-color: rgb(225, 189, 26); margin-left: -10%;">        
                </div>                
            </form>

            <div id="second-popup-div">
                <p> Not an Account ?? </p>
                <a href="LoginSignup/Sign-up.php" style="text-decoration: underline;">Click here to Create account </a>
            </div>
        </div>
    </div>

    <!-- Login Popup end -->
    
    <!-- Section first Start -->
    <section class="section1" id="section1">
        <div class="temp border2px"></div>
        <div class="guide">
            <h2>Create a Quick Resume & CV</h2>
            <h3>Upload Your Photo</h3>
            <p>Image Should Be In .jpg/.jpeg/.png</p>
            <h3>Enter your Details</h3>
            <p>Enter Details Step by Step</p>
            <h3>Your Resume is Ready within a Second</h3>
            <p>Resume is Ready With Multiple Templates</p>
            <h3>Select Template</h3>
            <p>Select a Professional Template According To your Profession</p>
            <h3>Print</h3>
            <p>Print your Resume & CV</p>
        </div>
    </section>
    <!-- section first end -->

    <!-- section second start -->
    <section class="section2" id="section2"><hr>
        <h1>Here Are Some Sample </h1>
        <div class="sample">
            <a href="#"><img src="Images/ashish.png" alt="Image not found" class="border2px"></a>
            <a href="#"><img src="Images/praveen.png" alt="Image 2nd not found" class="border2px"></a>
            <a href="#"><img src="Images/ankush.png" alt="Image 3rd not found" class="border2px"></a>
        </div>
    </section>
    <!-- section second end -->
    
    <!-- Footer Start -->
    <footer id="footer">
        <div class="sign-up">
            <div class="con">
                <h3>Contact:-</h3>
                <h5>+91 9520XXXXXX</h5>
                <h5>+91 9220XXXXXX</h5>
                <h5>+91 8920XXXXXX</h5>
            </div>
            <div class="con">
            <h3>Email:-</h3>
                <h5>resumebuilder@gmail.com</h5>
            </div>
        </div>
        <div class="copyright">
            <p>&copy 2024 Copyright : resumebuilder.com</p>
        </div>
    </footer>
    <!-- footer end -->
     

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>
