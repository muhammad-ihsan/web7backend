<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/app.css">
</head>
<body>
    <h2>LOGIN FORM</h2>
    <form action="action/loginaction.php" method="post">
        <div class="imgicon">
            <img src="https://casulleras.com/wp-content/uploads/2015/01/person-icon.png" alt="">
        </div>
        <div class="container">
            <label for="email"><b>E-mail</b></label>
            <input type="email" placeholder="email" name="email">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="password" name="password">
            <!-- <button type="submit" onclick="window.location.href='admin/index.html',true;">login</button> -->
            <button type="submit" class="login">login</button>
        </div>
        <div class="footer">
            <p>or</p>
            <a href="register.php" class="singup">register</a>
        </div>
    </form>
</body>
</html>