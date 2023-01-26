<?php
include "../action/connect.php";
session_start();

if($_SESSION['status']!= 'login'){
    echo '<script type = "text/javascript">
    alert ("harap login kembali");
    window.location.href="../login.php?needlogin";
    </script>
    ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah Banner</title>
    <link rel="stylesheet" href="../asset/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <h2>tambah User</h2>
    </div>
    <div id="wrapper">
        <div id="menu">
            <div class="imgcontainer">
                <img id="output" src="https://casulleras.com/wp-content/uploads/2015/01/person-icon.png" alt="">
                <p>Fabian</p>
            </div>
            <nav id="nav">
                <ul>
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                            DashBoard
                        </a>
                    </li>
                    <li>
                        <a href="banner.html">
                            <i class="fa-solid fa-bolt"></i>
                            banner
                        </a>
                    </li>
                    <li>
                        <a href="category.html">
                            <i class="fas fa-align-left"></i>
                            category
                        </a>
                    </li>
                    <li>
                        <a href="post.html">
                            <i class="fas fa-info-circle"></i>
                            post
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="fas fa-user"></i>
                            user
                        </a>
                    </li>
                    <li>
                        <a href="../login.html">
                            <i class="fas fa-info-circle"></i>
                            logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <main>
            <div class="container">
                <form action="">
                    <span class="title">Profil User Picture</span>
                        <div class="w100 t-center">
                            <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-image-512.png" class="w200" alt="" id="thumbnail">
                        </div>
                        <input type="file" placeholder="pilihgambar" onchange="loadFile(event)" class="form-ctr">
                    <div class="w100 form-control">
                      <span class="title">User Name</span>
                      <input type="text" placeholder="User Name" class="form-ctr">
                    </div>
                    <div class="w100 form-control">
                        <span class="title">phone</span>
                        <input type="text" placeholder="phone" class="form-ctr">
                      </div>
                      <div class="w100 form-control">
                        <span class="title">Addres</span>
                        <input type="text" placeholder="Addres" class="form-ctr">
                      </div>
                      <div class="w100 form-control">
                        <span class="title">Email</span>
                        <input type="text" placeholder="Email" class="form-ctr">
                      </div>
                      <div class="w100 form-control">
                        <span class="title">Password</span>
                        <input type="text" placeholder="Password" class="form-ctr">
                      </div>
                    <div class="form-control">
                        <button class="w50 succes" type="submit">Save</button>
                        <button class="w50 cancel" formaction="banner.html">Cancel</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script>
        var loadFile=function(event){
            var reader = new FileReader();
            reader.onload=function(){
                var output=document.getElementById('thumbnail');
                output.src=reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
</body>

</html>