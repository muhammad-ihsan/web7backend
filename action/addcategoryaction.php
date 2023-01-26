<?php
include "connect.php";
session_start();
$category = $_POST['category'];

$input = mysqli_query($con,"INSERT INTO kategori(kategori) VALUES ('$category')");

if($input){
    echo '<script type="text/javascript">
    alert("Success Add New Subject");
    window.location.href="../admin/category.php";
    </script>
    ';

}
else{
    echo '<script type="text/javascript">
    alert("Fail to input subject");
    window.location.href="../admin/category.php";
    </script>
    ';
}
?>