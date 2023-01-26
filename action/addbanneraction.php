<?php
include "connect.php";
if($_FILES['file']['name'])
{
    move_uploaded_file($_FILES['file']['tmp_name'],"../Banner/".$_FILES['file']['name']);
    $img=$_FILES['file']['name'];
}
$input = mysqli_query($con,"INSERT INTO banner(gambar) VALUES('$img')");
if($input){
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
?>