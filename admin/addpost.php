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
    <script src="https://cdn.tiny.cloud/1/nklzzr80nbh42fu5eby0d4ipfkv57tp61il9if12c53ie9le/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'#mytextarea'
        });
        
    </script>
</head>

<body>
    <div class="header">
        <h2>tambah Post</h2>
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
                <form action="../action/addpostaction.php" method="post" enctype="multipart/form-data">
                    <div class="w100 form-control">
                        <span class="title">Judul</span>
                        <input name="judul" type="text" placeholder="Judul" class="form-ctr">
                    </div>
                    <div class="w100 form-control">
                        <span class="title">Thumbnail</span>
                        <div class="w100 t-center">
                            <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-image-512.png"
                                class="w200" alt="" id="thumbnail">
                        </div>
                        <input name="file" type="file" placeholder="pilihgambar" onchange="loadFile(event)" class="form-ctr">
                    </div>
                    <div class="w100 form-control">
                        <span class="title">Content</span>
                        <textarea nname="konten" class="w100" id="mytextarea" cols="30" rows="10"></textarea>
                    </div>
                    <div class="w100 form-control">
                        <span class="title">Category</span>
                        <select name="kategori_id" id="" class="w100">

                        <?php
                    $id = 1;
                    $category = mysqli_query($con,"SELECT * FROM kategori");
                    foreach ($category as $data){
                    ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['kategori'] ?></option>
                    <?php } ?>
                        </select>
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
        var loadFile = function (event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('thumbnail');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
</body>

</html>