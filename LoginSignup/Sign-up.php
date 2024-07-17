<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Sign-up.css">
</head>
<body>
    <section>
        <div class="form">
            <h1>SIGN-FORM</h1>
            <form action="signup_data.php" method="post" name="user" onsubmit = "return validation1()">
                <div class="control">
                    <label for="name">NAME</label>
                    <input type="text" id="name"  name="nm">
                </div>
                <div class="control">
                    <label for="pass">E-mail</label>
                    <input type="email" id="email"  name="email">
                </div>
                <div class="control">
                    <label for="pass">PASSWORD</label>
                    <input type="password" id="pass"  name="pass">
                </div>
                <div class="control">
                    <input type="submit" value="Create">
                </div>
            </form>
            <p id="log"><a href="Login.php">Already Account</a></p>
        </div>
    </section>

    <script>  
            function validation1()  
            {  
                var nm1 = document.user.nm.value;
                var email1 = document.user.email.value;
                var pass1 = document.user.pass.value;
                if(nm1.length=="" && email1.length=="" && pass1.length=="") {  
                    alert("User Name ,Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(nm1.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }
                    if(email1.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }     
                    if (pass1.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

</body>
</html>