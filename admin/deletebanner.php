<?php
include '../action/connect.php';
$id = $_GET['id'];
$delete = mysqli_query($con,"DELETE FROM banner WHERE id ='$id'");
if($delete){
    echo '<script type="text/javascript">
    alert("data berhasil di hapus");
    window.location.href="banner.php";
    </script>
    ';
}
else{
    echo '<script type="text/javascript">
    alert("gagal input categori");
    window.location.href="banner.php";
    </script>
    ';
}
?>