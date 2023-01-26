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
    <h2>REGISTER</h2>
    <form action="action/registeraction.php" method="post" enctype="multipart/form-data">
        <div class="imgicon">
            <img id="output" src="https://casulleras.com/wp-content/uploads/2015/01/person-icon.png" alt="">
        </div>
        <div class="container">
            <label for="imageprofil"><b>image profil</b></label>
            <input type="file" onchange="loadFile(event)" placeholder="filegambar" name="file">
            <label for="username"><b>User name</b></label>
            <input type="text" placeholder="username" name="username">

            <label for="phone"><b>phone</b></label>
            <input type="text" placeholder="phone" name="phone">

            <label for="address"><b>address</b></label>
            <textarea name="address" id=""></textarea>

            <label for="email"><b>E-mail</b></label>
            <input type="email" placeholder="email" name="email">

            <label for="password"><b>password</b></label>
            <input type="password" placeholder="password" name="password">
            <button type="submit">Register</button>
        </div>
        <div class="footer">
            <p>or</p>
            <a href="login.php" class="singup">login</a>
        </div>
    </form>
    <script>
        var loadFile=function(event){
            var reader = new FileReader();
            reader.onload =function(){
                var output = document.getElementById('output');
                output.src=reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
</body>
</html>