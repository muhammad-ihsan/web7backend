<?php
//mengambil fungsi koneksi
include "connect.php";
//mengambil fungsi koneksi

//deklarasi variabel
$judul       =       $_POST['judul'];
$konten      =       $_POST['konten'];
$kategori_id     =       $_POST['kategori_id'];
//deklarasi variabel

//deklarasi dan pindahkan gambar
if($_FILES['file']['name'])
{
    move_uploaded_file($_FILES['file']['tmp_name'],"../postimage/".$_FILES['file']['name']);
    $img=$_FILES['file']['name'];
}
//deklarasi dan pindahkan gambar

//insert ke tabel user
$user = mysqli_query($con,"INSERT INTO post(judul,konten,gambar,kategori_id)VALUES('$judul','$konten','$img','$kategori_id')");
//insert ke tabel user

//fungsi redirect ke halaman login
header("Location:../admin/post.php");
//fungsi redirect ke halaman login

?>