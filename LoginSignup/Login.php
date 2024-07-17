<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <section>
        <div class="form">
            <h1>LOGIN FORM</h1>
            <form action = "login-data.php" method = "POST">
                <div class="control">
                    <label for="name">NAME</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="control">
                    <label for="pass">PASSWORD</label>
                    <input type="password" name="pass" id="pass">
                </div>
                <div class="control">
                    <input type="submit" value="lOG IN">
                </div>
            </form>
            <p><a href="Sign-up.php">Create new Account</a></p>
        </div>
    </section>
</body>
</html>