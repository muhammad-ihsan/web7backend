<?php
include "connect.php";
$id = $_POST['id'];
$categori = $_POST['category'];

$update = mysqli_query($con,"UPDATE kategori SET
 kategori='$categori' 
 WHERE id='$id'");
if($update){
    echo '<script type="text/javascript">
    alert("Success update category");
    window.location.href="../admin/category.php";
    </script>
    ';
}
else{
    echo '<script type="text/javascript">
    alert("Fail to input category");
    window.location.href="../admin/category.php";
    </script>
    ';
}
?>