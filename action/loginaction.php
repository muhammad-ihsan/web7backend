<?php
//mengambil fungsi koneksi
include "connect.php";
//mengambil fungsi koneksi

//memulai session 
session_start();
//memulai session

//deklarasi Variabel 
$email   = $_POST['email'];
$password   = $_POST['password'];
//deklarasi Variabel 

//membuat fungsi Validasi login 
$login = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'");
//membuat fungsi Validasi login 

//fungsi mengembalikan nilai   menjadi True False 
$cek = mysqli_num_rows($login);
//fungsi mengembalikan nilai   menjadi True False 

if ($cek > 0) {

    //fungsi mengambil niali id untuk dioper di session 
    $test = mysqli_query($con, "SELECT  id FROM user WHERE email='$username' AND password='$password'");
    //fungsi mengambil niali id untuk dioper di session 
    
    //fungsi untuk menjadikan nilai kedalam array
    $row = mysqli_fetch_array($test);
    //fungsi untuk menjadikan nilai kedalam array
    
    //pengambilan nilai id pada array
    $id =  $row['id'];
    //pengambilan nilai id pada array
    
    //mendaftarkan nilai session id
    $_SESSION['id'] =  $id;
    //mendaftarkan nilai session id

    //mendaftarkan nilai session status untuk pengecekan login
    $_SESSION['status'] = "login";
     //mendaftarkan nilai session status untuk pengecekan login
     echo '<script type="text/javascript">
     alert("Sukses Login Selamat datang");
     window.location.href="../admin/index.php";
     </script>
     ';
 
} else {
    //fungsi redirect jika Login Tidak Berhasil
    $_SESSION['message']="Incorrect Username or Password."; 
    echo '<script type="text/javascript">
    alert("Gagal Login");
    window.location.href="../login.php";
    </script>
    ';
     //fungsi redirect jika Login Tidak Berhasil
}