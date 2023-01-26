<?php
//mengambil fungsi koneksi
include "connect.php";
//mengambil fungsi koneksi

//deklarasi variabel
$nama       =       $_POST['username'];
$phone      =       $_POST['phone'];
$alamat     =       $_POST['address'];
$email      =       $_POST['email'];
$password   =       $_POST['password'];
//deklarasi variabel

//deklarasi dan pindahkan gambar
if($_FILES['file']['name'])
{
    move_uploaded_file($_FILES['file']['tmp_name'],"../image/".$_FILES['file']['name']);
    $img="../image/".$_FILES['file']['name'];
}
//deklarasi dan pindahkan gambar

//insert ke tabel user
$user = mysqli_query($con,"INSERT INTO user(email,password)VALUES('$email','$password')");
//insert ke tabel user

//insert ke tabel user_detail
$insert=mysqli_query($con,"INSERT INTO user_detail(profile,username,phone,address,user_id)VALUES('$img','$nama','$phone','$alamat',LAST_INSERT_ID())");
//insert ke tabel user_detail

//fungsi redirect ke halaman login
header("Location:../login.php");
//fungsi redirect ke halaman login

?>