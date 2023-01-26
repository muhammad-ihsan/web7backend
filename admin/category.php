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
    <title>Category</title>
    <link rel="stylesheet" href="../asset/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <h2>Category</h2>
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
                    <a href="addcategory.php" class="button">add Category</a>
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
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $id = 1;
                    $category = mysqli_query($con,"SELECT * FROM kategori");
                    foreach ($category as $data){
                    ?>
                    <tr>
                        <td><?php echo $id++ ?></td>
                        <td> <p> <?php echo $data['kategori']; ?></p> </td>
                        <td>
                            <a href="editcategory.php?id=<?php echo $data['id']; ?>"> <i class="fas edit-btn fa-pen-to-square"></i> </a>
                            <a href="delete_category.php?id=<?php echo $data['id']; ?>"> <i class="fas fas delete-btn fa-trash
                                "></i> </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </main>
    </div>
</body>

</html>