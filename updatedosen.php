<?php

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE dosen SET 
        nama = '$nama',
        gender = '$gender',
        alamat = '$alamat',
        nohp = '$no_hp',
        email = '$email'
        WHERE nidn = '$nidn'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); 
    window.location = 'dosen.php';</script>";
}else{
    echo "Data gagal disimpan";
}