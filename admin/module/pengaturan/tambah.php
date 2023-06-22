<?php
include 'config.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_member = $_POST['id_member'];
        $akses = $_POST['akses'];
        $nm_member = $_POST['nm_member'];
        $alamat_member = $_POST['alamat_member'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $NIK = $_POST['NIK'];
        $password = md5($password);

mysqli_query($koneksi, "INSERT INTO login VALUES(null,'$username','$password','$id_member','$akses')");
header("location:index.php");
?>