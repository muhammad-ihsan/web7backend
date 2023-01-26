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
    <title>DashBoard</title>
    <link rel="stylesheet" href="../asset/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="header">
        <h2>DashBoard</h2>
    </div>
    <div id="wrapper">
        <div id="menu">
            <div class="imgcontainer">
                <img id="output" src="https://casulleras.com/wp-content/uploads/2015/01/person-icon.png" alt="">
                <p>Fabian</p>
            </div>
            <?php include "navbar.php" ?>
        </div>
        <main>
            <div class="container">
                <div class="card">
                    <div class="part">
                        <h2>Total User</h2>
                        <p>Jumlah User ...</p>
                    </div>
                    <i class="fas fa-user"></i>
                </div>
                <div class="card">
                    <div class="part">
                        <h2>Total Category</h2>
                        <p>Jumlah Category ...</p>
                    </div>
                    <i class="fa-solid fa-align-justify"></i>
                </div>
                <div class="card">
                    <div class="part">
                        <h2>Total Post</h2>
                        <p>Jumlah Post ...</p>
                    </div>
                    <i class="fa-solid fa-book-open"></i>
                </div>
            </div>
        </main>
    </div>
</body>
</html>