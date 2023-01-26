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
    <title>Banner</title>
    <link rel="stylesheet" href="../asset/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <h2>Banner</h2>
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
                <div class="w50">
                    <a href="addbanner.php" class="button">add banner</a>
                </div>
                <div class="w50 initial">
                    <form action="" class="w50 search">
                        <input type="text" placeholder="search...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <table id="category">
                    <tr>
                        <th>No</th>
                        <th>Banner</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $i = 1;
                    $banner = mysqli_query($con,"SELECT * FROM banner");
                    foreach ($banner as $data){
                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td> <img width="350" height="200" src="../Banner/<?php echo $data['gambar'] ?>" alt=""> </td>
                        <td>
                            <a href="editbanner.php?id=<?php echo $data['id']; ?>"> <i class="fas edit-btn fa-pen-to-square"></i> </a>
                            <a href="deletebanner.php?id=<?php echo $data['id']; ?>"> <i class="fas fas delete-btn fa-trash
                                "></i> </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</body>

</html>