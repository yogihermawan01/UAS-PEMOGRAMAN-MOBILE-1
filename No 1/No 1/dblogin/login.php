<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$cek_data=mysqli_query($conn,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($cek_data);

if ($cek>0){
    echo "Berhasil login";
}else{
    echo "Gagal login";
}
?>