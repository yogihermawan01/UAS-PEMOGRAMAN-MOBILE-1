<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$cek_data=mysqli_query($conn,"SELECT * FROM pengguna WHERE username='$username'");
$cek =mysqli_num_rows($cek_data);

if ($cek > 0){
    echo"Data sudah ada";
}else{
    $input=mysqli_query($conn,"INSERT INTO pengguna (id,nama,email,username,password)VALUES('$id','$nama','$email','$username','$password')");
    if ($input){
        echo "Selamat anda telah terdaftar";
    }
}
?>