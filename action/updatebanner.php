<?php
include "connect.php";
$id = $_POST['id'];
if($_FILES['file']['name'])
{
    move_uploaded_file($_FILES['file']['tmp_name'],"../Banner/".$_FILES['file']['name']);
    $img="../Banner/".$_FILES['file']['name'];
    $update = mysqli_query($con,"UPDATE banner SET
    gambar='$img' 
    WHERE id='$id'");

    if($update){
        echo '<script type="text/javascript">
        alert("Success Add New Banner");
        window.location.href="../admin/banner.php";
        </script>
        ';
    }
    else{
        echo '<script type="text/javascript">
        alert("Fail to input Banner");
        window.location.href="../admin/banner.php";
        </script>
        ';
    }
}
else 
{
    echo '<script type="text/javascript">
    alert("data kosong kembali banner");
    window.location.href="../admin/banner.php";
    </script>
    ';
}


?>